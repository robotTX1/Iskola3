async function dataUser(url, config, func) {
    const response = await fetch(url, config);
    const data = await response.json();
    func(data);
}

async function verifyUser(url, func) {
    const response = await fetch(url);
    const data = await response.json();
    func(data);
}

async function logoutUser(url, func) {
    const response = await fetch(url);
    const data = await response.json();
    func(data);
}