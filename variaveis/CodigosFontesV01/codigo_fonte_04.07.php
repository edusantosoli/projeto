<?PHP
  
  $minhaPilha = array();
  array_push($minhaPilha, 'a');
  array_push($minhaPilha, 'b');
  echo(array_push($minhaPilha, 'c').'<BR>'); // Resultado: 3
  
  echo(array_pop($minhaPilha).'<BR>'); // Resultado: c
  print_r($minhaPilha); // Resultado: Array ( [0] => a [1] => b ) 
  
?>
