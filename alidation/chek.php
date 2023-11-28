<?php
$login = filter_var( trim($_POST ['login']), FILTER_SANITIZE_STRING);
$pass = filter_var( trim($_POST ['password']), FILTER_SANITIZE_STRING);
$name = filter_var( trim($_POST ['name']), FILTER_SANITIZE_STRING);

//проверка количества с-в
if(mb_strlen($login)<5 || mb_strlen($login)> 90 ) {
    echo "Недопустимая длина логина";
    exit();
}elseif(mb_strlen($name)<3 || mb_strlen($name)> 30 ) 
{
    echo "Недопустимая длина имени";
    exit();
}elseif(mb_strlen($pass)<3 || mb_strlen($pass)> 10 ) 
{
   echo "Недопустимая длина пароля";
    exit();
}

//хеширование пароля
$pass = md5($pass."hujhgr678");

//подключение к бд
$mysql = new mysqli ('127.0.0.1:3306', 'imsiteb', 'imsiteb17', 'test1');

//работа с таблицей бд
$mysql->query("INSERT INTO `users` (`login`, `pass`, `name` ) VALUES('$login', '$pass', '$name')");
$mysql->close();


//переадресация на страницу с формой
header('Location: ../index.php');
?>
