<?php
session_start();

$emailadministrateur=$_POST['emailadministrateur'];
$password=$_POST['password'];

$db = new PDO('mysql:host=localhost;dbname=loginsystem', 'root', '');
$sql="SELECT * FROM `admin` WHERE email = '$emailadministrateur' AND password ='$password'";


$result= $db->prepare($sql);

$result->execute();


if ($result->rowcount() > 0 ){
    
    $_SESSION['admin']=$emailadministrateur;
    foreach ($result as $row) {
$_SESSION['idadmin']=$row['idadmin'];



    }
    echo "aaaa";
    header('Location: http://localhost/Gestiondenotesdansuneécole/affichageadmin.php');
  
 

}else {
   echo " password incorrect ou numero incorrect ";
   ?>
  <h2> <li> <a href="administrateur.php"> retourner a la page d'acceuil </a><br></li></h2>


<?php
  
}








?>
