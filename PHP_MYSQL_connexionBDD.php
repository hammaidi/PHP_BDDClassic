<?php

echo "bonjour, vous tes connectés a la base  ";
echo "Entrez vos coordonées";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!--FORMULAIRE-->

    <form method="POST">
        <input type="text" placeholder="nom" name="nom" id="nom">
        <input type="text" placeholder="prenom" name="prenom" id="prenom">
        <input type="submit">
    </form>
    
</body>
</html>

<?php

        // LE BUT EST DE DIRE BOUJOUR A LUTILISATEUR QUI EST DEJA INSCRIT EN BASE

    $connexion = mysqli_connect("localhost","root","","empsce");
    if($connexion){

        $requette = "select * from employe;";
        $resultat = mysqli_query($connexion, $requette);
        $affichage = mysqli_fetch_assoc($resultat);
        $acces = false;  // initialisation pour le message "vous etes connecter pour pas quil boucle a 'infinie"

        
      
        // var_dump($_POST);
        // print_r( ["Emp_nom"]);

        while($affichage){
            if($_POST["nom"] == $affichage["Emp_nom"]  && $_POST["prenom"] ==  $affichage["Emp_pnom"]){

                echo "vous etes bien un employe";
                $acces = true;
            }
        
            $affichage = mysqli_fetch_assoc($resultat);
        }

        if($acces == false){
            echo "vous n'etes pas un employé ou mauvais code";
        }
        

            











        
    }
?>