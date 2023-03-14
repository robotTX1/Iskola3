<style>
    thead {
        position: sticky;
        top: 0px;
    }

    .holder {
        height: 70vh;
        overflow-y: auto;
    }
</style>

<div class="d-flex flex-column align-items-center">
    <h1>Kiadók szerinti szűrés</h1>

    <select class="custom-select m-2" onchange="show(this)">
        <option value="0">Válasszon kiadót!</option>
    </select>
    <div class="holder m-2">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Cím</th>
                    <th>Kiadási év</th>
                    <th>Kockák száma</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</div>




<script src="getData.js"></script>
<script>
    const select = document.querySelector("select");
    const tbody = document.querySelector("tbody");

    function renderOptions(data) {
        select.innerHTML += data.map((value) => `
            <option value="${value.id}">${value.nev}</option>
        `).join("");
    }

    function show(obj) {
        const id = obj.value;
        if(id == "0") return;
        console.log(id);
        getData(`../server/getFilmek.php?id=${id}`, renderTbl);
    }

    function renderTbl(data) {
        tbody.innerHTML = data.map((value) => `
            <tr>
                <td>${value.cim}</td>
                <td>${value.kiadasiev}</td>
                <td>${value.kocka}</td>
            </tr>
        `).join("");
    }

    getData("../server/getAllKiado.php", renderOptions);
</script>