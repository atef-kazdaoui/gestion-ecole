<html>
<head>
<div class="connexion-administrateur1">
        <title>ajouter eleve</title>

        <link rel="stylesheet" href="style.css">

        <script src="atef.js"> </script>
</head>

<body>

<?php
include_once "cnx.php";
$db = config::getConnexion();
$ID=$_GET['idetudiant'];
$sql='SELECT idetudiant,nom,prenom,adresse,email FROM `etudiant` WHERE  idetudiant='.$ID.' ; ';
$list=$db->query($sql);


foreach ($list as $eleve){
    

?>
<form method="POST" action="fctmodifieradmin.php">

        <input type="hidden" name="ID" value=<?php echo $eleve['idetudiant'] ?> >

       
        <h4 style="color: tomato;"> nom</h4> <input type="text" name="nom" value=<?php echo $eleve['nom']?> id="nouveau-nom"><br>
        <h4 style="color: tomato;"> prenom</h4> <input type="text" name="prenom" value=<?php echo $eleve['prenom']?> id="nouveau-prenom"><br>
        <h4 style="color: tomato;"> adresse</h4> <input type="text" name="adresse" value=<?php echo $eleve['adresse']?> id="nouveau-adresse"><br>
        <h4 style="color: tomato;"> email</h4> <input type="text" name="email" value=<?php echo $eleve['email']?> id="nouveau-email"><br>
        
        <input type="submit" name="submit" value="modifier">

    </form>
<?php }?>






</body>








</html>