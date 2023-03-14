<style>
    thead {
        position: sticky;
        top: 0px;
    }

    h1 {
        width: 100%;
        text-align: center;
    }

    .holder {
        height: 70vh;
        overflow-y: auto;
    }
</style>

<h1>Évenkénti statisztika</h1>

<div class="holder m-2">
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th></th>
                <th>Kiadási év</th>
                <th>Darabszám</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>

<script src="getData.js"></script>
<script>
    const tbody = document.querySelector("tbody");
    let id = 0;

    function render(data) {
        tbody.innerHTML = data.map((value) => {
            id++;
            return `
                <tr>
                    <td>${id}</td>
                    <td>${value.kiadasiev}</td>
                    <td>${value.db}</td>
                </tr>
            `;
        }).join("");
    }

    getData("../server/getGrouped.php", render);
</script>