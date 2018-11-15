<!--To change this template file, choose Tools | Templates
    and open the template in the editor.-->
   
    <!--Créer une variable isEasy de type boolean et l'initialiser avec une valeur.
    Afficher C'est facile!! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!.
    Bonus : L'écrire de deux manières différentes.-->
    <!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <title>Exercice2</title>
        </head>
        <body>
            <?php
/// on crée une variable 
            $isEasy = "true";
            if ($isEasy == true) {
                echo "C'est facille!";
            } else { // SINON
                echo "C'est difficile!";
            }
            ?>
            <?php
/// on crée une variable 
            $isEasy = 1; //true = 1 et false = 0 en code
            if ($isEasy == 1) {
                echo "C'est facille!";
            } else { // SINON
                echo "C'est difficile!";
            }
            ?>
        </body>
    </html>
