<?PHP
  
  function calcularDobro($numero) {
    return $numero * 2;
  }
  
  $meuArray = array(1, 2, 3);
  $arrayAlterado = array_map('calcularDobro', $meuArray);
  
  print_r($arrayAlterado);
  // Resultado: Array ( [0] => 2 [1] => 4 [2] => 6 ) 
  
?>
