// Variables
const form = document.getElementById('form');
const email = document.getElementById('email');
const password = document.getElementById('password');

// Button event listener
form.addEventListener('submit', e => {
	if(checkinputs_login() !== true) {
		e.preventDefault();
		checkinputs_login();
	}
});

// Login form validation
function checkinputs_login() {
	const emailValue = email.value.trim();
	const passwordValue = password.value.trim();

	// Error array
	let fehler_login = [];

	if(emailValue === '') {
		setErrorFor(email, 'Name eingeben');
		fehler_login.push("UserError");
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Falsches Email Format');
		fehler_login.push("UserError2");
	} else {
		setSuccessFor(email);
	}

	if(passwordValue === '') {
		setErrorFor(password, 'Passwort eingeben');
		fehler_login.push("passwordError");
	} else {
		setSuccessFor(password);
	}
	
	if(fehler_login.length === 0) {
		return true;
	}
}
