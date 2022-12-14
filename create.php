<!DOCTYPE html>
<html lang="en">
<?php require("./components/head.php") ?>

<body>
    <?php require("./components/header.php") ?>
    <h2>Создать мерч</h2>
    <form class="form" method="POST" action="endpoints/create-card.php" id="form">
        <input type="text" name="name">
        <input type="number" name="cost">
        <input type="text" name="picture_url">
        <button type="submit">Создать товар</button>
    </form>
</body>

</html>

<script>
     document.getElementById("form").addEventListener("submit", onSubmit, false);

     function onSubmit(event){
        event.preventDefault();
        const {name,cost,picture_url} = event.target.elements;
        sendRequest(name.value,cost.value,picture_url.value);
     }

    function sendRequest(name,cost,picture_url) {
        var http = new XMLHttpRequest();
        var url = './endpoints/create-card.php';
        var params = `name=${name}&cost=${cost}&picture_url=${picture_url}`;

        http.open('POST', url, true);

        http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

        http.onreadystatechange = function() { //Call a function when the state changes.
            if (http.readyState == 4 && http.status == 200) {
              const res = JSON.parse(http.responseText);
              if (res.error) {
                        alert(res.error)
                        return;
                    };

              const id = res;
              window.location.replace("./index.php?id="+id)
            }
        }
        http.send(params);
    }
</script>