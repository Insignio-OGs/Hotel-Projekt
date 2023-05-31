function setErrorFor(input, message) {
	const tbox = input.parentElement;
	const p = tbox.querySelector('p');
	tbox.className = 'tbox error';
	p.innerText = message;
}

function setSuccessFor(input) {
	const tbox = input.parentElement;
	tbox.className = 'tbox success';
}
	
function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}
