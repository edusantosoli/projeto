<?PHP
  
  $data1 = date('l jS \of F h:i:s A', 111222333);
  echo $data1.'<BR>';
  // Resultado: Wednesday 11th of July 04:05:33 AM
    
  $data2 = date('l jS \of F h:i:s A', time());
  echo $data2.'<BR>';
  // Resultado: Sua data atual no formato exibido anteriormente
  
  $data3 = date('H:i:s');
  echo $data3.'<BR>';
  // Resultado: Seu horário local no formato exemplo: 22:14:29
  
?>
