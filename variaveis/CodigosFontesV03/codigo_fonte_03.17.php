<?PHP
 
 echo(addslashes('teste').'<BR>');   // Resultado: teste
 echo(addslashes('tes\'te').'<BR>'); // Resultado: tes\'te
 echo(addslashes('tes\"te').'<BR>'); // Resultado: tes\\\"te
  
 echo(stripslashes('teste').'<BR>');   // Resultado: teste
 echo(stripslashes('tes\'te').'<BR>'); // Resultado: tes\'te
 echo(stripslashes('tes\"te').'<BR>'); // Resultado: tes\\\"te
 
?>
