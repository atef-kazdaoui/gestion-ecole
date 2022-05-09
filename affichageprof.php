<html>

<?php
session_start();

if ($_SESSION['enseignant'] == "") {
    header('Location: http://localhost/Gestiondenotesdansuneécole/administrateur.php');
} else {

    $db = new PDO('mysql:host=localhost;dbname=loginsystem', 'root', '');
    $id = $_SESSION['enseignant'];
    echo $id;
    $req = " SELECT matiere.idmatiere,etudiant.idetudiant,etudiant.nom,etudiant.prenom,matiere.libelle,note.note FROM etudiant,matiere,note,enseignant 
    WHERE  etudiant.idetudiant=note.idetudiant AND
    matiere.idmatiere=note.idmatiere AND enseignant.idenseignant=matiere.idenseignant AND enseignant.idenseignant='$id';";
    $result = $db->query($req);
    


?>

    <head>
        <div class="connexion-administrateur1">
            <title> connexion prof </title>
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
            <th> idmatiere: </th>
                <th> ID: </th>
                <th> nom: </th>
                <th> prenom: </th>
                <th> libelle:</th>
                <th> note: </th>


                <th> modifier note: </th>

            </thead>
            <?php
            echo $result->rowcount();
            foreach ($result as $row) {
                $_SESSION['enseignant']=$row['idmatiere'];
            ?>

                <tbody>



                    <tr>
                    <td> <?php echo $_SESSION['enseignant']; ?> </td>
                        <td> <?php echo $row['idetudiant']; ?> </td>

                        <td> <?php echo $row['nom']; ?> </td>
                        <td> <?php echo $row['prenom']; ?> </td>
                        <td> <?php echo $row['libelle']; ?> </td>
                        <td><?php echo $row['note']; ?></td>
                        <td> <a href="modifiernote.php?idetudiant=<?php echo $row['idetudiant']; ?>">
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