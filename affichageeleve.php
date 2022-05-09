<html>

<?php
session_start();

if ($_SESSION['etudiant'] == "") {
    header('Location: http://localhost/Gestiondenotesdansuneécole/eleve.php');
} else {

    $db = new PDO('mysql:host=localhost;dbname=loginsystem', 'root', '');
    $id = $_SESSION['etudiant'];

    $req = "SELECT etudiant.nom,etudiant.prenom,matiere.libelle,note.note FROM `etudiant`,`matiere`,`note`
     WHERE etudiant.idetudiant=note.idetudiant AND matiere.idmatiere=note.idmatiere AND etudiant.idetudiant='$id'; ";
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
            <?php foreach ($result as $row) {

            ?>
                <thead>
                    <th> nom: </th>
                    <th> prenom: </th>
                    <th> <?php echo $row['libelle'] ?></th>
                    
                    


                    
                      
                </thead>
                

                <tbody>



                    <tr>



                        <td> <?php echo $row['nom']; ?> </td>
                        <td> <?php echo $row['prenom']; ?> </td>
                        
                        
                        <td> note <?php echo $row['note']; ?> </td>
                              



                    </tr>
                    <?php  } ?>




















                </tbody>
        <?php

        
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