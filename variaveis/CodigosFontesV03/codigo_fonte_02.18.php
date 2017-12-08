<?PHP
  
  for($i = 0; $i < 10; $i++) 
  {
    if($i == 4) 
    {
      continue;
    }
      
    echo($i .' '); // Resultado: 0 1 2 3 5 6 7 8 9 
  }
  
?>
