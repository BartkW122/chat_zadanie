<?php
session_name('log');
session_start();


foreach($_SESSION['users'] as $user){
    unset($_SESSION['users']['name']);
}

header('Location: index.php');
exit();
