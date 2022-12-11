<?php

include_once "../../classes/Control/Control.class.php";

$ctl = new Control();

 if(!isset($_SESSION)) 
 { 
     session_start();
     if ($_SESSION["login"] !== 'admin') {
        header('Location: home.php');
    }else{
        /* loged in */
        if(isset($_GET['c'])){
            //$choice = $_GET['c'];
            $control = new Control();
                if(isset($_GET['a'])){
                    $action=$_GET['a'];
                    $control->$action();
                }
        }else{
            header('Location: index.php');
        }
    }
 }

if (isset($_GET["a"])) {
    if ($_GET["a"] === 'cancel') {
        header('Location: admin.php');
    }
 }else {
    header('Location: home.php');
}
