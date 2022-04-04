<!DOCTYPE html>




<head>
    <div class="connexion-administrateur1">
        <title>ajouter eleve</title>

        <link rel="stylesheet" href="style.css">

        <script src="atef.js"> </script>


</head>

<body>
    <form method="POST" action="fctajouter.php">
        <h4 style="color: tomato;"> nom</h4> <input type="text" name="nom" placeholder="nom" id="nom">
        <h4 style="color: tomato;"> prenom</h4> <input type="text" name="prenom" placeholder="prenom" id="prenom">
        <h4 style="color: tomato;"> adresse</h4> <input type="text" name="adresse" placeholder="adresse" id="adresse">
        <h4 style="color: tomato;"> note mathematique</h4> <input type="number" name="note_math" placeholder="note_math" id="note_math">
        <h4 style="color: tomato;"> note physique</h4> <input type="number" name="note_phy" placeholder="note_phy" id="note_phy">
        <h4 style="color: tomato;"> note anglais</h4> <input type="number" name="note_ang" placeholder="note_ang" id="note_ang">
        <h4 style="color: tomato;"> note sport</h4> <input type="number" name="note_sport" placeholder="note_sport" id="note_sport"><br><br>
        <input type="submit" name="submit" value="ajouter">
    </form>
</body>

</html>