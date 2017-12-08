<?PHP
 
  class Usuario
  {
    private $internalID;    // Armazena o ID do usuário
    private $fullName;      // Armazena o nome completo do usuário
    private $userName;      // Armazena o nome de usuário (login único)
    private $email;         // Armazena o e-mail do usuário
    private $birthday;      // Armazena a data de nascimento do usuário
    private $sex;           // Armazena o sexo do usuário
    private $passwordHash;  // Armazena o código hash da senha do usuário
     
    /* 
    *  Recebe um ResultSet com os campos da tabela USUARIO do banco de dados 
    *  e popula as informações de uma pessoa
    */
    public function setDataFromRS($resultSet)
    {
      $this->internalID   = $resultSet["ID"];
      $this->fullName     = $resultSet["FULLNAME"];
      $this->userName     = $resultSet["USERNAME"];
      $this->email        = $resultSet["EMAIL"];
      $this->birthday     = $resultSet["BIRTHDAY"];
      $this->sex          = $resultSet["SEX"];
      $this->passwordHash = $resultSet["PASSWORDHASH"];
    }
  
    /* Conjunto de funções setters */
 
    public function setFullName($fullName)
    { 
      if(strlen($fullName) < 5 || strlen($fullName) > 64)
        return FALSE;
        
      $this->fullName = $fullName; 
      return TRUE;
    }
 
    public function setUserName($userName)
    { 
      if(strlen($userName) < 3 || strlen($userName) > 16)
        return FALSE;
        
      $this->userName = $userName; 
      return TRUE;
    }
 
    public function setEmail($email)
    { 
      $regex  = "/^[^0-9][A-z0-9_]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+";
      $regex .= ")*[.][A-z]{2,4}$/";
      if(!preg_match($regex, $email) || strlen($email) > 128) 
        return FALSE;
      $this->email = $email; 
      return TRUE;
    }
 
    public function setBirthday($day, $month, $year)
    { 
      if(!checkdate($month, $day, $year))
        return FALSE;
      
      $this->birthday = mktime(0, 0, 0, $month, $day, $year); 
      return TRUE;
    }
 
    public function setSex($sex)
    { 
      if($sex != "M" && $sex != "F")
        return FALSE;
        
      $this->sex = $sex; 
      return TRUE;  
    }
 
    public function setPasswordHash($password)
    {
      if(strlen($password) < 5 || strlen($password) > 16)
        return FALSE;
         
      $this->passwordHash = md5($password); 
      return TRUE;  
    }
    
    /* Conjunto de funções getters */
  
    public function getInternalID()
    { return $this->internalID; }
 
    public function getFullName()
    { return $this->fullName; }
 
    public function getUserName()
    { return $this->userName; }
 
    public function getEmail()
    { return $this->email; }
 
    public function getBirthday()
     { return $this->birthday; }
  
     public function getSex()
     { return $this->sex; }
  
     public function getPasswordHash()
     { return $this->passwordHash; }
   }
  
 ?>
