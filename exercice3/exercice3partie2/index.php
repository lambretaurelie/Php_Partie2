<!--To change this template file, choose Tools | Templates
    and open the template in the editor.-->

<!--Créer deux variables age et gender. La variable gender peut prendre comme valeur :
    Homme
    Femme
En fonction de l'âge et du genre afficher la phrase correspondante :
    Vous êtes un homme et vous êtes majeur
    Vous êtes un homme et vous êtes mineur
    Vous êtes une femme et vous êtes majeur
    Vous êtes une femme et vous êtes mineur
Gérer tous les cas.-->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice3</title>
    </head>
    <body>
        <?php
/// on crée deux variables 
        $age = "12";
        $gender = "homme";
        if ($age > 0 && ($gender == 'homme' || $gender == 'femme')) {
            if ($age < 18 && $gender == homme) {
                echo "Vous êtes un homme et vous êtes mineur!";
            } else if ($age >= 18 && $gender == homme) {
                echo "Vous êtes un homme et vous êtes majeur!";
            } else if ($age < 18 && $gender == femme) {
                echo "Vous êtes une femme et vous êtes mineur!";
            } else { // SINON
                echo "Vous êtes une femme et vous êtes majeur!";
            }
        } else {
            echo "Vous avez fait une erreur!";
        }
        ?>
    </body>
</html>

