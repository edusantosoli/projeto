<?PHP
 
  include_once("Usuario.php");
 
  /*
  * Testes de verificação do funcionamento da classe Usuario
  */
   
  $usr = new Usuario();
   
  // Dados válidos (retornan TRUE(1))
  echo "Dados válidos:<BR>";
  echo "Fullname: ".$usr->setFullName("André Milani")."<BR>";
  echo "Username: ".$usr->setUserName("amilani")."<BR>";
  echo "E-mail: ".$usr->setEmail("andre.milani@novatec.com.br")."<BR>";
  echo "Birthday: ".$usr->setBirthday(01, 01, 1982)."<BR>";
  echo "Sex: ".$usr->setSex("M")."<BR>";
  echo "Password: ".$usr->setPasswordHash("minhasenha")."<BR>";
  
  // Dados inválidos (retornan FALSE(''))
  echo "<BR><BR>Dados inválidos:<BR>";
  echo "Fullname: ".$usr->setFullName("A")."<BR>";
  echo "Username: ".$usr->setUserName("")."<BR>";
  echo "E-mail: ".$usr->setEmail("qualquer@coisa")."<BR>";
  echo "Birthday: ".$usr->setBirthday(2, 31, 1982)."<BR>";
  echo "Sex: ".$usr->setSex("")."<BR>";
  echo "Password: ".$usr->setPasswordHash("a")."<BR>";
 
?>
