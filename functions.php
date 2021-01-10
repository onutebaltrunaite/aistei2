<?php
session_start();

$users = [
    [
        'email' => 'labas@labas.lt',
        'password' => 'labas123'
    ],
    [
        'email' => 'krabas@krabas.lt',
        'password' => 'krabas123'  
    ],
    [
        'email' => 'begemotas@begemotas.lt',
        'password' => 'begemotas123'
    ]
];

$email = $password = '';
$emailErr = $passwordErr = ''; 

$msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // email validacija
    if(empty($_POST['email'])){
        $emailErr = 'Please fill in you email';
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = 'Please check you email';
        } 
    }
    // password gal validacija
    if(empty($_POST['password'])){
        $passwordErr = 'Please fill in you password';
    } else {
        $password = htmlspecialchars($_POST['password']);
    }

    // kai abu laukeliai uzpildyti
    if (!empty($_POST['email']) && !empty($_POST['password'])) {

        foreach($users as $user){
            if ($user['email'] === $email && $user['password'] === $password){
                $msg = 'Login in progress';
                $_SESSION['email'] = $email; 
                $_SESSION['start'] = time();
                $_SESSION['expire'] = $_SESSION['start'] + (10);

                Header('Location: home.php');
            } else {
                $msg = 'Tokio vartotojo nera';
            }               

            }
}
}



function showInputMsg($message)
{
    if ($message !== '') {
        return "<p class='msg-alert'>$message</p>";
    }
}






?>