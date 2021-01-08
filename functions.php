<?php

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

            foreach($users as $user){
                foreach($user as $value){
                    var_dump($user['email']);
                    var_dump($user['password']);
                    if ($user['email'] === $email && $user['password'] === $password){
                        $msg = 'prisiloginta';
                        return;
                    } else {
                        $msg = 'neteisingas pastas arba slaptazodis';
                    }               
                }

            }
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





?>