<xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<title>index</title>

	</head>

	<body>
	<table>
		<tr>
			<th>Name</th>
			<th>Price</th>
		</tr>
	<?php foreach ($products as $product) : ?>
		<tr>
			<td><?php echo $product['productName']; ?></td>	
			<td><?php echo $product['listPrice'] ?></td>
		</tr>
	<?php endforeach; ?>
	</table>
	</body>
</html>
