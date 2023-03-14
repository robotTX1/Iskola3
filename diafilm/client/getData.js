async function getData(url, func) {
    const response = await fetch(url);
    const data = await response.json();
    func(data);
}

async function postData(url, configObj, func) {
    const response = await fetch(url, configObj);
    const data = await response.json();
    func(data);
}
