<?php
session_start();

$email=$_POST['email'];
$password=$_POST['password'];
 
echo $email;
echo $password;
$db = new PDO('mysql:host=localhost;dbname=loginsystem', 'root', '');
$sql="SELECT * FROM enseignant  WHERE `email` = '$email' AND `password`='$password'";
$result= $db->prepare($sql);
$result->execute();

 
if ($result->rowcount() > 0 ){
    
    
    
    foreach ($result as $row) {
$_SESSION['enseignant']=$row['idenseignant'];



    }
    echo "aaaa";
    header('Location: http://localhost/Gestiondenotesdansuneécole/affichageprof.php');
  
 

}else {
   echo " password incorrect ou numero incorrect ";
   ?>
  


<?php
  
}








?>