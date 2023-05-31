// Variables
const form = document.getElementById('form');
const username = document.getElementById('name');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password_two = document.getElementById('password_two');

// Button event listener
form.addEventListener('submit', e => {
	if(checkInputs() !== true) {
		e.preventDefault();
		checkInputs();
	}
});    

// Registration form validation
function checkInputs() {
	const usernameValue = username.value.trim();
	const emailValue = email.value.trim();
	const passwordValue = password.value.trim();
	const password_twoValue = password_two.value.trim();

	// Error array
	let fehler = [];

	if(usernameValue === '') {
		setErrorFor(username, 'Name eingeben');
		fehler.push("UserError");
	} else {
		setSuccessFor(username);
	}

	if(emailValue === '') {
		setErrorFor(email, 'Email eingeben');
		fehler.push("EmailError");
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Falsches Email Format');
		fehler.push("EmailError2");
	} else {
		setSuccessFor(email);
	}
	
	if(passwordValue === '') {
		setErrorFor(password, 'Passwort eingeben');
		fehler.push("passwordError");
	} else {
		setSuccessFor(password);
	}
	
	if(password_twoValue === '') {
		setErrorFor(password_two, 'Passwort eingeben');
		fehler.push("password_twoError");
	} else if(passwordValue !== password_twoValue) {
		setErrorFor(password_two, 'Passwörter stimmen nicht überein');
		fehler.push("password_twoError");
	} else{
		setSuccessFor(password_two);
	}
	
	if(fehler.length === 0) {
		return true;
	}
}
