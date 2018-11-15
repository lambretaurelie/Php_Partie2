<!--To change this template file, choose Tools | Templates
    and open the template in the editor.-->

<!--Traduire ce code avec des if et des else :
echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';-->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice6</title>
    </head>
    <body>
        <?php
/// on crée une variable 
        $age = "19";
        if ($age >= 18) {
            echo 'Tu es majeur';
        } else { // SINON
            echo 'Tu n\'es pas majeur';
        }
        ?>
    </body>
</html>


