<?PHP
  
  // Escrevendo em arquivo
  $file = fopen('dados.txt', 'w');
  fwrite($file, 'Escrevendo ');
  fwrite($file, 'no arquivo. ');
  fclose($file);
  
  // Lendo um arquivo
  $filepath = "dados.txt";
  $file = fopen($filepath, "r");
  $buffer = fread($file, filesize($filepath));
  fclose($file);
  echo($buffer); // Resultado: Escrevendo no arquivo. 
  
?>
