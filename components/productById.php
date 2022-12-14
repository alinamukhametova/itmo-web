<div class="single-card-wrapper" id="card">
<div id="card-container"></div>
<div class="controls">
    <div class="card-control">
        <a href="#" id="update-btn">Обновить</a>
        <a href="#" id="delete-btn">Удалить</a>
    </div>
</div>
</div>
<script>
    const renderCard = ({
        id,
        picture_url,
        name,
        cost,
    }) => `<a class="product" href="index.php?id=${id}">
<img src="${picture_url}" />
<h3>${name}</h3>
<span>${cost} RUB</span>
<div class="product-colors">
    <div class="product-color"></div>
    <div class="product-color"></div>
    <div class="product-color"></div>
</div>
</a>`;

const params = (new URL(location)).searchParams;

    const req = new XMLHttpRequest();
    req.responseType = 'json';
    req.open('GET', "endpoints/get-card-by-id.php?id="+params.get("id"), true);
    req.onload = function() {
        const jsonResponse = req.response;
        const root = document.getElementById("card-container");
            root.insertAdjacentHTML("beforeend", renderCard(jsonResponse));

            document.getElementById("update-btn").setAttribute("href", "update.php?id=" + params.get("id"))
            document.getElementById("delete-btn").setAttribute("href", "delete.php?id=" + params.get("id"))
    };
    req.send(null);
</script>