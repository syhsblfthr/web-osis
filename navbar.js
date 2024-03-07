{
	const navbarButtons 		 = document.getElementsByClassName("nav-link");
	let activeNavbarButton = navbarButtons[0];

	const onClick = (evt) =>  {
		const navbarButton = evt.target;

		activeNavbarButton.classList.remove("active");

		activeNavbarButton = navbar_button;
		activeNavbarButton.classList.add("active");
	};

	const navbarButtonsLength = navbarButtons.length;
	for (let idx = 0; idx < navbarButtonsLength; ++idx) {
		navbarButtons[idx].addEventListener("click", onClick);
	}

	function enableNav(idx) {
		activeNavbarButton.classList.remove("active");
		(activeNavbarButton = navbarButtons[idx]).classList.add("active");
	}
}
