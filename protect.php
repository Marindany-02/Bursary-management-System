<?php
session_start();
//checking if session exists
if(! isset($_SESSION["logged_in"])){
    header("location:login.php");
}