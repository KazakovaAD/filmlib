<?php
include "request.php";
session_start();
if(isset($_POST['login']) && isset($_POST['password']))
{
    $login = $_POST['login'];
    $password = $_POST['password'];

    $date = check_login($login);
    if($date != 0)
    {
        if($date['password'] == $password)
        {
            //echo "Авторизация <br/>";
            setcookie("UID", $date['id']*2);
            header("Location: lk.php");
        }
        else
        {
            //echo "Неверный пароль<br/>";
            header("Location: error_password.php");
        }
    }
    else
    {
        //echo "Неверный логин";
        header("Location: error_login.php");
    }
}

