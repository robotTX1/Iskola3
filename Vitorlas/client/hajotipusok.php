<div class="container d-flex justify-content-center flex-row">
    <select class="form-control w-25 mr-5" name="tipus" id="tipus" onchange="selectChanged(this)">
        <option value="0" selected>Válassz típust!</option>
    </select>
    <table class="table table-striped w-50">
        <thead class="thead-dark">
            <tr>
                <th>Név</th>
                <th>Max.személy</th>
                <th>Napidíj</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

<script>
    function renderTable(data) {
        document.querySelector("tbody").innerHTML = data.data.map(item => `
            <tr>
                <td>${item.nev}</td>
                <td>${item.utas}</td>
                <td>${item.dij}</td>
            </tr>
        `).join("");
    }

    function selectChanged(obj) {
        const value = obj.value;
        if(value !== "0") {
            getData(`../server/hajok.php?tipus=${value}`, renderTable);
        } else {
            document.querySelector("tbody").innerHTML = "";
        }
    }

    function render(data) {
        document.querySelector("#tipus").innerHTML += data.data.map(item => `
            <option value='${item.tipus}'>${item.tipus}</option>
        `).join("");
    }

    getData("../server/hajotipusok.php", render);
</script>