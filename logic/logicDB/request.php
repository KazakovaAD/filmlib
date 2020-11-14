<?php
function check_login($login)
{
    include "connect.php";
    $stmt = connect()->prepare("SELECT * FROM `users` WHERE :login = login");
    $stmt->bindParam(':login', $login, PDO::PARAM_STR, 30);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
function add_users($login, $password)
{
    include "connect.php";
    $stmt = connect()->prepare("INSERT INTO users (login, password) VALUES (:login, :password)");
    $stmt->bindParam(':login', $login, PDO::PARAM_STR, 30);
    $stmt->bindParam(':password', $password, PDO::PARAM_STR, 32);
    $stmt->execute();
}
function read_films()
{
    include "connect.php";
    $stmt = connect()->prepare("SELECT * FROM films");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function add_films($name, $director, $duration, $date, $description)
{
    include "connect.php";
    $stmt = connect()->prepare("INSERT INTO films (id, name, director, duration, date, description) VALUES (NULL,:name, :director, :duration, :date, :description)");
    $stmt->bindParam(':name', $name, PDO::PARAM_STR, 32);
    $stmt->bindParam(':director', $director, PDO::PARAM_STR, 32);
    $stmt->bindParam(':duration', $duration, PDO::PARAM_INT, 32);
    $stmt->bindParam(':date', $date, PDO::PARAM_STR, 12);
    $stmt->bindParam(':description', $description);
    $stmt->execute();
}
function show_message($id)
{
    include "connect.php";
    $stmt = connect()->prepare("SELECT message FROM `messages` WHERE :id = id_user");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_Ф);
}