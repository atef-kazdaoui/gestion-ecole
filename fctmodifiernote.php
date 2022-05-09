<?php
session_start();
include_once "cnx.php";
$db = config::getConnexion();
$idmatiere=$_POST['idmatiere'];
$idetudiant=$_POST['ID'];
$note=$_POST['note'];





$sql = " UPDATE `note` SET note='$note'   WHERE idetudiant='$idetudiant' AND idmatiere='$idmatiere'; ";

try{
    $req=$db->prepare($sql);
    $req->execute();
    
    header('Location: affichageprof.php');
    }
    catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }
?>