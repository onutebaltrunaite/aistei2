<?php
require('./functions.php');

var_dump($users);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php require('./inc/nav.php'); ?>
<div class="container">
    <h3>LOGIN</h3>
    <form action="" method="POST" autocomplete="off">
        <div class="input-group">
            <label for="email">El. paštas</label>
            <input type="text" name="email" id="email" value="<?php echo $email;?>">
            <?php echo showInputMsg($emailErr); ?>
        </div>
        <div class="input-group">
            <label for="password">Slaptažodis</label>
            <input type="text" name="password" id="password" value="<?php echo $password;?>">
            <?php echo showInputMsg($passwordErr); ?>
        </div>

        <?php echo showInputMsg($msg); ?>

        <button type='submit'>Prisijungti</button>
    </form>    
</div>





</body>
</html>