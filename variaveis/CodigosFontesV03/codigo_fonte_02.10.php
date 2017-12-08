<?PHP
  
  echo(! (45  == 45.0)); echo("<BR>"); // Resultado: <branco, vazio>
  echo(! (45 === 45.0)); echo("<BR>"); // Resultado: 1
  echo(1 < 3 && 3 < 1);  echo("<BR>"); // Resultado: <branco, vazio>
  echo(1 < 3 || 3 < 1);  echo("<BR>"); // Resultado: 1
  
?>
