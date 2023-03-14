const tbody = document.querySelector("tbody");

function render(data) {
    tbody.innerHTML = data.map(item => `
        <tr>
            <td>${item.nev}</td>
            <td class='text-center'>${item.ev}</td>
        </tr>
    `).join("");
}

getData(`../server/getWorkers.php`, render);