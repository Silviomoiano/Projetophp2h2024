<?php 
$nome = "Pedro";
$peso =80;
$altura =1.71;


function calcular($peso, $altura){
	return($peso/($altura*$altura));
}
$imc=calcular($peso, $altura);
printf("Ola $nome seu peso $peso e sua altura $altura e seu imc é %.2f", $imc);









 ?>