<?php
namespace html;

class Formulario{
	private $nome;
	private $destino;
	private $metodo;
	private $camposEntrada;
	
	function adicionarCampo($entrada){
		$this->camposEntrada = $entrada;
	}
	
	function toHtml(){
		return "<form action='$this->destino'>
		Nome do Paciente:<br>
		<input type='text' name='nome' value='$this->nome'>
		<br>
		Nascimento:<br>
		<input type='text' name='nascimento' value='>
		<br><br>
		<input type='submit' value='Submit'>
		</form>";
	}
	
	function __toString(){
		return $this->toHtml();
	}
}