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
        <h4 style="color: tomato;"> email</h4> <input type="text" name="email" placeholder="email" id="email">
        <h4 style="color: tomato;">password</h4> <input type="password" name="password" placeholder="password" id="password"><br>
        <input type="submit" name="submit" value="ajouter">
    </form>
</body>

</html>