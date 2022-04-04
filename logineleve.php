<?php
session_start();
 
if(isset($_POST['submit'])){
$email=$_POST['email'];
$password=$_POST['password'];
include_once "cnx.php";
$db = config::getConnexion();
$sql="SELECT * FROM étudiant WHERE email=$email AND password=$password";

$result= $db->query($sql);


if ($result->rowcount() > 0 ){
    
    $_SESSION['eleve']=$email;
    header('Location: http://localhost/Gestiondenotesdansuneécole/affichageeleve.php');
 

}else {
  
   echo " password incorrect";
  ?>
  <h2> <li> <a href="eleve.php"> retourner a la page d'acceuil </a><br></li></h2>


<?php


}






}

?>












