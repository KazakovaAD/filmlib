<?php

function check_login($login){
    include "connect.php";
    $stmt = connect()->prepare("SELECT * FROM `users` WHERE '$login' = login");
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}