const sendFile = async (url, config, func) => {
	const response = await fetch(url, config);
	const data = await response.json();
	func(data);
};

const fetchData = async (url, func) => {
	const response = await fetch(url);
	const data = await response.blob();
	func(data);
}