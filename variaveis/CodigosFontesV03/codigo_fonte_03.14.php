<?PHP
 
  $resultado = explode(' ', 'Brasil penta campeao');
  echo $resultado[0].'<BR>'; // Resultado: Brasil
  echo $resultado[1].'<BR>'; // Resultado: penta
  
  $resultado = explode(' ', 'Brasil penta campeao', 2);
  echo $resultado[0].'<BR>'; // Resultado: Brasil
  echo $resultado[1].'<BR>'; // Resultado: penta campeao
 
?>
