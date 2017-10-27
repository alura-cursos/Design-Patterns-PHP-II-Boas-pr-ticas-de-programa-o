<?php
	function carregaClasse($classe) {
		require $classe.".php";
	}

	spl_autoload_register("carregaClasse");

	$esquerdo = new Soma(new Numero(1),new Numero(3));
	$direito = new Subtracao(new Numero(2),new Numero(2));

	$soma = new Soma($esquerdo,$direito);

	$impressora = new Impressora();

	$soma->aceita($impressora);

	echo "=";

	echo $soma->avalia();