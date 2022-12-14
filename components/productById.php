<div class="single-card-wrapper">
    <?php
    ini_set('display_errors', '1');
    include("./config/bd.php");
    $id = $_GET["id"];

    $con = $mysqli->prepare("SELECT * FROM card WHERE id = ?");
    $con->bind_param("d", $id);
    $con->execute();
    $product = $con->get_result()->fetch_array();

    if (empty($product)) {
        die("Такого товара нет");
    }

    $id = $product["id"];
    $cost = $product["cost"];
    $name = $product["name"];
    $url = $product["picture_url"];

    include("./components/product.php");
    ?>
    <div class="card-control">
        <a href="update.php?id=<?php echo $id ?>">Обновить</a>
        <a href="delete.php?id=<?php echo $id ?>">Удалить</a>
    </div>
</div>