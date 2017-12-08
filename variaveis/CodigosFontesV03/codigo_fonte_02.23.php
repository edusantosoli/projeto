<?PHP
  
  function calculeDobro($valor)
  {
    $dobro = $valor * 2;
    return $dobro;
  }
  
  $i = 2;
  echo("O dobro de $i é ".calculeDobro($i)."<BR>");
  echo("O valor original de \$i é ".$i)
  
  // Resultado:
  // O dobro de 2 é 4
  // O valor original de $i é 2
  
?>
