<?php
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

if(mb_strlen($login) < 5 || mb_strlen($login) > 90) {
    echo "אורך שם משתמש לא תקין";
    exit();
} else if(mb_strlen($name) < 2 || mb_strlen($name) > 50){
    echo "אורך שם לא תקין";
    exit();
} else if(mb_strlen($pass) < 2 || mb_strlen($pass) > 6){
    echo "אורך ססמה לא תקין(2-6 תווים)";
    exit();
}


$pass = md5($pass."fdfddfjuklghug336757");

$mysql = new mysqli('localhost', 'root', '', 'register-il');
$mysql->query("INSERT INTO `users` (`login`, `pass`, `name`) VALUES('$login', '$pass', '$name')");

$mysql->close();

header('Location: /');