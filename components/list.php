<div class="product-list" id="list">

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


    const req = new XMLHttpRequest();
    req.responseType = 'json';
    req.open('GET', "endpoints/get-cards.php", true);
    req.onload = function() {
        const jsonResponse = req.response;
        const root = document.getElementById("list");
        jsonResponse.forEach(element => {
            root.insertAdjacentHTML("beforeend", renderCard(element));
        });
    };
    req.send(null);
</script>