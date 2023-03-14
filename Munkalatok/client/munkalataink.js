const select = document.querySelector("select");
const tbody = document.querySelector("tbody");

function render(data) {
    tbody.innerHTML = data.map(item => `
        <tr>
            <td>${item.munkas}</td>
            <td>${item.alkalom}</td>
            <td>${item.munkaora}</td>
        </tr>
    `).join("");
}

function renderSelect(data) {
    select.innerHTML += data.map(item => `
        <option>${item.telepules}</option>
    `).join("");
}

function onSelect() {
    if(select.value == "0") tbody.innerHTML = "";
    else getData(`../server/getStatisticsByCity.php?city=${select.value}`, render);
}

getData(`../server/getCities.php`, renderSelect);