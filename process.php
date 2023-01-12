<!-- форма регистрации, внесение в базу данных -->

<?php
session_start();
include 'auth.php';

$full_name = $_POST['full_name'] ?? null;
$full_surename = $_POST['full_surename'] ?? null;
$full_patrname = $_POST['full_patrname'] ?? null;
$login = $_POST['login'] ?? null;
$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;
$password_confirm = $_POST['password_confirm'] ?? null;
$dateRegistr=time();


if($full_name!=null&&$full_surename!=null&&$full_patrname!=null&&$login!=null&&$email!=null&&($password === $password_confirm)){  
   if(existsUser($login)){
      $_SESSION['message'] = 'Пользователь с таким логином существует';
      header('Location: registr.php');
   }else{
      $password = md5($password);

      $taskList = getUsersList();  
      $taskList[] = ['full_name'=>$full_name, 'full_surename'=>$full_surename,'full_patrname'=>$full_patrname,'login'=>$login,'email'=>$email,'password'=>$password, 'dateRegistr'=>$dateRegistr];
      
      file_put_contents('baza.json',json_encode($taskList, JSON_UNESCAPED_UNICODE));
   
      header('Location: index.php');
   }


} elseif($password !== $password_confirm) {
   $_SESSION['message'] = 'Пароли не совпадают';
   header('Location: registr.php');
} else{
   $_SESSION['message'] = 'Поля не могут быть пустыми';
   header('Location: registr.php');
}