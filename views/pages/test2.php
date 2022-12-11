<?php

//var_dump($_FILES['image']['tmp_name']);


include_once "../../classes/dbh.class.php";

$dbh = new Dbh();
    

        $sql = "insert into newArrivals (nom,prix,image,description,categorie) values(?,?,?,?,?)";
        $stmt = $dbh->connect()->prepare($sql);
        $stmt->execute([$nom,$prix,$image,$description,$categorie]);


       