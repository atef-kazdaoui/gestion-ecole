<html>

<?php
session_start();
$nom = $_SESSION['admin'];
if ($_SESSION['admin'] == "") {
    header('Location: http://localhost/Gestiondenotesdansuneécole/administrateur.php');
} else {
    $db = new PDO('mysql:host=localhost;dbname=loginsystem', 'root', '');
    $req = "SELECT idetudiant,nom,prenom,adresse,email FROM `etudiant`  ";
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
                <th> id: </th>
                <th> nom: </th>
                <th> prenom: </th>
                <th> adresse:</th>
                <th> email:</th>
                <th> modifier: </th>
                <th> supprimer: </th>
            </thead>

            <?php
            foreach ($result as $row) {
            ?>


                <tbody>



                    <tr>
                    <td> <?php echo $row['idetudiant']; ?> </td>
                        <td> <?php echo $row['nom']; ?> </td>
                        <td> <?php echo $row['prenom']; ?> </td>
                        <td> <?php echo $row['adresse']; ?> </td>
                        <td> <?php echo $row['email']; ?> </td>
                        <td> <a href="modifieradmin.php?idetudiant=<?php echo $row['idetudiant']; ?>">
                                <input nom="submit" type="button" value="modifier"></input></a> </td>

                        <td>
                            <a href="fctsupprimer.php?idetudiant=<?php echo $row['idetudiant']; ?>">
                                <input nom="submit" type="button" value="supprimer"></input></a>

                        </td>

                    </tr>

















            <?php
            }
        }
            ?>

                </tbody>


        </table>

        <h2> <a href="ajoutereleve.php">ajouter eleve </a> </h2>
        <h2> <a href="listeprof.php">liste des professeurs  </a> </h2>
        <form method="POST" action="deconnexion.php">
            <button name="submit" id="button">deconnexion </button>





        </form>



    </body>
    </div>


</html>