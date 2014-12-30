( function() {

	var elements = document.getElementsByClassName('nav-menu')

	console.log(elements.length)


	if(!elements) {
		return;
	}

	elements = elements[0]

	if(!elements) {
		return;
	}

	elements = elements.getElementsByTagName('a')

	if(!elements) {
		return;
	}

	var prefix = 'background-'
	var backgroundsCount = 4;
	for (var i = 0; i < elements.length; i++) {
		elements[i].classList.add(prefix.concat((i % backgroundsCount) + 1))
	};
})();
