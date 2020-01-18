<?php

function quick_sort(&$arr, &$nbcomp) {
    $taille = count($arr);
    if($taille === 0) {
        return array();
    }

    $pivot = $arr[0];
    $left = array();
    $right = array();

    for ($i =1; $i < $taille; $i++) {
        if ($arr[$i] < $pivot) {
            $left[] = $arr[$i];
        } else {
            $right[] = $arr[$i];
        }
        $nbcomp += 1;
    }
    return array_merge((quick_sort($left, $nbcomp)), array($pivot), (quick_sort($right,$nbcomp)));

}

$timestart=microtime(true); //lancement du "chrono"
$tab = explode(";", $argv[1]);
$nbcomp = 0; //compteur de comparaison
echo "Série : ", implode( ';', $tab ), "\n"; //supprimer dernier; 

$newtab = quick_sort($tab,$nbcomp);

$timeend = microtime(true);
$time = number_format($timeend-$timestart, 2);
echo "Résultat : ", implode( ';', $newtab),"\n";
echo "Nb de comparaison : $nbcomp \n";
echo "Temps (sec) : $time \n";

?>