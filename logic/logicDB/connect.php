<?php
function connect(){
    $db = new PDO('mysql:host=localhost;dbname=filmlib', 'root', '');
    return $db;
}