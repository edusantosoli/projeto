<?PHP
  
  $nomeDaVar = "minhaVar";
  $$nomeDaVar = 45;
  // Equivalente à: $minhaVar = 45;
  
  echo("O valor de ".$nomeDaVar." é ".$$nomeDaVar."");
  // O valor de minhaVar é 45
  
?>
