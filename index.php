<?php 
session_start();
define("PROJ_DIR", dirname(__FILE__));
include_once PROJ_DIR . "/classes/loginModel.class.php";

/*
 /Applications/MAMP/htdocs/sinmkt/SinMkt-rendu */

/* header('Location: ./views/pages/loginForm.php'); */
/* echo $_SERVER["PHP_SELF"]; */

$loginM = new signupModel();

if(isset($_GET['a'])){

    $action=$_GET['a'];
    $loginM->$action();
    
}

    //$loginM->login($login,$password);