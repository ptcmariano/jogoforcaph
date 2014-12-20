<?php

require 'ForcaGame.php';

class ForcaGameTestCase extends PHPUnit_Framework_TestCase
{
	public function testGetPrimeiroDaListaDePalavras()
	{
		$esperado = "/\D{3,}/";
		$forcaGame = new ForcaGame();
		$obitido = $forcaGame->getListaPalavras();
		$this->assertEquals(
			1,
			preg_match($esperado, $obitido[0]),
			"esperava ser uma palavra com mais de tres letras, mas retornou: $obitido[0]"
		);
	}
}