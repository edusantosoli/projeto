<?PHP
  
  $arquivo = '/caminho/inexistente';
  $file = fopen($arquivo, 'r') or exit('Problemas ao abrir o arquivo');
  
  // Resultado:
  // Warning: fopen(/caminho/inexistente) [function.fopen]: failed to open 
  // stream: No such file or directory in /home/httpd/htdocs/teste.php on 
  // line 4
  // Problemas ao abrir o arquivo
  
?>
