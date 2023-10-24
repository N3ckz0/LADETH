function VerificaContra() {
	const inputPassword  = document.getElementById('psswd');
	const inputVerifica  = document.getElementById('vrfPsswd');
	const inputNewPsswd  = document.getElementById('newPsswd');
	const alert = document.getElementById('msg');

	let valuePsswd = inputPassword.value;
	let valueVrf = inputVerifica.value;

	if(valuePsswd == valueVrf){
		inputNewPsswd.disabled = false;
	}else{
		inputNewPsswd.disabled = true;
		alert.style.display = 'block';
	}

}