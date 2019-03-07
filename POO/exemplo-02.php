<?php

class Carro{

	private $modelo;
	private $motor;
	private $ano;

	/////GETTERS AND SETTERS////////
	public function getModelo(){
		return $this->modelo;
	}

	public function setModelo($pModelo){
		$this->modelo = $pModelo;
	}

	public function getMotor():float{
		return $this->motor;
	}

	public function setMotor($pMotor){
		$this->motor = $pMotor;
	}

	public function getAno():int{
		return $this->ano;
	}
	public function setAno($pAno){
		$this->ano = $pAno;
	}
	////END GETTERS AND SETTERS/////


	public function exibir(){
		return array(
			"modelo"=>$this->getModelo(),
			"motor"=>$this->getMotor(),
			"ano"=>$this->getAno()
		);
	}

} //fechamento da Classe Carro.

$gol = new Carro();
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2017");

var_dump($gol->exibir());




?>