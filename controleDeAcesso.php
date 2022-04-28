<?php
session_star();

if( !isset($_SESSION['id']) ){

    header('location: login.php');
    exit();

}