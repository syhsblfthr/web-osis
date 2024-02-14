{
	const navbar_buttons 		 = document.getElementsByClassName("nav-link");
	let active_navbar_button = navbar_buttons[0];

	const onClick = (evt) =>  {
		const navbar_button = evt.target;

		active_navbar_button.classList.remove("active");

		active_navbar_button = navbar_button;
		active_navbar_button.classList.add("active");
	};

	const navbar_buttons_length = navbar_buttons.length;
	for (let idx = 0; idx < navbar_buttons_length; ++idx) {
		navbar_buttons[idx].addEventListener("click", onClick);
	}
}
