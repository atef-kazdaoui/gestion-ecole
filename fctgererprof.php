<?php
include_once "cnx.php";
$db = config::getConnexion();
$sql = " UPDATE prof SET id=:id,numero=:numero,password=:password WHERE id=:id ";
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


