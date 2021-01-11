<?php 
require('./functions.php');


var_dump($_SESSION);

$name = '';
if (isset($_SESSION['email']) && !empty($_SESSION['email'])){
    $name = $_SESSION['email'];
}

$now = time();
if ($now > $_SESSION['expire']){
    session_destroy();
    echo "Your session has expired! <a href='index.php'></a>";
    Header('Location: index.php');
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
    <h1>Welcome back,  <?php echo $name; ?></h1>

    <script>
        function goingBackToLogin(){
            setTimeout(function(){window.location.href = "index.php";}, 10000);
        }
        goingBackToLogin();
    </script>
        
</body>
</html>


