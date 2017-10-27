<?php
	class Soma implements Expressao{
		private $esquerdo;
		private $direito;

		function __construct(Expressao $ladoEsquerdo,Expressao $ladoDireito) {
			$this->esquerdo = $ladoEsquerdo;
			$this->direito = $ladoDireito;
		}

		public function avalia() {
			$valorEsquerda = $this->esquerdo->avalia();
			$valorDireita = $this->direito->avalia();

			return $valorEsquerda + $valorDireita;
		}
	}