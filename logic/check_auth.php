<?php
session_start();
if (isset($_GET['action']))
{

    if(($_GET['action'])=='logout')
    {
        session_destroy();
        header("Location: index.php");
    }
}


if (!$_SESSION['id'])
{
    header("Location: authorization.php");
}


