
<?php
 $login = filter_var( trim($_POST ['login']), FILTER_SANITIZE_STRING);
 $pass = filter_var( trim($_POST ['password']), FILTER_SANITIZE_STRING);
echo $login;
echo $pass;
// //хеширование пароля
 $pass = md5($pass."hujhgr678");

// //подключение к бд
 $mysql = new mysqli ('127.0.0.1:3306', 'root', '', 'test1');

// //получение данных из бд
$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");

// //конвертация данных из бд в массив
$user = $result->fetch_assoc();
if (empty($user)){
    echo "Такой пользователь не найден";
    exit();
}

setcookie('user', $user['name'], time()+ 3600 * 24 * 30, "/");
$mysql->close();
//переадресация на страницу с формой
header('Location: ../index.php');
?>