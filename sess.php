<?php 
require('./functions.php');


$nameee = '';
if (isset($_SESSION['username']) && !empty($_SESSION['username'])){
    $nameee = $_SESSION['username'];
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php require('./inc/nav.php'); ?>
    <h1>Session <?php echo $nameee; ?></h1>

    <?php
    
    var_dump($_SESSION);
    // $_SESSION['loggedIn'] = true;
    // $_SESSION['username'] = 'BOB';
    
    
    // session_destroy();
    ?>





</body>
</html>