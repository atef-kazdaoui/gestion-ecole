<!DOCTYPE html>


<head>
    <div class="connexion-administrateur1">
        <title> connexion eleve</title>
        <h1 style="color:red; text-align: center;"> bienvenue </h1>
        <link rel="stylesheet" href="style.css">

        <script src="atef.js"> </script>
</head>

<body>
    <div>
        <h2 style="color:gold;">veuillez vous connecter s'il vous plait </h2>

        <form method="POST" action="logineleve.php">
            <h2 style="color: brown;">email : </h2> <input type="text" name="email" placeholder="votre email" id="email-eleve">
            <h2 style="color: brown;">password : </h2> <input type="text" name="password" placeholder="votre password " id="password-eleve">
            <br><br><br>

            <button id="button" name="submit" onclick="control3()">connexion</button>
            <h2> <li> <a href="index.php"> retourner a la page d'acceuil </a><br></li></h2>



        </form>

    </div>
</body>

</html>