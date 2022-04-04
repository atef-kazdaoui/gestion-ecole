<html>

<head>
    <div class="connexion-administrateur1">
      <title> connexion administrateur</title>
     <h1 style="color:red; text-align: center;"> bienvenue </h1>
     <link rel="stylesheet" href="style.css">
     <script src="atef.js"></script>
</head>
<body>
        <h2 style="color:gold;">veuillez vous connecter s'il vous plait </h2>
    
        <form class="connexion-administrateur" method="POST" action="loginadmin.php" >
            <h2 style="color: brown;">email administrateur : </h2> <input type="text" name="emailadministrateur" placeholder="votre email " id="email-administrateur">
            <h2 style="color: brown;">mot de passe : </h2> <input type="password" name="password" placeholder="mot de passe " id="password-administrateur">
            <br><br><br>
            <button type="submit" id="button" >connexion </button>
            <br><br><br>
            <h2> <li> <a href="index.php"> retourner a la page d'acceuil </a><br></li></h2>



        </form>

</div>
</body>
</html>