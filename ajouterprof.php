<!DOCTYPE html>
<head>
    <div class="connexion-administrateur1">
        <title>ajouter eleve</title>

        <link rel="stylesheet" href="style.css">

        <script src="atef.js"> </script>
</head>
<body>
    <form method="POST" action="fctajouterprof.php">
        <h4 style="color: tomato;"> id:</h4> <input type="text" name="id" placeholder="id" id="id">
        <h4 style="color: tomato;"> numero:</h4> <input type="text" name="numero" placeholder="numero" id="numero">
        <h4 style="color: tomato;"> password :</h4> <input type="password" name="password" placeholder="password" id="password">
       <br>
       <br>
        <input type="submit" name="submit" value="ajouter">
    </form>
</body>
</html>