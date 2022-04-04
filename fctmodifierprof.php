<?php
include_once "cnx.php";
$db = config::getConnexion();



$sql = " UPDATE eleve SET note_math=:note_math, note_phy=:note_phy, note_ang=:note_ang, note_sport=:note_sport WHERE ID=:ID ";


try{
    $req=$db->prepare($sql);
    $req->bindValue(':ID',$_POST['ID']);
    $req->bindValue(':note_math',$_POST['note_math']);
    $req->bindValue(':note_phy',$_POST['note_phy']);
    $req->bindValue(':note_ang',$_POST['note_ang']);
    $req->bindValue(':note_sport',$_POST['note_sport']);

    
    
    
    $req->execute();
    header('Location: affichageprof.php');
    }
    catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }









?>

















