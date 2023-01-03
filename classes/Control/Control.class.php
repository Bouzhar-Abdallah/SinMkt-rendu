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
        $payLoad['quantite'] = $_POST["quantite"];
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
    public function update(){
        $choice = $_GET['c'];
        $id = $_GET['id'];
        
        $payLoad['nom'] = $_POST["produit"];
        $payLoad['prix'] = $_POST["prix"];
        $payLoad['quantite'] = $_POST["quantite"];
        $payLoad['description']= $_POST["description"];
        $payLoad['categorie'] = $_POST["categorie"];
        if (!empty($_FILES['image']['tmp_name'])) {
            $payLoad['image'] = file_get_contents($_FILES['image']['tmp_name']);
            
        }else {
            $payLoad['image'] = '';
            
        }
        
        $this->model->update($choice,$payLoad,$id);
        header('Location: '.$choice.'a.php');
        return;
    }


    
} 