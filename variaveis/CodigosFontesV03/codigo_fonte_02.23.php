<?PHP
  
  function calculeDobro($valor)
  {
    $dobro = $valor * 2;
    return $dobro;
  }
  
  $i = 2;
  echo("O dobro de $i � ".calculeDobro($i)."<BR>");
  echo("O valor original de \$i � ".$i)
  
  // Resultado:
  // O dobro de 2 � 4
  // O valor original de $i � 2
  
?>
