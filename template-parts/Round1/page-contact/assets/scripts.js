document.addEventListener('DOMContentLoaded',() => {
	const formContact = document.querySelector('#wpcf7-f30139-o1 form')
	const notificationFormContact = document.querySelector('#wpcf7-f30139-o1 form .wpcf7-response-output')
	console.log(formContact,notificationFormContact)
	if(!formContact || !notificationFormContact) return
	formContact.addEventListener('wpcf7mailsent',() => {
		notificationFormContact.classList.add('active');
	})
	
	formContact.addEventListener('wpcf7invalid',() => {
		notificationFormContact.classList.remove('active');
	})
})