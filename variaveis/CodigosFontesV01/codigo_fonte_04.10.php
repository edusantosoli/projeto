<?PHP
  
  $meuArray = array('alfa' => 0, 1 => 1, 'dois' => 2);
  print_r(array_keys($meuArray));
  // Resultado: Array ( [0] => alfa [1] => 1 [2] => dois )
  
  echo(array_key_exists('dois', $meuArray)); 
  // Resultado: 1
  
?>
