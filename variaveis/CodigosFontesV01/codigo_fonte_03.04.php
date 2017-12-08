<?PHP
  
  echo(strpos('Brasil Pentacampeao', 'a').'<BR>');
  // Resultado: 2  
  
  echo(strpos('Brasil Pentacampeao', 'a', 3).'<BR>');
  // Resultado: 11
  
  // Exibindo todas as ocorrencias
  $offset = 0;
  while(($offset = strpos('Brasil Pentacampeao', 'a', $offset + 1)) != 0)
  {
    echo($offset.', ');
  }
  // Resultado: 2, 11, 13, 17, 
  
?>
