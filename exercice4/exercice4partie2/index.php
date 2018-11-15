<!--To change this template file, choose Tools | Templates
    and open the template in the editor.-->

<!--    L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de terre. Cette échelle va de 1 à 9.
 Créer une variable magnitude. Selon la valeur de magnitude, afficher la phrase correspondante.
 Magnitude 	Phrase
 1 	Micro-séisme impossible à ressentir.
 2 	Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.
 3 	Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.
 4 	Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.
 5 	Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.
 6 	Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.
 7 	Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.
 8 	Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.
 9 	Séisme capable de tout détruire sur une très vaste zone.

Gérer tous les cas.
Utilser autre chose que des if else-->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice4</title>
    </head>
    <body>
        <?php
/// on crée une variable 
        $magnitude = "5";
        switch ($magnitude) { // on indique sur quelle variable on travaille
            case 1: // dans le cas où $magnitude vaut 1
                echo "Micro-séisme impossible à ressentir.";
                break;
            case 2: // dans le cas où $magnitude vaut 2
                echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
                break;
            case 3: // dans le cas où $magnitude vaut 3
                echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
                break;
            case 4: // etc. etc.
                echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
                break;
            case 5:
                echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
                break;
            case 6:
                echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
                break;
            case 7:
                echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
                break;
            case 8:
                echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
                break;
            case 9:
                echo "Séisme capable de tout détruire sur une très vaste zone";
                break;
            default:
                echo "Désolé, mais votre donnée est fausse";
        }
        ?>
    </body>
</html>
