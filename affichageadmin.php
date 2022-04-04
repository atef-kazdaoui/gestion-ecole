<html>

<?php
session_start();
$nom=$_SESSION['admin'];
if ($_SESSION['admin'] == "" ){
    header('Location: http://localhost/Gestiondenotesdansuneécole/administrateur.php');
}else{
$db = new PDO('mysql:host=localhost;dbname=loginsystem', 'root', '');
$req="SELECT nom AS etudiant1 , prenom AS etudiant2 , libelle AS matiere , note AS note FROM etudiant INNER JOIN matiere INNER JOIN note ORDER BY matiere;  ";
$result = $db->query($req);


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
        <th> nom: </th>
                <th> prenom: </th>
                <th> matiere:</th>
                <th> note:</th>
        </thead>
        
        <?php
            foreach ($result as $row) {
            ?>


        <tbody>



<tr>
<td> <?php echo $row['etudiant1'];?> </td>
<td> <?php echo $row['etudiant2'];?> </td>
<td> <?php echo $row['matiere'];?> </td>
<td> <?php echo $row['note'];?> </td>
</tr>

















<?php
}
}
?>

</tbody>

  
    </table>
   

<form method="POST" action="deconnexion.php">
<button name="submit" id="button">deconnexion </button>





</form>



</body>
</div>


</html>
