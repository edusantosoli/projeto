<?PHP
  
  $meuArray = array('a', 1, 'b', 'c', 2, '0', '4');
  
  sort($meuArray);
  print_r($meuArray);
  // Resultado: 
  // Array ( [0] => 0 [1] => 4 [2] => a [3] => b [4] => c [5] => 1 [6] => 2 ) 
 
  echo('<BR>');
  rsort($meuArray);
  print_r($meuArray);
  // Resultado: 
  // Array ( [0] => 2 [1] => 1 [2] => c [3] => b [4] => a [5] => 4 [6] => 0 ) 
 
  echo('<BR>');
  shuffle($meuArray);
  print_r($meuArray);
  // Resultado: 
  // Array ( [0] => c [1] => 0 [2] => 4 [3] => a [4] => 1 [5] => 2 [6] => b ) 
 
?>
