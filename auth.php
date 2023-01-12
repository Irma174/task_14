<?php
session_start();

// функция возврата массива всех пользователей и хэшей их паролей;
function getUsersList(){
    $array = file_get_contents('baza.json');
    $array_users = json_decode($array);
    return $array_users;
}

// функция проверки, существует ли пользователь с указанным логином;
function existsUser($login) {
    $user_List = getUsersList();   
    foreach($user_List as $user){
        $array_login = $user->login;
        if($array_login === $login){
            return true;
        }
        return false;
    }
}

//функция проверки авторизации: логин и пароль
function checkPassword($login, $password){
    $user_List = getUsersList();
    if(isset($user_List)){
        foreach($user_List as $user){
            $array_login = $user->login;
            $array_password = $user->password;
            if($array_login === $login && $array_password === $password){
                return true;
            }
        } 
    }return false;
}

//функция полечения имени (логина) пользователя, вошедшего на сайт
function getCurrentUser(){
    $loginFromCookie = $_COOKIE['login'] ?? '';
    $passwordFromCookie = $_COOKIE['password'] ?? '';

    if(checkPassword($loginFromCookie, $passwordFromCookie)){
        return $loginFromCookie;
    }
    return null;
}

//функция получения даты регистрации пользователя, вошедшего на сайт
function getDateRegistr($login){
    $array_users = getUsersList();
    if(isset($array_users)){
        foreach($array_users as $user){
            if($login === $user->login){
                $array_date_Registr = $user->dateRegistr;
                return $array_date_Registr;
            }   
        }
        return null;
    }
}

?>