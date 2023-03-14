const tbody = document.querySelector("tbody");

function render(data) {
    tbody.innerHTML = data.map(item => `
        <tr>
            <td>${item.telepules}</td>
            <td>${item.munkas}</td>
            <td>${item.anyagar}</td>
            <td>${item.munkaora}</td>
        </tr>
    `).join("");
}

getData(`../server/getStatistics.php`, render);