const getData = async (url, func) => {
    const response = await fetch(url);
    const data = await response.json();
    func(data);
}