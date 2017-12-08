<?PHP
  
  // Escrevendo em arquivo
  $file = fopen('dados.txt', 'w');
  fwrite($file, 'Escrevendo '.chr(10));
  fwrite($file, 'no arquivo. ');
  fclose($file);
  
  // Lendo um arquivo linha a linha
  $arquivo = file('dados.txt');
  for($i=0; $i < count($arquivo); $i++)
  {
    // Imprime cada linha com uma quebra de linha em HTML
    echo $arquivo[$i]."<BR>";
  }
  
?>
