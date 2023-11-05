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
            border-radius: 60px 0 20px 0;
            padding: 27px;
        } 
    </style>
    <body>
        <div class="background">
            <div class="container">
                 <div class="form-box">
                        <div class="btn-box">
                            <button type="button" class="toggle-btn active" onclick="log()">Вход</button>
                            <button type="button" class="toggle-btn" onclick="reg()" >Регистрация</button>
                        </div>
                            <form  id="reg" action="alidation/chek.php" class="group" method="post">   
                                <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"> <br>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Введите пароль"><br>
                                <button class="btn btn-success" type="submit">зарегистрироваться</button>
                            </form>
                    </div>  
            </div>
        </div>
            <script>
            var x=document.getElementsById("log")   
            var y=document.getElementsById("reg")
            
                
            function log() {
                window.location.href='index.php';
           }

       
            </script>

    </body>
    </html>
