<?php
include_once "cnx.php";
$db = config::getConnexion();
$ID=$_POST['ID'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$adresse=$_POST['adresse'];
$email=$_POST['email'];
$sql = " UPDATE `etudiant` SET nom='$nom', prenom='$prenom' , 
adresse='$adresse',email='$email' WHERE 
idetudiant='$ID'; ";
try{
    $req=$db->prepare($sql);
    $req->execute();
    header('Location: affichageadmin.php');
    }
    catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }
?>







