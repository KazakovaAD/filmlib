<?php

include "request.php";
    if(isset($_POST['login']) && isset($_POST['password']))
    {
        $login = $_POST['login'];
        $password = md5($_POST['password']);

        $data = check_login($login);
        if($data != 0)
        {
            if($data['password'] == $password)
            {
                session_start();
                $_SESSION['id'] = $data['id'];

                header("Location: lk.php");
            }
            else
            {
                header("Location: error_password.php");
            }
        }
        else
        {
            header("Location: error_login.php");
        }
    }


