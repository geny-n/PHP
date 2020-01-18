<?php

function shell_sort(&$arr,&$nbcomp,&$Ite) {
	$gap = round(count($arr)/2);
	while($gap > 0)
	{
		for($i = $gap; $i < count($arr); $i++){
			$tempo = $arr[$i];
			$j = $i;
			while(($j >= $gap) && ($arr[$j-$gap] > $tempo))
			{
				$arr[$j] = $arr[$j - $gap];
				$j -= $gap;
				if($j >= $gap){
					$nbcomp += 1;
				}
                $Ite += 1;
			}
			$arr[$j] = $tempo;
			$nbcomp += 1;
            $Ite += 1;
		}
        $gap = round($gap/2.2); // 2.2 car si 2 plantage? ou temps ultra long. fonctionne aussi avec 2.1 ou 2.3 mais 2.2 plus opti
		$Ite += 1;
	}
}


$timestart=microtime(true); //lancement du "chrono"
$tab = explode(";", $argv[1]);
$nbcomp = 0; //compteur de comparaison
$Ite =0; //compteur d'itération
echo "Série : ", implode( ';', $tab ), "\n"; //supprimer dernier; 

shell_sort($tab,$nbcomp,$Ite);

$timeend = microtime(true);
$time = number_format($timeend-$timestart, 2);
echo "Résultat : ", implode( ';', $tab),"\n";
echo "Nb de comparaison : $nbcomp \n";
echo "Nb d'itération : $Ite \nTemps (sec) : $time \n";
?>