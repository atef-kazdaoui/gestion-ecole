<html>
<head>
<div class="connexion-administrateur1">
        <title>gerer professeur</title>

        <link rel="stylesheet" href="style.css">

        <script src="atef.js"> </script>
</head>
<body>
<?php
include_once "cnx.php";
$db = new PDO('mysql:host=localhost;dbname=loginsystem', 'root', '');
$id=$_GET['id'];

$sql='SELECT * FROM prof WHERE id='.$id.'';
$list=$db->query($sql);
?>

<?php
foreach ($list as $prof){
    

?>
<form method="POST" action="fctgererprof.php">

        <input type="hidden" name="id" value=<?php echo $prof['id'] ?> >

        
        <h4 style="color: tomato;"> id:</h4> <input type="text" name="id" value=<?php echo $prof['id']?> id="nouveau-id"><br>
        <h4 style="color: tomato;"> numero:</h4> <input type="text" name="numero" value=<?php echo $prof['numero']?> id="nouveau-numero"><br>
        <h4 style="color: tomato;"> password:</h4> <input type="password" name="password" value=<?php echo $prof['password']?> id="nouveau-password"><br>
        <input type="submit" name="submit" value="modifier ">

    </form>
<?php }?>

</body>

</html>