<?php
require ("logic/check_auth.php");
require ("view/header.php");
if ($_SESSION['id'] == 4)
{
    require ("view/forAdminLK.php");
}
else
{
    require ("view/filmsLK.php");
}
require ('view/footer.php');

