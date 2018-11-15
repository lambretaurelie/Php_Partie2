<!--To change this template file, choose Tools | Templates
    and open the template in the editor.-->

<!--Traduire ce code avec des if et des else 
 echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';-->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice5</title>
    </head>
    <body>
        <?php
// on crée une variable 
        $gender = 'homme';
        if ($gender != 'homme') {
            echo 'C\'est une développeuse !!!';
        } else { // SINON
            echo 'C\'est un développeur !!!';
        }
        ?>
    </body>
</html>


