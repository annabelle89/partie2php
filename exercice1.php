<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>exercice1php</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
    </head>
    <body>
        <?php
//Créer une variable age et l'initialiser avec une valeur.
//Si l'âge est supérieur ou égale à 18, afficher "Vous êtes majeur". Dans le cas contraire, afficher "Vous êtes mineur".

$age=(int) 31;

if($age>=18){
    echo "Vous êtes majeur !";
}
else {
    echo "Vous êtes mineur !";
}




?>
        
    </body>
</html>