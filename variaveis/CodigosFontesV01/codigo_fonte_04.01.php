<?PHP
  
  $meuArray = array('alpha' => 'valor1', 2, 'tres');
  $meuArray[5] = 'Novo valor';
  
  echo($meuArray[0].'<BR>');       // Resultado: 2
  echo($meuArray['alpha'].'<BR>'); // Resultado: valor1
  echo($meuArray[5].'<BR>');       // Resultado: Novo valor
  
?>
