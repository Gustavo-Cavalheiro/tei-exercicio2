<?php
require ('html/Entrada.php');
require ('html/Formulario.php');
require ('Clinica/Formulario.php');
require ('index.php');

print "<h1>DADOS DA CONSULTA</h1>";
print "<p>Nome do paciente:".$obj->nome."</p>";
print "<p>Idade do paciente:".$obj->obterIdade()."</p>";
print "<p>Idade do paciente:".$obj->obterDuracaoConsulta()."</p>";
?>