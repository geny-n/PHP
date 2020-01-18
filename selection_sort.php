<?php
function selection_sort(&$tab, &$nb_comp, &$nb_ite) {
	for ($i = 0; $i < (count($tab) - 1); $i++) {
		$min = $i;
		for ($j = $i + 1; $j < count($tab); $j++) {
			if ($tab[$j] < $tab[$min]) {
				$min = $j;
			}
			$nb_comp ++;
			$nb_ite ++;
		} 
		if ($min !== $i) {
			$temp = $tab[$min];
			$tab[$min] = $tab[$i];
			$tab[$i] = $temp;
		}
		$nb_ite ++;
	}
}

$nb_comp = 0;
$nb_ite = 0;

$timestart = microtime(true);
$tab = explode(";", $argv[1]);
echo "Série : ", implode(';', $tab ), "\n"; 
selection_sort($tab, $nb_comp, $nb_ite);
echo "Résultat : ", implode(';', $tab),"\n";
echo "Nb de comparaison : $nb_comp\n";
echo "Nb d'itération : $nb_ite\n";
$time = number_format(microtime(true) - $timestart, 2);
echo "Temps (sec) : ", $time,"\n";

?>