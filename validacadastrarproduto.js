function validaFormCadastrarProduto(fmr){

	var nome = document.getElementById('nomeProd').value;
	var quantidade = fmr.qtdProd.value;
	var preco = fmr.precoProd.value;

	if (nome == '' || nome == null) {
		alert('Preencha o campo "Nome da Mercadoria"');
		fmr.nomeProd.focus();
		return false;
	} else {
		if (quantidade <= 0 || quantidade == null) {
			alert('Quantidade não pode ser menor ou igual a zero');
			fmr.qtdProd.focus();
			return false;
		} else {
			if (preco <= 0.0 || preco == null) {
				alert('Preencha o campo preco');
				fmr.precoProd.focus();
				return false;
			}
		}
	}

	 

	
}