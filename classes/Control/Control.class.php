<?php

include_once "../../classes/Model/Model.class.php";

class Control {
   
    protected $model;
    public function __construct()
    {
        $this->model = new Model();
    }

    public function saveNew(){
        $choice = $_GET['c'];
        
        $payLoad['nom'] = $_POST["produit"];
        $payLoad['prix'] = $_POST["prix"];
        $payLoad['prix'] = $_POST["quantite"];
        $payLoad['description']= $_POST["description"];
        $payLoad['categorie'] = $_POST["categorie"];
        $payLoad['image'] = file_get_contents($_FILES['image']['tmp_name']);
        
        $this->model->saveNew($choice,$payLoad);
        header('Location: '.$choice.'a.php');
        return;
    }

    public function delete(){
        $choice = $_GET['c'];
        $id=$_GET['id'];
        $this->model->delete($choice,$id);
        header('Location: '.$choice.'a.php');
    }

    public function listItems($choice){
        
        return $this->model->listItems($choice);
    }
    public function show(){
        $choice = $_GET['c'];
        header('Location: ../'.$choice.'a.php');
    }




    public function edit(){
        $id = intval($_GET["id"]);
        //Get one club
        $club = $this->model->getClub($id);
        $clubMembers = $this->model->getClubMembersRows($id);
        require_once PROJ_DIR . "/views/pages/editclub.php";
    }

    public function save(){
        $file=$_FILES['logo'];
        if ($file['error']>0) {
            $fileDestination=$_POST['logoD'];
        }else{
        $file_name = $file['name'];
        $tem_name = $file['tmp_name'];
        $fileExt = explode('.', $file_name);
        $fileExtlowCase = strtolower(end($fileExt));
        $fileNameToSave = uniqid('',true).".".$fileExtlowCase;
        $fileDestination = 'views/uploads/'.$fileNameToSave;
        move_uploaded_file($tem_name,$fileDestination);
        }
        
        /* $logo = $_POST["logo"];  */
        $nom= $_POST["nom"]; 
        $description= $_POST["description"]; 
        
        if (isset($_POST['newrep'])) {
            $newrepID = $_POST['newrep'];
        }else {
            $newrepID = 0;
        }
        $id=$_GET["id"];
        $this->model->updateClub($nom,$description,$id,$newrepID,$fileDestination);
        /* var_dump($_POST); */
        header("Location: index.php?c=clubs&a=clubForm&id=$id"); 
    }
    public function test(){
        $test= $this->model->getClubMembersCount(1);
        var_dump($test);
    }
} 