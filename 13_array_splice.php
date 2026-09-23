<?php
$a1 = array(0, 1, 2, 3);
$a2 = array(4, 5);
array_splice($a1, 1, 2, $a2);
print_r($a1);
?>
