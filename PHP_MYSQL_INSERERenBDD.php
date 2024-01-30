
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
    <link rel="stylesheet" href="formulairecss.css">
</head>
<body>
    <div class="formulaire">

    <form method="POST">
        
        <label for="nom">nom</label>
        <input type="text" name="nom" id="nom">

        <label for="prenom">prenom</label>
        <input type="text" name="prenom" id="prenom">

        <label for="age">age</label>
        <input type="number" name="age" id="age">

        <button type="submit">Envoyez</button>

    </form>
    </div>
    
    
</body>
</html>

<?php
//conn bdd
//inserer bdd = jsp
//verif qqun en bdd
//affichage élément bdd



    $connexion = mysqli_connect("localhost","root","","test");

    if($connexion){

        if( !empty($_POST["prenom"]) && !empty($_POST["nom"]) && !empty($_POST["age"] )){



           
            $requette = "insert into  client  VALUES ('".$_POST["prenom"]."','".$_POST["nom"]."' ,'".$_POST["age"]."'); "; 
            
           $resultat = mysqli_query($connexion,$requette);

            if($resultat ==true){
                echo "les données ont étés envoyer ";
            }
           
         

       


        }else{
            echo "tous les champs ne sont pas remplis";
        }
       



    }else{
        echo " vous n'etes pas connecter a la base";
    }









?>