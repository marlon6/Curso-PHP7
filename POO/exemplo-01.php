<?php

class Pessoa {

	public $nome; //atributo

	public function falar(){// Método

		return "O meu nome é ".$this->nome;

	}

}

$pedro = new Pessoa();

$pedro->nome = "Pedro Souza";

echo $pedro->falar();



?>