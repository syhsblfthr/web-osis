{
	const button = document.getElementById("moreButton");

	const stateStrings = [
		"Lihat lebih sedikit",
		"Lihat selengkapnya"
	];

	let mode = true;

	button.addEventListener("click", () => {
		mode = mode ^ true;
		button.innerText = stateStrings[mode];
	});
}
