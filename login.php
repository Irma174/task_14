<!-- авторизация пользователя -->

<?php   
if (!empty($_POST)) {

    include 'auth.php';
    
    $login = $_POST['login'] ?? '';
    $password = $_POST['password'] ?? '';
    $password = md5($password);

    if (checkPassword($login, $password)) {
        $timeEntrySite = time();
        setcookie('login', $login, 0, '/');
        setcookie('password', $password, 0, '/');
        setcookie('timeEntrySite', $timeEntrySite, 0, '/');
        header('Location: index.php');
    } else {
        header('Location: index.php');
    }
}
?>