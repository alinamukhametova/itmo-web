<!DOCTYPE html>
<html lang="en">
	<?php require("./components/head.php") ?>
<body>
	<?php require("./components/header.php") ?>
    <h2>Создать мерч</h2>
    <form class="form" method="POST" action="endpoints/create-card.php">
        <input type="text" name="name">
        <input type="number" name="cost">
        <input type="text" name="picture_url">
        <button type="submit">Создать товар</button>   
    </form>
</body>
</html>