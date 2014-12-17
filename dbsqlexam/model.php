<?php
/* ***************************************
 * DB and SQL Exam model
 * **************************************/

/* ***************************************
 * Get access to the database connection
 * **************************************/
    //get connection within each function. 
/* ***************************************
 * Get navigation items from database
 * **************************************/
function getNavigation() {
    $servername = "localhost";
    $username = "daytonde";
    $password = "DaytonBaby0515!";
    $guitar1 = new PDO("mysql:host=$servername;dbname=daytonde_guitar1", $username, $password);
try {
    $stmt = $guitar1->prepare('SELECT DISTINCT products.categoryID, categoryName '
                            . 'FROM products INNER JOIN categories '
                            . 'WHERE products.categoryID = categories.categoryID');
    $stmt->execute();
    $navList = $stmt->fetchAll();
    $stmt->closeCursor();
  } catch (PDOException $exc) {
    header('location: ./error.php');
    exit;
  }
  if (!empty($navList)) {
    return $navList;
  } else {
    return FALSE;
  }
}

/* ***************************************
 * Get the list of items by category
 * **************************************/
function getCategoryItems($category) {
    $servername = "localhost";
    $username = "daytonde";
    $password = "DaytonBaby0515!";
    $guitar1 = new PDO("mysql:host=$servername;dbname=daytonde_guitar1", $username, $password);
  try {
      $stmt = $guitar1->prepare('SELECT productID, productName FROM products WHERE categoryID=' . $category . '');
      $stmt->execute();
      $results = $stmt->fetchAll();
      $stmt->closeCursor();
  } catch (Exception $ex) {
    header('location: ./error.php');
    exit;
  }
  if(!empty($results)){
    return $results;
  } else{
    return FALSE;
  }
}

/* ***************************************
 * Get item based on its key
 * **************************************/
function getItem($productid) {
    $servername = "localhost";
    $username = "daytonde";
    $password = "DaytonBaby0515!";
    $guitar1 = new PDO("mysql:host=$servername;dbname=daytonde_guitar1", $username, $password);
  try {
      $stmt = $guitar1->prepare('SELECT productID, productName, listPrice FROM products WHERE productID=' . $productid . '');
      $stmt->execute();
      $results = $stmt->fetchAll();
      //var_dump($results); die;
      $stmt->closeCursor();
  } catch (Exception $ex) {
    header('location: ./error.php');
    exit;
  }
  if(!empty($results)){
    return $results;
  } else{
    return FALSE;
  }
}

/* ***************************************
 * Build the navigation menu list
 * **************************************/
function buildNav(){
  $navItems = getNavigation();
  if(is_array($navItems)){
    $navigation = '<ul>';
    foreach ($navItems as $item) {
      $navigation .= "<li><a href='/dbsqlexam?action=q&amp;category=$item[0]' title='View our $item[1]'>$item[1]</a></li>";
    }
    $navigation .= '</ul>';
  } else {
    $navigation = 'Sorry, a critical error occurred.';
  }
  return $navigation;
}