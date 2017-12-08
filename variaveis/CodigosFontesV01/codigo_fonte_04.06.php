<?PHP
  
  $meuArray = array('a', 'b', 'c', 'd', 'e', 'f', 'g');
  
  foreach($meuArray as $valor) {
    echo($valor." ");
  } 
  // Resultado: a b c d e f g 
  
  end($meuArray);
  prev($meuArray);
  prev($meuArray);
  prev($meuArray);
  next($meuArray);
  echo(key($meuArray));     // Resultado: 4
  echo(current($meuArray)); // Resultado: e
  
?>
