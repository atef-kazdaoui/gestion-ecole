<html>

<?php
session_start();
$nom=$_SESSION['eleve'];
if ($_SESSION['eleve'] == "" ){
    header('Location: http://localhost/Gestiondenotesdansuneécole/eleve.php');
}else{
include_once "cnx.php";
$db = config::getConnexion();


?>

<head>
    <div class="connexion-administrateur1">
        <title> connexion administrateur</title>
       <h3 style="color: red;"> bienvenue </h3>
       <?php
       ?>
       <tr>
       <td>
       <?php
       echo date('l j F Y, H:i');
      ?>
       </td>
       
       </tr>
       
       
        <link rel="stylesheet" href="style.css">

        <script src="atef.js"> </script>


</head>

<body>
    <br><br><br><br><br>
    <h2 style="color: black;">
        <li style="color:red; text-align: center;">vos cordonneés </li>
    </h2>


    <table class="tableau-style1">

        <thead>
        <th> ID: </th>
                <th> nom: </th>
                <th> prenom:</th>
                <th> note mathematique:</th>
                <th> note physique : </th>
                <th> note anglais : </th>
                <th> note sport : </th>
                <th> note general : </th>               
        </thead>
        
            <tbody>



                <tr>
                <td> <?php echo $row['ID']; ?> </td>
                        <td> <?php echo $row['nom']; ?> </td>
                        <td> <?php echo $row['prenom']; ?> </td>
                        <td><?php echo $row['note_math']; ?></td>
                        <td><?php echo $row['note_phy']; ?></td>
                        <td><?php echo $row['note_ang']; ?></td>
                        <td><?php echo $row['note_sport']; ?></td>
                        <td><?php echo $tonnombre ; ?></td>
                   
                </tr>



















            </tbody>
        <?php
        }
        ?>
    </table>
   
   
  
<form method="POST" action="deconnexion.php">
<button name="submit" id="button">deconnexion </button>





</form>



</body>
</div>


</html>
<?php


}
?>