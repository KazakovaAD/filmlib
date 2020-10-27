<?php
function check_login($login){
    include "connect.php";
    $stmt = connect()->prepare("SELECT * FROM `users` WHERE :login = login");
    $stmt->bindParam(':login', $login, PDO::PARAM_STR, 30);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
function add_users($id, $login, $password){
    include "connect.php";
    $stmt = connect()->prepare("INSERT INTO users (id, login, password) VALUES (:id,:login, :password)");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->bindParam(':login', $login, PDO::PARAM_STR, 30);
    $stmt->bindParam(':password', $password, PDO::PARAM_STR, 32);
    $stmt->execute();
}
function show_message($id){
    include "connect.php";
    $stmt = connect()->prepare("SELECT message FROM `messages` WHERE :id = id_user");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}