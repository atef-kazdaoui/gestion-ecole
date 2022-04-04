<html>

<?php
session_start();

if ($_SESSION['admin'] == "") {
    header('Location: http://localhost/Gestiondenotesdansuneécole/administrateur.php');
} else {
    $db = new PDO('mysql:host=localhost;dbname=loginsystem', 'root', '');
$req = "SELECT * FROM prof";
$result = $db->query($req);

?>

    <head>
        <div class="connexion-administrateur1">
            <title> gérer les profs</title>
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
            <li style="color:red; text-align: center;">liste des professeurs: </li>
        </h2>


        <table class="tableau-style1">

            <thead>
                <th> ID: </th>
                <th> numero: </th>
                <th> password:</th>
                


                <th> modifier: </th>
                <th> supprimer: </th>

            </thead>
            <?php
            foreach ($result as $row) {
            ?>

                <tbody>



                    <tr>
                        <td> <?php echo $row['id']; ?> </td>
                        <td> <?php echo $row['numero']; ?> </td>
                        <td> <?php echo $row['password']; ?> </td>
                        <td><a href="fctsupprimerprof.php?id=<?php echo $row['id']; ?>"> <input nom="submit" type="button" value="supprimer"></input></a></td>
                                            <td> <a href="modifiergererprof.php?id=<?php echo $row['id']; ?>">
                                <input nom="submit" type="button" value="modifier"></input></a> </td>
                                
                    </tr>




















                </tbody>
        <?php
            }
        }
        ?>
        </table>
        <h2> <li> <a href="ajouterprof.php"> ajouter prof </a><br></li></h2>
        <h2>
            <li> <a href="affichageadmin.php"> retourner a la page d'acceuil </a><br></li>
        </h2>
        <form method="POST" action="deconnexion.php">
            <button name="submit" id="button">deconnexion </button>





        </form>
    </body>
    </div>

</html>