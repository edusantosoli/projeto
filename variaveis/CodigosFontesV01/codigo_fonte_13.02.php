<?PHP
 
  class Carro
  {
    protected $chassis;
    
    function __construct($chassis)
    {
      $this->chassis  = $chassis;
      
      echo "Um novo objeto Carro foi construído<BR>";
    }
    
    public function getChassis()
    {
      return $this->chassis;
    }
  }
  
  $carro1 = new Carro("ABC1D234");
  
  echo "[VIA MÉTODO] O chassis do carro é: ".$carro1->getChassis();
  echo "[DIRETO] O chassis do carro é: ".$carro1->chassis;
 
?>
