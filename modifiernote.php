<html>
<head>
<div class="connexion-administrateur1">
        <title>modification note </title>

        <link rel="stylesheet" href="style.css">

        <script src="atef.js"> </script>
</head>

<body>

<?php
session_start();
include_once "cnx.php";
$db = config::getConnexion();
$ID=$_GET['idetudiant'];
$id = $_SESSION['enseignant'];
$sql='SELECT * FROM `note` WHERE idetudiant='.$ID.' AND idmatiere='.$id.'';
$list=$db->query($sql);
foreach ($list as $eleve){
?>
<form method="POST" action="fctmodifiernote.php">

        
        <input type="hidden" name="ID" value=<?php echo $eleve['idetudiant'] ?> > 
         <input type="hidden" name="idmatiere" value=<?php echo $eleve['idmatiere']?> id="nouveau-nom"><br>
        
        
        <h4 style="color: tomato;"> note:</h4> <input type="text" name="note" value=<?php echo $eleve['note']?> id="nouveau-adresse"><br>
        
        <input type="submit" name="submit" value="modifier">

    </form>
<?php }?>






</body>








</html>