<?PHP
  
  $meuArray = array('a', 'b', 'c', 'd', 'e');
  echo (count($meuArray).'<BR>');  // Resultado: 5
 
  unset($meuArray[0]);
  echo (sizeof($meuArray).'<BR>'); // Resultado: 4
 
?>
