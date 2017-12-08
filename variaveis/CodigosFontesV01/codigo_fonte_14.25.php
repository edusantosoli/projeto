<?PHP
 
  include_once("MySQL.php");
  include_once("Utils.php");
  include_once("Usuario.php");
  
  if($_REQUEST["action"] == "createUser")
  {
    $newUser = new Usuario();
    $errorMsg = FALSE;
    
    $utils = new Utils();
    $database = $utils->getDatabaseConnection();
    $database->connect();
    
    $database->executeCommand("SELECT * FROM USUARIOS_POO WHERE USERNAME = 
                              '".$_POST["CAMPO_NOMEUSUARIO"]."'
                              ");
    $qtdOfSameUserName = $database->getAffectedRows();
 
    if(!$newUser->setFullName($_POST["CAMPO_NOMECOMPLETO"]))
      $errorMsg = "'Nome completo' deve possuir entre 5 e 64 caracteres";
    
    else if(!$newUser->setUserName($_POST["CAMPO_NOMEUSUARIO"]))
      $errorMsg = "'Nome de usu�rio' deve possuir entre 3 e 16 caracteres";
      
    else if($qtdOfSameUserName > 0)
      $errorMsg = "O nome de usu�rio escolhido j� existe.";  
       
    else if(!$newUser->setEmail($_POST["CAMPO_EMAIL"]))
      $errorMsg = "Endere�o de e-mail inv�lido";
    
    else if(!$newUser->setBirthday((int)$_POST["CAMPO_NASCIMENTODIA"], 
                              (int)$_POST["CAMPO_NASCIMENTOMES"], 
                              (int)$_POST["CAMPO_NASCIMENTOANO"]))
      $errorMsg = "Data de nascimento inv�lida";
    
    else if(!$newUser->setSex($_POST["CAMPO_SEXO"]))
      $errorMsg = "� necess�rio preencher o campo 'Sexo'";
    
    else if(!$newUser->setPasswordHash($_POST["CAMPO_SENHA"]))
      $errorMsg = "'Senha' deve possuir entre 5 e 16 caracteres";
    
    if($errorMsg == FALSE)
    {
      // Salva o registro no banco de dados
      $sql = "INSERT INTO USUARIOS_POO 
              (FULLNAME, USERNAME, EMAIL, BIRTHDAY, SEX, PASSWORD_HASH) 
              VALUES (
              '".$newUser->getFullName()."', 
              '".$newUser->getUserName()."', 
              '".$newUser->getEmail()."', 
              '".date("Y-m-d", $newUser->getBirthday())."',
              '".$newUser->getSex()."', 
              '".$newUser->getPasswordHash()."'
              )";
              
      $database->executeCommand($sql);
      if($database->getAffectedRows() == 1)
      {
        echo "Usu�rio criado com sucesso!";
        exit();
      }
      else
        echo $database->getError();
    }
    else
      echo "<B>".$errorMsg."</B><BR>";
    
    $database->disconnect();
  }
 
?>
