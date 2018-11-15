<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!--Créer une variable age et l'initialiser avec une valeur.
Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur.-->
<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice1</title>
    </head>
    <body>
        <?php
/// on crée une variable 
        $age = 5;
        if ($age > 0) {
            if ($age >= 18) { // SI l'âge est supérieur ou égal à 18
                echo "Vous êtes majeur!";
            } else { // SINON
                echo "Vous êtes mineur!";
            }
        } else {
            
        }echo "Vous êtes pas né(e)!" //cet écho est fais pour éviter les ages négatif
        ?>
    </body>
</html>