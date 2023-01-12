<!-- форма регистрации на странице сайта -->
<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task_12</title>
    <link rel="stylesheet" href="style.css">

</head>
<body class="regisrt">
    <div class="container">
        <div class="form_regisrt">
            <p>Для регистрации необходимо заполнить все поля</p>                    
            <form action="process.php" method="post">
                <label>Фамилия</label>
                <input type="text" name="full_name" placeholder="Введите свои фамилию">
                <label>Имя</label>
                <input type="text" name="full_surename" placeholder="Введите свое имя">
                <label>Отчество</label>
                <input type="text" name="full_patrname" placeholder="Введите свое отчество">
                <label>Логин</label>
                <input type="text" name="login" placeholder="Введите свой логин">
                <label>Электронная почта</label>
                <input type="email" name="email" placeholder="Введите адрес своей электронной почты">
                <label>Пароль</label>
                <input type="Password" name="password" placeholder="Введите пароль">
                <label>Подтверждение пароля</label>
                <input type="Password" name="password_confirm" placeholder="Подтвердите пароль">
                <button type="submit">Зарегистрироваться</button>
            </form>   
            <p> У вас уже есть аккаунт ? <a href='index.php'>авторизируйтесь</a>
            </p>

            <?php
                if(isset($_SESSION['message'])){
                    echo '<p class="msg">' . $_SESSION['message'] . '</p>';  
                }                
                    unset($_SESSION['message']);
            ?>
        </div>
</div>