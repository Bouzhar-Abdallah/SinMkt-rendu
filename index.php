<?php 
session_start();
define("PROJ_DIR", dirname(__FILE__));
include_once PROJ_DIR . "/classes/Model/loginModel.class.php";

$loginM = new signupModel();

if(isset($_GET['a'])){

    $action=$_GET['a'];
    $loginM->$action();
    
}else{
    header('Location: views/pages/home.php');
}
