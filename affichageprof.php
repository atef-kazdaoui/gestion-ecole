<html>

<?php
session_start();

if ($_SESSION['prof'] == "") {
    header('Location: http://localhost/Gestiondenotesdansuneécole/administrateur.php');
} else {

    include_once "cnx.php";
    $db = config::getConnexion();
    $req = "SELECT * FROM eleve";
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
            <li style="color:red; text-align: center;">liste des eleves </li>
        </h2>


        <table class="tableau-style1">

            <thead>
                <th> ID: </th>
                <th> nom: </th>
                <th> prenom:</th>
                <th> note mathematique:</th>
                <th> note physique : </th>
                <th> note anglais : </th>
                <th> note sport : </th>


                <th> modifier: </th>

            </thead>
            <?php
            foreach ($result as $row) {
            ?>

                <tbody>



                    <tr>
                        <td> <?php echo $row['ID']; ?> </td>
                        <td> <?php echo $row['nom']; ?> </td>
                        <td> <?php echo $row['prenom']; ?> </td>
                        <td><?php echo $row['note_math']; ?></td>
                        <td><?php echo $row['note_phy']; ?></td>
                        <td><?php echo $row['note_ang']; ?></td>
                        <td><?php echo $row['note_sport']; ?></td>
                        <td> <a href="modifierprof.php?ID=<?php echo $row['ID']; ?>">
                                <input nom="submit" type="button" value="modifier"></input></a> </td>
                                
                    </tr>




















                </tbody>
        <?php
            }
        }
        ?>
        </table>
        <h2>
            <li> <a href="index.php"> retourner a la page d'acceuil </a><br></li>
        </h2>
        <form method="POST" action="deconnexion.php">
            <button name="submit" id="button">deconnexion </button>





        </form>
    </body>
    </div>

</html>