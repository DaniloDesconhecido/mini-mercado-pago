<?php
	$conteudo = file_get_contents('template-boleto-replace.html');
	if($conteudo == false)
	{
		return 'Erro ao ler template';
	}
	$expressoes = array();
	$subistitutos = array();
	$expressoes[0] = '/XNOSSO_NUMEROX/';
	$subistitutos[0] = '341-7';
	$expressoes[1] = '/XCODIGO_DO_BOLETOX/';
	$subistitutos[1] = '34191.12345 67890.101112 13141.516171 8 12345678901112';
	$expressoes[2] = '/XDATA_DE_VENCIMENTOX/';
	$subistitutos[2] = '01/01/2016';
	$expressoes[3] = '/XNOME_DO_BENEFICIARIOX/';
	$subistitutos[3] = 'Jonh Doe Son';
	$expressoes[4] = '/XCPF_CNPJ_DO_BENEFICIARIOX/';
	$subistitutos[4] = 'CNPJ 01.000.000/0001-00';
	$expressoes[5] = '/XENDERECO_COMPLETO_DO_BENEFICIARIOX/';
	$subistitutos[5] = 'Rua Simulação, 1 - Jardim Simulação - São Paulo - SP - 10000-000';
	$expressoes[6] = '/X_AGENCIA_CODIGO_DO_BENEFICIARIOX/';
	$subistitutos[6] = '1234/12345-1';
	$expressoes[7] = '/XDATA_DO_DOCUMENTOX/';
	$subistitutos[7] = '01/07/2015';
	$expressoes[8] = '/XNUMERO_DO_DOCUMENTOX/';
	$subistitutos[8] = '1';
	$expressoes[9] = '/XDATA_DO_PROCESSAMENTOX/';
	$subistitutos[9] = '01/07/2015';
	$expressoes[10] = '/XCARTEIRA_NOSSO_NUMEROX/';
	$subistitutos[10] = '157/12345678-9';
	$expressoes[11] = '/XCARTEIRAX/';
	$subistitutos[11] = '157';
	$expressoes[12] = '/XVALOR_DOCUMENTOX/';
	$subistitutos[12] = 'R$900,00';
	$expressoes[13] = '/XNOME_DO_PAGADORX/';
	$subistitutos[13] = 'Jhon Doe Son';
	$expressoes[14] = '/XCPF_CNPJ_PAGADORX/';
	$subistitutos[14] = '123.121.001-00';
	$expressoes[15] = '/XENDERECO_COMPLETO_PAGADORX/';
	$subistitutos[15] = 'Avenida Brasil 1234 - Jardim Brasil - São Paulo - SP - 9999999-999';
	$expressoes[16] = '/XVALORX/';
	$subistitutos[16] = 'R$900,00';
	$expressoes[17] = '/XCODIGO_DE_BARRASX/';
	$subistitutos[17] = 'src=\"data:image/png;base64,...=\"';
	$expressoes[18] = '/XNOME_DO_ARQUIVOX/';
	$subistitutos[18] = 'download=\"BOLETO_123456789\"';
	$infomacao_substituida = preg_replace($expressoes, $subistitutos, $conteudo);
	echo $infomacao_substituida;
	$infomaracao_codificada = 'data:image/png;base64,';
	$infomaracao_codificada .= base64_encode($infomacao_substituida);
	return $infomaracao_codificada;
	
?>