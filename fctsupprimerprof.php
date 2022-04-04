<?php
include_once "cnx.php";
$db = config::getConnexion();

$sql="DELETE FROM prof where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$_GET['id']);
		try{
            $req->execute();
            header('Location: gererprof.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

?>