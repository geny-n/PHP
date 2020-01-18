<?php
function merge_sort(&$tab, &$nb_comp)

{
	if(count($tab) == 1) {
		return $tab;
	} else {
		$mid = count($tab) / 2;
		//echo "\n", "taille : ", $mid, "\n";
		$left = array_slice($tab,0, $mid);
		$right = array_slice($tab,$mid);
		//echo "Série gauche : ", implode( ';', $left ), "\n"; 
		//echo "Série droite : ", implode( ';', $right), "\n"; 
		
		$left = merge_sort($left, $nb_comp);
		$right = merge_sort($right, $nb_comp);

		return sort_tab($left, $right, $nb_comp);
	}
}

function sort_tab($left, $right, &$nb_comp) {
	$tab_sort = [];
	$i_left = 0;
	$i_right = 0;
	
	while ($i_left < count($left) && $i_right < count($right)) {
		if ($left[$i_left] < $right[$i_right]) {
			$tab_sort[] = $left[$i_left];
			$i_left++;
		} else {
			$tab_sort[] = $right[$i_right];
			$i_right++;
		}
		$nb_comp ++;
	}
	while ($i_left < count($left)) {
		$tab_sort[] = $left[$i_left];
		$i_left++;
	}
	while ($i_right < count($right)) {
		$tab_sort[] = $right[$i_right];
		$i_right++;
	}
	return $tab_sort;
}

$nb_comp = 0;

$timestart = microtime(true);
$tab = explode(";", $argv[1]);
echo "Série : ", implode(';', $tab), "\n";
$new_tab = merge_sort($tab, $nb_comp);
echo "Résultat : ", implode(';', $new_tab),"\n";
echo "Nb de comparaison : $nb_comp \n";
$time = number_format(microtime(true) - $timestart, 2);
echo "Temps (sec) : ", $time,"\n";
?>