<?php
include_once "cnx.php";
$db = config::getConnexion();
session_start();
$idadmin = $_SESSION['idadmin'];
$sql = 'INSERT INTO `etudiant`(`idadmin`,`nom`, `prenom`,`adresse`,`email`,`password`)
VALUES ('.$idadmin.',:nom,:prenom,:adresse,:email,:password)';
try {
    $req = $db->prepare($sql);
    
    $req->bindValue(':nom', $_POST['nom']);
    $req->bindValue(':prenom', $_POST['prenom']);
    $req->bindValue(':adresse', $_POST['adresse']);
    $req->bindValue(':email', $_POST['email']);
    $req->bindValue(':password', $_POST['password']);





    $req->execute();
    header('Location: affichageadmin.php');
} catch (Exception $e) {
    echo 'Erreur: ' . $e->getMessage();
}
