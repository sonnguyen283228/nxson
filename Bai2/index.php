<?php

$arrProducts = [
	[
		'id' => 1,
		'name' => 'samsung',
		'price' => '20.000.000'


	],
	[
		'id' => 2,
		'name' => 'xiaomi',
		'price' => '15.000.000'


	],
	[

		'id' => 3,
		'name' => 'iphone',
		'price' => '16.000.000'


	]
];




?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>HTML Table</h2>

<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Price</th>
  </tr>
  <?php foreach ($arrProducts as $item): ?>
    <tr>
      <td><?= $item['id'] ?></td>
      <td><?= $item['name'] ?></td>
      <td><?= $item['price'] ?></td>
  
    </tr>
  <?php endforeach; ?>
</table>

</body>
</html>

