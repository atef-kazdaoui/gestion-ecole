<?php
include_once "cnx.php";
$db = config::getConnexion();

$id=$_GET['idetudiant'];
$sql=" DELETE FROM etudiant WHERE idetudiant='$id' ";
		
		try{
            $req=$db->prepare($sql);
            $req->execute();
            header('Location: affichageadmin.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

?>