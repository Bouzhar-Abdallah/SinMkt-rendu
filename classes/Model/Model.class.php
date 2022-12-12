<?php
include_once "../../classes/dbh.class.php";
class Model extends dbh{
    
    public function saveNew($choice,$payLoad){
        $sql = "insert into $choice (nom,prix,quantite,description,categorie,image) values(?,?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        return $stmt->execute([$payLoad['nom'],$payLoad['prix'],$payLoad['quantite'],$payLoad['description'],$payLoad['categorie'],$payLoad['image']]);
    }

    public function delete($choice,$id){

            $sql = "delete from $choice where id_$choice=$id";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            
    }
    public function listItems($choice){
        $sql = "select * from $choice";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        
        return $stmt->fetchAll();
    }
    public function update($choice,$payLoad,$id){
        
        $sql = "update $choice SET nom=?,prix=?,quantite=?,description=?,categorie=?,image=? where id_$choice=$id ";
        $stmt = $this->connect()->prepare($sql);
        return $stmt->execute([$payLoad['nom'],$payLoad['prix'],$payLoad['quantite'],$payLoad['description'],$payLoad['categorie'],$payLoad['image']]);
    }


    public function getClub($id){
        $sql = "select * from club where id=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        $results = $stmt->fetch();
        return $results;
      /*  return $stmt; */
    }
    

    
    
} 
