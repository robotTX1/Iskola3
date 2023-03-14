<div class="container d-flex justify-content-center ">
    <table class="table table-striped w-50">
        <thead class="thead-dark">
            <tr>
                <th>Név</th>
                <th>Típus</th>
                <th>Max.személy</th>
                <th>Ár/személy</th>
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
                <td>${item.tipus}</td>
                <td>${item.utas}</td>
                <td>${item.dij}</td>
            </tr>
        `).join("");
    }

    getData("../server/napidij.php", render);
</script>