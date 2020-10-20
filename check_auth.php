<?php
session_start();

if (isset($_GET['action']))
{

    if(($_GET['action'])=='logout')
    {
        setcookie('UID', '');
        session_destroy();
        header("Location: index.php");
    }
}

if(isset($_COOKIE['UID']))
{
    $_SESSION[$_COOKIE['UID']]=$_COOKIE['UID']/2;
}

if (empty($_SESSION[$_COOKIE['UID']]))
{
    header("Location: authorization.php");
}


