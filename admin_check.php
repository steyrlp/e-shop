<?php

$login=$_POST['username'];
$pass=$_POST['password'];

if($login==='admin' || $pass==='admin'){
    header("Location: admin_panel.php"); 
    exit;
}else{
    echo 'Не верный логин или пароль';
}

