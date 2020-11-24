<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>exercice2php</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
    </head>
    <body>

    <?php
/*Créer deux variables age et gender. La variable gender peut prendre comme valeur :
Homme
Femme
En fonction de l'âge et du genre afficher la phrase correspondante :
Vous êtes un homme et vous êtes majeur
Vous êtes un homme et vous êtes mineur
Vous êtes une femme et vous êtes majeur
Vous êtes une femme et vous êtes mineur
Gérer tous les cas.*/

$age=(int)15;
$gender='femme';
if(($gender=='femme') && ($age>=18)){
    echo 'Vous êtes une femme et vous êtes majeure !';
}
else if(($age<18) &&($gender=='femme')){
    echo 'Vous êtes une femme et vous êtes mineure !';
}
else if (($gender=='homme') && ($age>18)){
    echo 'Vous êtes un homme et vous êtes majeur !';
}
else{
echo '<p>Vous êtes un homme et vous êtes mineur !</p>';
}

echo 'Vous êtes '.(($gender=='femme')?'une femme !':'un homme !');
?>        
        
    </body>
</html>