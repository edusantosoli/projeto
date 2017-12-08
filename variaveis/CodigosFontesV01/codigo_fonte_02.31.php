<?PHP
 
  ob_start();
  include("dados.txt");
  header("Location: http://www.google.com.br");
  ob_flush();
  
?>
