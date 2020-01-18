<?php

function bubble_sort(&$arr, &$nbcomp, &$Ite){
    $lenght = sizeof($arr);
    //parcour de tous les éléments
    for($count = 0; $count < $lenght; $count++){
        //les derniers $count éléments sont déjà en place
        for($count2 = 0; $count2 < $lenght - $count - 1; $count2++){
            //parcours l'array et échange les élément si celui pointer est plus grand que sont suivant
            if($arr[$count2] > $arr[$count2 + 1]){
                $tempo = $arr[$count2];
                $arr[$count2] = $arr[$count2 + 1];
                $arr[$count2 + 1] = $tempo;
            }
            $nbcomp +=1;
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

bubble_sort($tab, $nbcomp, $Ite);

$timeend = microtime(true);
$time = number_format($timeend-$timestart, 2);
echo "Résultat : ", implode( ';', $tab),"\n";
echo "Nb de comparaison : $nbcomp \n";
echo "Nb d'itération : $Ite \nTemps (sec) : $time \n";

?>