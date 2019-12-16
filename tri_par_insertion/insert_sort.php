<?php
$Compteur = 0;
//$tab = array(1,-2,4,3.5,3);
$tab = explode(";", $argv[1]);
echo "serie : ", implode( '; ', $tab ), "\n"; //supprimer dernier; 

$result = count($tab); //compter le nombre de int
echo  "nombre : ", $result, "\n";

for ($i = 0; $i < ($result - 1); $i++) {
	$min = $i;
	for ($j = $i + 1; $j < $result; $j++) {
		if ($tab[$j] < $tab[$min]) {
			$min = $j;
		}
	} 
	if ($min !== $i) {
		$temp = $tab[$min];
		$tab[$min] = $tab[$i];
		$tab[$i] = $temp;
	}
}

echo "nouvelle serie : ", implode( '; ', $tab),"\n";
?>