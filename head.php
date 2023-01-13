<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task_14</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <header>
        <div class="title">
                    <h5 class="text-center text-white"> Модуль 14. Задание. 14.8. Практика. Демо-версия сайта для SPA-салона. </h5>
        </div>
        <div class="menu">
            <div class="container">
                <div class="menu_inner">
                    <div class="logo">
                        <img src="../images/logo.png" alt="">
                    </div>
                    <div class="line"></div>
                    <ul class="nav">
                        <li><a href="#">О нас</a></li>
                        <li><a href="#">Новости и акции</a></li>
                        <li><a href="#">Услуги</a></li>
                        <li><a href="#">Программа лояльности</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>                     
                    <?php
                    include 'auth.php'; 
                    $login = getCurrentUser();
                    if ($login === null):?>
                    <div class="form">
                        <p>Личный кабинет</p>                    
                        <form action="login.php" method="post">
                            <label>Логин</label>
                            <input type="text" name="login" placeholder="Введите логин">
                            <label>Пароль</label>
                            <input type="Password" name="password" placeholder="Введите пароль">
                            <button type="submit">Войти</button>
                        </form>  
                        <a href='registr.php'>Зарегистрироваться</a>
                    </div>
                    <?php else: ?>
                    <div class="form_out">
                        <p><?= 'Добро пожаловать,<br/>'. $login.'!<br/>'?></p>
                        <a href="logout.php">Выйти</a>
                    </div>  
                    </div>
                        <?php endif; ?>                                             
                </div>
            </div>
        </div>
    </header>
</body>
</html>