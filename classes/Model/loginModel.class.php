<?php
include_once PROJ_DIR . "/classes/dbh.class.php";

class signupModel extends dbh{

    public function checkLogin($login,$password){

        $sql = "SELECT * FROM ADMIN WHERE login=? and password = '$password'";
        //connect do the connection with db
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$login]); 
        $results = $stmt->fetch();
        
        if($results){
                        //password & login exist
                        $test = array_values($results); 
                        // header('location: ../views/admin.php');
                        return $test[0]; //returns number of members in an array
                    }
                else {
                        return 0;
                    }
       
    }
    public function logout(){
        session_start();
        unset($_SESSION['login']);
        session_destroy();
        header('Location: ./views/pages/home.php');
        
    }
    public  function login(){
        $login = $_POST['Email'];
        $password = $_POST['password'];
        
        if (isset($login)) {
            if (isset($password)){
                if($this->checkLogin($login,$password)){
                    session_start();
                    $_SESSION["login"] = 'admin';
                    header('Location: ./views/pages/home.php');
                }else {
                    header('Location: ./views/pages/home.php');
                }
            }
            else {
                echo 'no passowrd';
            }
        }
        
            }
        }
?>