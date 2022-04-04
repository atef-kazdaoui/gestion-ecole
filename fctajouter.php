<?php
include_once "cnx.php";
$db = config::getConnexion();
$sql = 'INSERT INTO `eleve`(`ID`, `nom`, `prenom`,`adresse`,`note_math`,`note_phy`,`note_ang`,`note_sport`)
VALUES (:ID,:nom,:prenom,:adresse,:note_math,:note_phy,:note_ang,:note_sport)';
try{
        $req=$db->prepare($sql);
        $req->bindValue(':ID',$_POST['ID']);
        $req->bindValue(':nom',$_POST['nom']);
        $req->bindValue(':prenom',$_POST['prenom']);
        $req->bindValue(':adresse',$_POST['adresse']);
        $req->bindValue(':note_math',$_POST['note_math']);
        $req->bindValue(':note_phy',$_POST['note_phy']);
        $req->bindValue(':note_ang',$_POST['note_ang']);
        $req->bindValue(':note_sport',$_POST['note_sport']);
    
    
        
        
        
        $req->execute();
        header('Location: affichageadmin.php');
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    
    
    
    
    
    
    
    

    
    ?>
    
