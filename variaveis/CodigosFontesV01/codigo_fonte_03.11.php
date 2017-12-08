<?PHP
  
  $senhaCadastrada = 'minhaSenhaSeguraDeInternet';
  
  echo(crypt($senhaCadastrada).'<BR>');
  // Resultado: $1$eRl.t3cN$87toVnnbrp52Qo5N5LrH50
  
  echo(sha1($senhaCadastrada).'<BR>');
  // Resultado: bb8b564b31d1c4a736dbbca0fd3512a5246f3cd8
  
  echo(md5($senhaCadastrada).'<BR>');
  // Resultado: 852b340fd8be477f0418cdcf32450fa7
  
  // Valor que deve ser armazenado no banco de dados
  $valorArmazenadoNoBanco = crypt($senhaCadastrada);
  
  // Autenticando um usuário
  $senhaInformadaNoLogin = 'minhaSenhaSeguraDeInternet';
  if(crypt($senhaInformadaNoLogin) == $valorArmazenadoNoBanco)
  {
    echo('Sucesso!');
  }
  
?>
