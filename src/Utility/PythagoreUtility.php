<?php

namespace App\Utility;

class PythagoreUtility
{
    public function display(int $size = 10): String
    {
        // $table = [];
        // for ($i = 1; $i <= $size; $i++) {
        //     for ($j = 1; $j <= $size; $j++) {
        //         $table[$i][$j] = $i * $j;
        //     }
        // }
        // return $table;
   
$taille = 11;
$tableHTML = "<table>"; // Début de la table

// Générer la première ligne d'en-tête
$tableHTML .= "<tr>";
$tableHTML .= "<th></th>"; // Case vide dans le coin supérieur gauche
// for ($i = 0; $i < $taille; $i++) {
//     $tableHTML .= "<th>$i</th>";
// }
$tableHTML .= "</tr>";

// Boucles pour générer le reste du tableau
for ($i = 0; $i < $taille; $i++) {
    $tableHTML .= "<tr>";

    // Première colonne (en-tête de chaque ligne)
    $tableHTML .= "<th>$i</th>";

    for ($j = 1; $j < $taille; $j++) {
        if($i == 0){
            $tableHTML .= "<td>" . ($j) . "</td>";
        }else{
            if ($i == $j && $i != 0) {
                // Remplacer la diagonale par "X"
                $tableHTML .= "<td>X</td>";
            }  else {
                // Autres cases (produit de i et j)
                $tableHTML .= "<td>" . ($i * $j) . "</td>";
            }
        }
       
    }
    $tableHTML .= "</tr>";
}

$tableHTML .= "</table>"; // Fin de la table

return $tableHTML;


    }
}
