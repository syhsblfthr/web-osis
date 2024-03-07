{
	const intersectionRatioThreshold = 0.5;

	const intersectionObserver = new IntersectionObserver(
		// Callback
		(entries, observer) => {
			for (const entry of entries) {
				if (entry.intersectionRatio >= intersectionRatioThreshold) {
					const element = entry.target;
					const navIdx = element.dataset.navindex;
					console.log(navIdx);

					enableNav(navIdx);
					break;
				}
			}
		},

		// Options
		{
			threshold: intersectionRatioThreshold
		}
	);

	const observationItems = document.getElementsByClassName("intersection-observe");
	for (const observationItem of observationItems) {
		intersectionObserver.observe(observationItem);
	}
}
