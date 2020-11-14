<?php

include("logicDB/request.php");
if(isset($_POST['filmName']) && isset($_POST['filmDirector']) && isset($_POST['filmDuration']) && isset($_POST['filmDate']) && isset($_POST['filmDescription']))
{
    $filmName = $_POST['filmName'];
    $filmDirector = $_POST['filmDirector'];
    $filmDuration = $_POST['filmDuration'];
    $filmDate = $_POST['filmDate'];
    $filmDescription = $_POST['filmDescription'];
    add_films($filmName, $filmDirector, $filmDuration, $filmDate, $filmDescription);
    header("Location: ../lk.php");

}
