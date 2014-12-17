<div id="nav">
    <ul>
        <li><a href="/index.php">Home</a></li>
        <li><a href="/index.php?action=about">About</a></li>
        <li><a href="/index.php?action=contactus">Contact</a></li>
        <li><a href="/index.php?action=portfolio">Portfolio</a></li>
        <li><a href="/index.php?action=investment">Investment</a></li>
        <?php if ($_SESSION ['access'] == 'admin') {
            ?>
            <li><a href="/index.php?action=admin">Admin</a></li>
            <?php
        }
        if ($_SESSION ['loggedin'] == true) {
            ?>
            <li><a href="/index.php?action=logout">Log Out</a></li>
        <?php } else {
            ?>
            <li><a href="/index.php?action=login">Login</a></li>
        <?php } ?>
    </ul>
</div>