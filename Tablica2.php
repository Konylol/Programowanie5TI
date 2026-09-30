<?php
$owoce = [
	"Kiwi" => 3.50,
	"Mango" => 5.99,
	"Banan" => 2.49,
	"Ananas" => 7.99
];
?>
<table border="1">
	<tr>
		<th>Owoc</th>
		<th>Cena (PLN)</th>
	</tr>
	<?php foreach ($owoce as $owoc => $cena): ?>
		<tr>
			<td><?= htmlspecialchars($owoc) ?></td>
			<td><?= number_format($cena, 2, ",", " ") ?></td>
		</tr>
	<?php endforeach; ?>
</table>
