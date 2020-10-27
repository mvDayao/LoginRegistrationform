

const lname = document.getElementById('lname');
const fname = document.getElementById('fname');
const stud = document.getElementById('stud');
const level = document.getElementById('level');
const bdate = document.getElementById('bdate');
const mob = document.getElementById('mob');
const email = document.getElementById('email');
const user = document.getElementById('user');
const psw = document.getElementById('psw');
const pswrepeat = document.getElementById('pswrepeat');

form.addEventListener('submit', e => {
	e.preventDefault();
	
	myFunction();
});

function myFunction() {
	// trim to remove the whitespaces
	const lnameValue   = lname.value.trim();
    const fnameValue  = fname.value.trim();
    const studValue = stud.value.trim();
    const levelValue = level.value.trim();
    const bdateValue = bdate.value.trim();
    const mobValue = mob.value.trim();
	const emailValue = email.value.trim();
    const userValue = user.value.trim();
	const pswValue = psw.value.trim();
	const pswrepeatValue = pswrepeat.value.trim();
	
	if(lnameValue === '') {
        alert('hehe');
		setErrorFor(lname, 'This field cannot be blank');
	} else {
		setSuccessFor(lname);
	}
    if(fnameValue === '') {
		setErrorFor(fname, 'This field cannot be blank');
	} else {
		setSuccessFor(fname);
	}
    if(studValue === '') {
		setErrorFor(stud, 'This field cannot be blank');
	} else {
		setSuccessFor(stud);
	}
	if(levelValue === '') {
		setErrorFor(level, 'This Field cannot be blank');
	} else {
		setSuccessFor(level);
	}
    if(mobValue === '') {
		setErrorFor(mob, 'This Field cannot be blank');
	} else {
		setSuccessFor(mob);
	}
	if(emailValue === '') {
		setErrorFor(email, 'Email cannot be blank');
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Not a valid email');
	} else {
		setSuccessFor(email);
	}
	if(userValue === '') {
		setErrorFor(user, 'This Field cannot be blank');
	} else {
		setSuccessFor(user);
	}
	if(pswValue === '') {
		setErrorFor(psw, 'Password cannot be blank');
	} else {
		setSuccessFor(psw);
	}
	
	if(pswrepeatValue === '') {
		setErrorFor(pswrepeat, 'Password2 cannot be blank');
	} else if(pswValue !== pswrepeatValue) {
		setErrorFor(pswrepeat, 'Passwords does not match');
	} else{
		setSuccessFor(pswrepeat);
	}
}

function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
}
	
function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}


