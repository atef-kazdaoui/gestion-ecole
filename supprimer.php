<!DOCTYPE html>
<?php
include_once "cnx.php";
$db = config::getConnexion();
$req= "SELECT * FROM eleve";
 $result = $db->query($req);
?>
<head>
    <div class="connexion-administrateur1">
        <title>ajouter eleve</title>

        <link rel="stylesheet" href="style.css">

        <script src="atef.js"> </script>


</head>

<body>

</body>

</html>