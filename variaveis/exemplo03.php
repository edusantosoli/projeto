<?php
//tipos de strings basico 
$nome = "eduardo";
$site =  'www.edutec.com.br';
$ano = 1990;
$salario = 5500.99;
$bloqueado = false;
// tipo de string composto
$frutas = array("abacaxi", "laranja", "manga");
// para exibir
//echo $frutas[2];

$nascimento = new DateTime();

//var_dump($nascimento);

$arquivo  = fopen("exemplo02.php", "r");

var_dump($arquivo);



?>
