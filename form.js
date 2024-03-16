{
	const formContainer					 = document.getElementById("formContainer");
	const formContainerClassList = formContainer.classList;
	const loadingText						 = formContainer.firstElementChild;
	const loadingTextClassList	 = loadingText.classList;
	const form									 = document.getElementById("form");
	const width									 = document.body.clientWidth;
	const height								 = document.body.clientHeight;

	formContainer.addEventListener("click", () => {
		hideContainer();
	});

	form.width  = width * 0.75;
	form.height = height * 0.8;

	function showContainer(formLink) {
		form.src = formLink;

		formContainerClassList.add("show");
	}

	function hideContainer() {
		formContainerClassList.remove("show");
		showText();
	}

	function hideText() {
		loadingTextClassList.remove("show");
	}

	function showText() {
		loadingTextClassList.add("show");
	}

	form.addEventListener("load", () => {
		if (form.src === "about:blank")
			return;
		hideText();
	});
}
