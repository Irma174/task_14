<!-- выход из авторизации -->
<?php
        setcookie('login', '', -10000, '/');
        setcookie('password', '', -1000, '/');
        setcookie('timeEntrySite', '',-1000, '/');
        header('Location: index.php');
?>