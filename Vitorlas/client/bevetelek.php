<div class="container d-flex justify-content-center flex-column align-items-center">
    <h2>Havi bevéltel hajónként összegezve</h2>
    <table class="table table-striped w-50">
        <thead class="thead-dark">
            <tr>
                <th>Név</th>
                <th>Össz nap</th>
                <th>Bevétel</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

<script>
    function render(data) {
        document.querySelector("tbody").innerHTML = data.data.map(item => `
            <tr>
                <td>${item.nev}</td>
                <td>${item.nap}</td>
                <td>${item.bevetel}</td>
            </tr>
        `).join("");
    }

    getData("../server/bevetelek.php", render);
</script>