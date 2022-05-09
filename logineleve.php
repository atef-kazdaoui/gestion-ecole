<?php
session_start();

$email=$_POST['email'];
$password=$_POST['password'];
 

$db = new PDO('mysql:host=localhost;dbname=loginsystem', 'root', '');
$sql="SELECT * FROM etudiant  WHERE `email` = '$email' AND `password`='$password'";
$result= $db->prepare($sql);
$result->execute();


 
if ($result->rowcount() > 0 ){
    
    
    
    foreach ($result as $row) {
$_SESSION['etudiant']=$row['idetudiant'];



    }
    echo "aaaa";
    header('Location: http://localhost/Gestiondenotesdansuneécole/affichageeleve.php');
  
 

}else {
   echo " password incorrect ou numero incorrect ";
   ?>
  


<?php
  
}

