<?php
namespace Clinica;

Class Formulario{
	private $consultaData;
	private $consultaHoraInicio;
	private $consultaHoraTermino;
	private $pacienteNome;
	private $pacienteNascimento;
	private $pacienteQueixa;
	private $medicoNome;
	private $medicoDiagnostico;

	function obterIdade(){
		return $this->consultaData - $this->pacienteNascimento;
	}
	
	function obterDuracaoConsulta(){
		return $this->consultaHoraTermino - $this->consultaHoraInicio;
	}
	
}