<?php 

session_start();

if(!isset($_SESSION["user_ids"])){
    
    header("location:../../view/login.php");
}
?>