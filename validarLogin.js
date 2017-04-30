function validarLogin(fmr){
	var login = document.getElementById('txtLogin').value;
	var senha = document.getElementById('txtSenha').value;
	if (login == "" || senha == "" || login == null || senha == null) {
		alert("Digite um usuário e senha");
		fmr.txtLogin.focus();
		return false;
  	}
 }