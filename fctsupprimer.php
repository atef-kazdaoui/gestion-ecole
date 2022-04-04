<?php
include_once "cnx.php";
$db = config::getConnexion();

echo $_GET['ID'];
$sql="DELETE FROM eleve where ID= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$_GET['ID']);
		try{
            $req->execute();
            header('Location: affichageadmin.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

?>