<?php


class ForcaGame
{
	private $lista = array(
		"sol",
		"lua",
		"estrada",
		"rodovia",
		"passeio",
		"lateral"
	);

	public function getListaPalavras()
	{
		return $this->lista;
	}

	public function sorteiaIndiceDaListaDePalavras()
	{
		return rand(0, count($this->lista));
	}
}	
