<?php
include_once "cnx.php";
$db = config::getConnexion();
$sql = 'INSERT INTO `prof`(`id`, `numero`, `password`)
VALUES (:id,:numero,:password)';
try{
        $req=$db->prepare($sql);
        $req->bindValue(':id',$_POST['id']);
        $req->bindValue(':numero',$_POST['numero']);
        $req->bindValue(':password',$_POST['password']);
        $req->execute();
        header('Location: gererprof.php');
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    
    
    
    
    
    
    
    

    
    ?>
    