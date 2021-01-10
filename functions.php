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

$email = '';
$emailErr = ''; 

$msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // echo 'forma issiusta';

    if (empty($_POST['email']) || empty($_POST['password']) || empty($_POST['passwordRepeat'])) {
        $msg = 'Užpildykite visus laukelius';
    } else {

        $email = ($_POST['email']);

        if($_POST['password'] === $_POST['passwordRepeat']){
            $password = ($_POST['password']);

            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            Header('Location: sess.php');
            // foreach($users as $user){
            //     foreach($user as $value){
            //         var_dump($user['email']);
            //         var_dump($user['password']);
            //         if ($user['email'] === $email && $user['password'] === $password){
            //             $msg = 'Toks vartotojas jau egzistuoja';
            //             return;
            //         } else {
            //             $newUser = [
            //                 'email' => "$email",
            //                 'password' => "$password"
            //             ];
            //             $users[] = $newUser;
            //             $msg = 'Naujas vartotojas sukurtas';
            //             return;
            //         }               
            //     }
            // }
        } else {
            $msg = 'Nesutampa slaptazodziai';
        }
    }
}



function showInputMsg($message)
{
    if ($message !== '') {
        return "<p class='msg-alert'>$message</p>";
    }
}




// SU SESSION KAZKAS






















?>