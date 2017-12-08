<?PHP
  
  class Pessoa
  {
    public $nome;
    public $idade;
    public $email;
    
    function __construct($nome, $idade, $email)
    {
      $this->nome  = $nome;
      $this->idade = $idade;
      $this->email = $email;
      
      echo "Um novo objeto PESSOA foi construído<BR>";
    }
    
    public function notificar($mensagem)
    {
      echo "Notificando ".$this->nome.": ".$mensagem;
    }
  }
  
  $pessoa1 = new Pessoa("André", 27, "andre@dominio");
  $pessoa2 = new Pessoa("Carlos", 28, "carlos@dominio");
  $pessoa1->notificar("Seu pedido foi confirmado!<BR>");
  
?>
