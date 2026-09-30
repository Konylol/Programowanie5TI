<?php
$owoce = ["kiwi", "mango", "ananas", "banan"];

echo "<h3>Petla for</h3><ul>";
for ($i = 0; $i < count($owoce); $i++) {
	echo "<li>" . $owoce[$i] . "</li>";
}
echo "</ul>";

echo "<h3>Petla while</h3><ul>";
$i = 0;
while ($i < count($owoce)) {
	echo "<li>" . $owoce[$i] . "</li>";
	$i++;
}
echo "</ul>";
?>




 