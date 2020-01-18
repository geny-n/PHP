<?php

//fonction qui calcul le gap
function NextGap($gap){
    //réduit le gap en utilisant le facteur shrink (1.3)
    $gap = ($gap * 10)/13;

    //gap à pour valeur min 1
    if($gap < 1){
        $gap = 1;
    }
    //renvoi la valeur entière de gap
    return intval($gap);
}

function comb_sort(&$arr, $n, &$nbcomp, &$Ite){
    $gap = $n;
    //on créer et initialise une variable swapped afin
    // de s'assurer que ça boucle
    $swapped = true;
    while(($gap !== 1) || ($swapped == true)){
        $gap = NextGap($gap);
        //on passe swapped à false pour pouvoir vérifier
        // si le swap s'effectue
        $swapped = false;

        for($i = 0; $i < $n - $gap; $i++){
            if($arr[$i] > $arr[$i + $gap]){
                $tempo = $arr[$i];
                $arr[$i] = $arr[$i + $gap];
                $arr[$i + $gap] = $tempo;
                $swapped = true;
            }
            $nbcomp += 1;
            $Ite += 1;
        }
        $Ite += 1;
    }
}

$timestart=microtime(true); //lancement du "chrono"
$tab = explode(";", $argv[1]);
$nbcomp = 0; //compteur de comparaison
$Ite =0; //compteur d'itération
echo "Série : ", implode( ';', $tab ), "\n"; //supprimer dernier; 

$n = sizeof($tab);
comb_sort($tab, $n, $nbcomp, $Ite);

$timeend = microtime(true);
$time = number_format($timeend-$timestart, 2);
echo "Résultat : ", implode( ';', $tab),"\n";
echo "Nb de comparaison : $nbcomp \n";
echo "Nb d'itération : $Ite \nTemps (sec) : $time \n";

?>