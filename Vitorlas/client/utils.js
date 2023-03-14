async function getData(url, func) {
    const response = await fetch(url);
    const data = await response.json();
    func(data);
}