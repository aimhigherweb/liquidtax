const toggleMenu = () => {
	const menu = document.querySelector('nav.main')
	if(menu.classList.contains('open')) {
		menu.classList.remove('open')
	}

	else {
		menu.classList.add('open')
	}
}

const toggleModal = () => {
	const modal = document.querySelector('#modal')
	if(modal.classList.contains('open')) {
		modal.classList.remove('open')
	}

	else {
		modal.classList.add('open')
	}
}