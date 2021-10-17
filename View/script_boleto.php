<?php
	$conteudo = file_get_contents('template-boleto-replace.html');
	if($conteudo == false)
	{
		echo 'Erro ao ler template';
		return 'Erro ao ler template';
	}
	preg_replace('XNOSSO_NUMEROX', '341-7', $conteudo);
	preg_replace('XCODIGO_DO_BOLETOX', '34191.12345 67890.101112 13141.516171 8 12345678901112', $conteudo);
	preg_replace('XDATA_DE_VENCIMENTOX', '01/01/2016', $conteudo);
	preg_replace('XNOME_DO_BENEFICIARIOX', 'Jonh Doe Son', $conteudo);
	preg_replace('XCPF_CNPJ_DO_BENEFICIARIOX', 'CNPJ 01.000.000/0001-00', $conteudo);
	preg_replace('XENDERECO_COMPLETO_DO_BENEFICIARIOX', 'Rua Simulação, 1 - Jardim Simulação - São Paulo - SP - 10000-000', $conteudo);
	preg_replace('X_AGENCIA_CODIGO_DO_BENEFICIARIOX', '1234/12345-1', $conteudo);
	preg_replace('XDATA_DO_DOCUMENTOX', '01/07/2015', $conteudo);
	preg_replace('XNUMERO_DO_DOCUMENTOX', '1', $conteudo);
	preg_replace('XDATA_DO_PROCESSAMENTOX', '01/07/2015', $conteudo);
	preg_replace('XCARTEIRA_NOSSO_NUMEROX', '157/12345678-9', $conteudo);
	preg_replace('XCARTEIRAX', '157', $conteudo);
	preg_replace('XVALOR_DOCUMENTOX', 'R$900,00', $conteudo);
	preg_replace('XNOME_DO_PAGADORX', 'Jhon Doe Son', $conteudo);
	preg_replace('XCPF_CNPJ_PAGADORX', '123.121.001-00', $conteudo);
	preg_replace('XENDERECO_COMPLETO_PAGADORX', 'Avenida Brasil 1234 - Jardim Brasil - São Paulo - SP - 9999999-999', $conteudo);
	preg_replace('XVALORX', 'R$900,00', $conteudo);
	preg_replace('XCODIGO_DE_BARRASX', 'src=\"data:image/png;base64,...=\"', $conteudo); 
	preg_replace('XNOME_DO_ARQUIVOX', 'download=\"BOLETO_123456789\"', $conteudo);
	echo $conteudo;
	$infomaracao_codificada = 'data:image/png;base64,';
	$infomaracao_codificada .= base64_encode($conteudo);
	return $infomaracao_codificada;
	
?>