<!DOCTYPE html>
<html lang="en">
	<?php require("./components/head.php") ?>
<body>
	<?php require("./components/header.php") ?>
    <h2>Удалить товар по id</h2>
    <form id="form" method="POST" action="endpoints/delete-card.php">
        <input type="text" name="id" value="<?php echo $_GET["id"] ?>">
        <button type="submit">Удалить товар</button>   
    </form>
    <a href="index.php?id=<?php echo $_GET["id"] ?>">Назад</a>


<script>
     document.getElementById("form").addEventListener("submit", onSubmit, false);

     function onSubmit(event){
        event.preventDefault();
        const {id} = event.target.elements;
        sendRequest(id.value);
     }

    function sendRequest(id) {
        var http = new XMLHttpRequest();
        var url = './endpoints/delete-card.php';
        var params = `id=${id}`;

        http.open('POST', url, true);

        http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

        http.onreadystatechange = function() { //Call a function when the state changes.
            if (http.readyState == 4 && http.status == 200) {
              const res = JSON.parse(http.responseText);
              res.error && alert(res.error);

              const id = res;
              window.location.replace("./list.php")
            }
        }
        http.send(params);
    }
</script>
</body>
</html>

