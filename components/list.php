<div class="product-list">
	<?php
	require("./config/bd.php");

	$result = $mysqli->query("SELECT * FROM card");

	foreach ($result as $id => $row) {
	    $name = $row["name"];
	    $cost = $row["cost"];
	    $url = $row["picture_url"];
	    include("./components/product.php");
	}
	$mysqli->close();
	?>
</div>