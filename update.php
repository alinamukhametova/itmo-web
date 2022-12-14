<!DOCTYPE html>
<html lang="en">
<?php require("./components/head.php") ?>

<body>
    <?php require("./components/header.php") ?>
    <h2>Редактировать товар</h2>
    <form id="form" method="POST" action="endpoints/update-card.php">
        <input type="text" name="id" id="id" value="" hidden style="display:none">
        <input type="text" name="name" id="name" value="">
        <input type="number" name="cost" id="cost" value="">
        <input type="text" name="picture_url" id="picture_url" value="">
        <img class="preview"  src="" alt="photo" />
        <button type="submit">Сохранить изменения</button>
    </form>


<script>
     document.getElementById("form").addEventListener("submit", onSubmit, false);

     function onSubmit(event){
        event.preventDefault();
        const {id,name,cost,picture_url} = event.target.elements;
        sendRequest(id.value,name.value,cost.value,picture_url.value);
     }

    function sendRequest(id,name,cost,picture_url) {
        var http = new XMLHttpRequest();
        var url = './endpoints/update-card.php';
        var params = `id=${id}&name=${name}&cost=${cost}&picture_url=${picture_url}`;

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

<script>
const params = (new URL(location)).searchParams;

    const req = new XMLHttpRequest();
    req.responseType = 'json';
    req.open('GET', "endpoints/get-card-by-id.php?id="+params.get("id"), true);
    req.onload = function() {
        const res = req.response;
        document.getElementById("id").setAttribute("value", res.id);
        document.getElementById("cost").setAttribute("value", res.cost);
        document.getElementById("name").setAttribute("value", res.name);
        document.getElementById("picture_url").setAttribute("value", res.picture_url);
    };
    req.send(null);
</script>
</body>

</html>