<?PHP
  
  $minhaFila = array();
  array_push($minhaFila, 'a');
  array_push($minhaFila, 'b');
  echo(array_push($minhaFila, 'c').'<BR>'); // Resultado: 3
  
  echo(array_shift($minhaFila).'<BR>');        // Resultado: a
  echo(array_unshift($minhaFila, 'd').'<BR>'); // Resultado: d
  print_r($minhaFila); // Resultado: Array ( [0] => d [1] => b [2] => c )   
  
?>
