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
$ID=$_GET['ID'];
$sql='SELECT * FROM eleve WHERE ID='.$ID.'';
$list=$db->query($sql);


?>

<?php
foreach ($list as $eleve){
    

?>
<form method="POST" action="fctmodifierprof.php">

        <input type="hidden" name="ID" value=<?php echo $eleve['ID'] ?> >

        
        <h4 style="color: tomato;"> note mathematique</h4> <input type="number" name="note_math" value=<?php echo $eleve['note_math']?> id="nouveau-note-math"><br>
        <h4 style="color: tomato;"> note physique</h4> <input type="number" name="note_phy" value=<?php echo $eleve['note_phy']?> id="nouveau-note-phy"><br>
        <h4 style="color: tomato;"> note anglais</h4> <input type="number" name="note_ang" value=<?php echo $eleve['note_ang']?> id="nouveau-note-ang"><br>
        <h4 style="color: tomato;"> note sport</h4> <input type="number" name="note_sport" value=<?php echo $eleve['note_sport']?> id="nouveau-note-sport"><br>
        <input type="submit" name="submit" value="modifier ">

    </form>
<?php }?>

</body>








</html>