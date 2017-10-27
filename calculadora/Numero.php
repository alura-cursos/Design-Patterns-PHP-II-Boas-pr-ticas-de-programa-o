<?php
	class Numero implements Expressao {
		private $numero;

		function __construct($inteiro) {
			$this->numero = $inteiro;
		}

		public function avalia() {
			return $this->numero;
		}
	}