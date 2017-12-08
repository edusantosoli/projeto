<?PHP
 
  $str = "var1=valor1&var2=va+lor2&var3[]=valor3";
  
  parse_str($str, $output);
  echo $output['var1'].'<BR>';    // valor1
  echo $output['var2'].'<BR>';    // va lor2
  echo $output['var3'][0].'<BR>'; // valor3
 
?>
