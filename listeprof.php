<html>

<?php
session_start();
$nom = $_SESSION['admin'];
if ($_SESSION['admin'] == "") {
    header('Location: http://localhost/Gestiondenotesdansuneécole/administrateur.php');
} else {
    $db = new PDO('mysql:host=localhost;dbname=loginsystem', 'root', '');
    $req = "SELECT enseignant.idenseignant,enseignant.nom,enseignant.prenom,enseignant.email,matiere.libelle FROM enseignant,matiere WHERE 
    enseignant.idenseignant=matiere.idenseignant; ";
    $result = $db->query($req);


?>

    <head>
        <div class="connexion-administrateur1">
            <title> connexion administrateur</title>
            <h3 style="color: red;"> bienvenue </h3>
            <?php
            ?>
            <tr>
                <td>
                    <?php
                    echo date('l j F Y, H:i');
                    ?>
                </td>

            </tr>


            <link rel="stylesheet" href="style.css">

            <script src="atef.js"> </script>


    </head>

    <body>
        <br><br><br><br><br>
        <h2 style="color: black;">
            <li style="color:red; text-align: center;">liste des eleves  </li>
        </h2>



        <table class="tableau-style1">



            <thead>
                <th> idenseignant: </th>
                <th> nom: </th>
                <th> prenom: </th>
                <th> email:</th>
                <th> matiere:</th>
                
            </thead>

            <?php
            foreach ($result as $row) {
            ?>


                <tbody>



                    <tr>
                    <td> <?php echo $row['idenseignant']; ?> </td>
                        <td> <?php echo $row['nom']; ?> </td>
                        <td> <?php echo $row['prenom']; ?> </td>
                        <td> <?php echo $row['email']; ?> </td>
                        <td> <?php echo $row['libelle']; ?> </td>
                        

                    </tr>

















            <?php
            }
        }
            ?>

                </tbody>


        </table>

        <h2> <a href="affichageadmin.php">retourner </a> </h2>
        
        <form method="POST" action="deconnexion.php">
            <button name="submit" id="button">deconnexion </button>





        </form>



    </body>
    </div>


</html>