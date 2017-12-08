<?PHP
  
  $meuValor = 12345.678;
  $var1 = number_format($meuValor, 1);
  $var2 = number_format($meuValor, 2, ',','.');
  
  echo($meuValor.'<BR>'); // Resultado: 12345.678
  echo($var1.'<BR>');     // Resultado: 12,345.7
  echo($var2.'<BR>');     // Resultado: 12.345,68
  
?>
