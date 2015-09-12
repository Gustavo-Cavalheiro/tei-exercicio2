<?php

class Entrada{

	private $nome;
	private $id;
	private $tipo;
	private $classCss;
	private $qtdeCampos;
	
	function obtemQtdeCampos(){
		return $this->qtdeCampos;
	}
	
	function toHtml(){
		return "<input id='$this->id' 
		type='$this->tipo' name='$this->nome' />";
	}
	
	function __toString(){
		return $this->toHtml();
	}
	
	function __construct(){
		$this->qtdeCampos++;
	}
}