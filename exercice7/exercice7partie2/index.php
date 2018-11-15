<!--To change this template file, choose Tools | Templates
    and open the template in the editor.-->

<!--Traduire ce code avec des if et des else :
echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';-->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice7</title>
    </head>
    <body>
        <?php
/// on crée une variable
        $isOk = 'false';
        if ($isOk == 'false') {
            echo 'c\'est pas bon !!!';
        } else { // SINON
            echo 'c\'est ok !!';
        }
        ?>
    </body>
</html>


