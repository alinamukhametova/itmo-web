<?php
include("./config/bd.php");
$con = $mysqli->prepare("SELECT * FROM card WHERE id = ?");
$con->bind_param("d", $_GET["id"]);
$con->execute();
$product = $con->get_result()->fetch_array();

?>

<!DOCTYPE html>
<html lang="en">
<?php require("./components/head.php") ?>

<body>
    <?php require("./components/header.php") ?>
    <h2>Обновить мерч</h2>
    <form class="form" method="POST" action="endpoints/update-card.php">
        <input type="text" name="id" value="<?php echo $_GET["id"] ?>" hidden style="display:none">
        <input type="text" name="name" value="<?php echo $product["name"] ?>">
        <input type="number" name="cost" value="<?php echo $product["cost"] ?>">
        <input type="text" name="picture_url" value="<?php echo $product["picture_url"] ?>">
        <img class="preview"  src="<?php echo $product["picture_url"] ?>" alt="photo" />
        <button type="submit">Обновить товар</button>
    </form>
</body>

</html>