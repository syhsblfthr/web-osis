{
	const modal					= document.getElementById("modal");
	const actual_modal  = modal.firstElementChild;

	const loadModalData = (entry) => {
		const modalDescription = modal.querySelector(".modal-description");
		const modalTitle = modal.querySelector(".modal-title");

		console.log(entry);

		modalTitle.innerText				= entry.dataset.title;
		modalDescription.innerText	= entry.dataset.description;
	};

	actual_modal.addEventListener("click", (evt) => {
		evt.stopPropagation();
	});

	modal.addEventListener("click", (evt) => {
		modal.classList.remove("show");
	});

	const triggers = document.getElementsByClassName("modal-trigger");

	const triggerOnClick = (evt) => {
		loadModalData(evt.currentTarget);
		
		modal.classList.add("show");
	};

	const triggers_length = triggers.length;
	for (let idx = 0; idx < triggers_length; ++idx)
		triggers[idx].addEventListener("click", triggerOnClick);
}
