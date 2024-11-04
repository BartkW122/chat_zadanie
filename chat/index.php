<?php

require('db.php');
include('formlog.html.php');
session_name('log');
session_start();

if (!empty($_POST['name']) && strlen($_POST['name']) >= 3) {
    
    
    $_SESSION['name']=$_POST['name'];
    $_SESSION['wybor']=$_POST['wybor_chat'];


    //$_SESSION['users'] = []; 
    
    $_SESSION['users'][$_SESSION['name']] = [
        'name' => $_SESSION['name'],
        'wybor' => $_SESSION['wybor']
    ];
    foreach($_SESSION['users'] as $user){
        echo $user['name'];
    }
    header('Location: chat.html.php');
    exit(); 
    
} else {
    //echo '<script>alert("wypełnij pole!!!")</script>';
    echo 'wypelinj pole!!!';
}
?>
