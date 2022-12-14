<!DOCTYPE html>
<html lang="en">
	<?php require("./components/head.php") ?>
<body>
	<?php require("./components/header.php") ?>
    <h2>Удалить товар по id</h2>
    <form class="form" method="POST" action="endpoints/delete-card.php">
        <input type="text" name="id" value="<?php echo $_GET["id"] ?>">
        <button type="submit">Удалить товар</button>   
    </form>
    <a href="index.php?id=<?php echo $_GET["id"] ?>">Назад</a>
</body>
</html>