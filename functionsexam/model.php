<?php

/* 
 * Function Exam model
 */

/*  Get the Guitar1 database connection before anything else */
//function 1
function connection(){
   
    $servername = "localhost";
    $username = "daytonde";
    $password = "DaytonBaby0515!";

try {
    $conn = new PDO("mysql:host=$servername;dbname=daytonde_guitar1", $username, $password);
    $stmt = $conn->prepare('SELECT DISTINCT products.categoryID, categoryName '
                            . 'FROM products INNER JOIN categories '
                            . 'WHERE products.categoryID = categories.categoryID');
    $stmt->execute();

    $i = 0;
    $array = array();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $array[$i] = $row['categoryName'];
    $i++;
}
   if (sizeof($array)!= 0){ 
   return $array;
   }else{
       return FALSE;
   } 
    
}
    
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
}
//function 2
function buildNav(){ 
    $categoryNames = connection();
    $navigation = "<ul>";
    for($i = 0; $i < sizeof($categoryNames); $i++){
        $navigation .= "<li><a href = '#'>" . $categoryNames[$i] . "</a></li>";
    }
    $navigation .= "</ul>";
    
    return $navigation;

}     
?>