
Obiettivo: Creare una funzione in PHP chiamata calcolaAreaTriangolo che calcoli l'area di un triangolo dato base e altezza.

Requisiti:

La funzione deve accettare due parametri: base (un numero) e altezza (un numero).
La funzione deve restituire il valore dell'area del triangolo.
Assicurati di testare la funzione con almeno tre coppie di valori per base e altezza e stampare i risultati.


​<?php
// Definizione della funzione calcolaAreaTriangolo
function calcolaAreaTriangolo($base, $altezza) {
    $prodotto = $base * $altezza; // Moltiplica la base per l'altezza
    $area = $prodotto / 2;        // Divide il risultato per 2 per ottenere l'area
    return $area;                 // Restituisce l'area calcolata
}

$base1 = 5;
$altezza1 = 10;
$area1 = calcolaAreaTriangolo($base1, $altezza1);
echo "L'area del triangolo con base $base1 e altezza $altezza1 è: $area1<br>";
?>



Soluzione
Ecco come potresti implementare la funzione calcolaAreaTriangolo in PHP e testarla con alcuni valori:

<?php
// Definizione della funzione calcolaAreaTriangolo
function calcolaAreaTriangolo($base, $altezza) {
    $area = ($base * $altezza) / 2;
    return $area;
}

// Test della funzione con diversi valori
echo "Area del triangolo (base 5, altezza 10): " . calcolaAreaTriangolo(5, 10) . "<br>";
echo "Area del triangolo (base 7, altezza 3): " . calcolaAreaTriangolo(7, 3) . "<br>";
echo "Area del triangolo (base 15, altezza 2): " . calcolaAreaTriangolo(15, 2) . "<br>";
?>
