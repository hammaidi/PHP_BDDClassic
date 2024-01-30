<?php


 $connexion = mysqli_connect("localhost","root","","empsce2");
if($connexion){


    $requette = "select * from employe;";
    $resultat = mysqli_query($connexion,$requette);
    $ligne = mysqli_fetch_assoc($resultat);

//pour afficher une ligne en php il faut mysqli fetch
   
while($ligne){

    echo $ligne["emp_nom"]; echo ", ";
    echo $ligne["emp_matricule"];
    $ligne = mysqli_fetch_assoc($resultat); // permet de changer de ligne
}

}
else{

    echo "c pas bon (la connexion a la bdd) ";
}

mysqli_close($connexion);
      

