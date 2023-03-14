const tbody = document.querySelector("tbody");
const themeSelector = document.getElementById("theme");
const authorSelector = document.getElementById("author");

const getData = async (url, func) => {
    const response = await fetch(url);
    const data = await response.json();
    func(data);
}

function renderTable(data) {
    const d = data.map((value) => `
        <tr>
            <td>${value.id}</td>
            <td>${value.szerzo}</td>
            <td>${value.cim}</td>
            <td>${value.ev}</td>
            <td>${value.kiadokod}</td>
            <td>${value.oldal}</td>
            <td>${value.tema}</td>
        </tr>
    `).join("");

    tbody.innerHTML = d;
}

function renderThemeSelect(data) {
    const d = data.map((value) => `
        <option>${value.tema}</option>
    `).join("");
    themeSelector.innerHTML += d;
}

function renderAuthorSelect(data) {
    const d = data.map((value) => `
        <option>${value.szerzo}</option>
    `);
    authorSelector.innerHTML += d;
}

function filterByTheme(obj) {
    if(obj.value == "0") {
        getData('http://localhost//Cs%C3%ADkos%20Csaba/books/server/read.php', renderTable);
    } else {
        getData(`http://localhost//Cs%C3%ADkos%20Csaba/books/server/filterTheme.php?theme=${obj.value}`, renderTable);
    }
}

function filterByAuthor(obj) {
    if(obj.value == "0") {
        getData('http://localhost//Cs%C3%ADkos%20Csaba/books/server/read.php', renderTable);
    } else {
        getData(`http://localhost//Cs%C3%ADkos%20Csaba/books/server/filterAuthor.php?author=${obj.value}`, renderTable);
    }
}

getData('http://localhost//Cs%C3%ADkos%20Csaba/books/server/read.php', renderTable);
getData('http://localhost//Cs%C3%ADkos%20Csaba/books/server/readTheme.php', renderThemeSelect);
getData('http://localhost//Cs%C3%ADkos%20Csaba/books/server/readAuthor.php', renderAuthorSelect);