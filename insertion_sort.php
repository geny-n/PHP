<?php
function insertion_sort(&$tab, &$nb_comp, &$nb_ite)
{
	for ($i = 0; $i < count($tab); $i++) {
		$temp = $tab[$i];
		$j = $i;
		while (($j > 0) && ($tab[$j - 1] > $temp)) {
			$tab[$j] = $tab[$j - 1];
			$j -= 1;
			$nb_comp ++;
			$nb_ite ++;
		}
		$nb_ite ++;
		$nb_comp ++;
		$tab[$j] = $temp;
	}
}

$nb_comp = 0;
$nb_ite = 0;

$timestart = microtime(true);
$tab = explode(";", $argv[1]);
echo "Série : ", implode(';', $tab ), "\n"; 
insertion_sort($tab, $nb_comp, $nb_ite);
echo "Résultat : ", implode(';', $tab),"\n";
echo "Nb de comparaison : $nb_comp\n";
echo "Nb d'itération : $nb_ite\n";
$time = number_format(microtime(true) - $timestart, 2);
echo "Temps (sec) : ", $time,"\n";
?>