<?PHP
  
  $meuArray = array('alpha' => 'valor1', 2, 'tres');
  $meuArray[5] = 'Novo valor';
  
  print_r($meuArray);
  // Resultado:
  // Array ( [alpha] => valor1 [0] => 2 [1] => tres [5] => Novo valor ) 
  
?>
