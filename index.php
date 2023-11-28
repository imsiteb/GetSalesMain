<!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;500;600;700&family=Rubik+Mono+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="cssRegistration/styleRegistration2.css">
    </head>
    <style>
        .active {
            background: #DDDDDD;
            border: 20;
            border-radius: 0 60px 0 0;
            padding: 27px;
        } 
    </style>
    <body>
        <div class="background">
            <div class="container">
                <?php
                if($_COOKIE['user'] == ''):
                ?>
                 <div class="form-box1">
                        <div class="btn-box">
                            <button type="button" class="toggle-btn" onclick="log()">Вход</button>
                            <button type="button" class="toggle-btn active"onclick="reg()">Регистрация</button>
                        </div>
                                <form  id="log" action="alidation/entrance.php" class="group" method="post">
                                        <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"> <br>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Введите пароль"><br>
                                        <button class="btn btn-success1" type="submit" onclick="tomain()">войти</button>
                                 </form>
                    </div>  
            </div>
           <?php else: ?>
            <?php
                header('Location: http://getsales/index.html');
                exit; 
                ?>
            <?php endif;?>

        </div>
            <script>
            function reg() {
                window.location.href='registration.php';
           }
            </script>
         

    </body>
    </html>
