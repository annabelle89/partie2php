
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>exercice3php</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php
        //Traduire ce code avec des if et des else :
        //<?php                     if                              else
        //echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';<==écriture ternaire
        
        $gender='homme';
        if($gender!='homme'){
            echo 'C\'est un développeuse !!!';
        }
        else{
            echo 'C\'est une développeur !!!';
        }







        ?>
    </body>
</html>