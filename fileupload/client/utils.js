const sendFile = async (url, config, func) => {
	const response = await fetch(url, config);
	const data = await response.json();
	func(data);
};
