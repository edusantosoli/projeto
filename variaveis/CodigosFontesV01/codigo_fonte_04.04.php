<?PHP
  
  $meuArray = array('a', 'b', 'c', 'd', 'e');
  unset($meuArray[3]);
  
  print_r($meuArray);
  // Resultado:
  // Array ( [0] => a [1] => b [2] => c [4] => e )  
  
?>
