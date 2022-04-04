<?php
session_start();
if(isset($_POST['submit'])){
$numero=$_POST['numero'];
$password=$_POST['password'];

$db = new PDO('mysql:host=localhost; dbname=loginsystem', 'root', '');
$sql="SELECT * FROM `prof` WHERE numero = '$numero' AND password='$password'";
$result=  $db->prepare($sql);

$result->execute();
if ($result->rowcount() > 0 ){
    
    $_SESSION['prof']=$numero;
    
    header('Location: http://localhost/Gestiondenotesdansuneécole/affichageprof.php');
 

}else {
  
   echo " password incorrect";
   ?>
   <h2> <li> <a href="professeur.php"> retourner a la page d'acceuil </a><br></li></h2>
 
 
 <?php
}






}

?>
