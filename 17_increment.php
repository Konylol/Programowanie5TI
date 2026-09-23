<?php
echo "<h3>Postincrement</h3>";
$a = 5;
echo "Should be 5: " . $a++ . "<br>";
echo "Should be 6: " . $a . "<br>";

echo "<h3>Preincrement</h3>";
$a = 5;
echo "Should be 6: " . ++$a . "<br>";
echo "Should be 6: " . $a . "<br>";
?>
