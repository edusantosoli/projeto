<?PHP
  
  $meuArray = array('aaa', 'bb', 'Chave do c' => 'c', 'ddd');
  
  echo(array_search('aaa', $meuArray).'<BR>'); // Resultado: 0
  echo(array_search('c', $meuArray).'<BR>'); // Resultado: Chave do c
  echo(array_search('nenhum', $meuArray).'<BR>'); // Resultado: <vazio>
  
?>
