<?php
/**
 * Created by PhpStorm.
 * User: Nayeema Lail
 * Date: 11/25/2014
 * Time: 2:23 PM
 */
function checkLogin(){
    session_start();

    if(!isset($_SESSION['myusername'])){
        header("Location:login.php");
    }
}