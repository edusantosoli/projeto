<?PHP
  
  $nomeDaVar = "minhaVar";
  $$nomeDaVar = 45;
  // Equivalente �: $minhaVar = 45;
  
  echo("O valor de ".$nomeDaVar." � ".$$nomeDaVar."");
  // O valor de minhaVar � 45
  
?>
