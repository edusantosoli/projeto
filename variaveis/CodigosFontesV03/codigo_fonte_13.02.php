<?PHP
 
  class Carro
  {
    protected $chassis;
    
    function __construct($chassis)
    {
      $this->chassis  = $chassis;
      
      echo "Um novo objeto Carro foi constru�do<BR>";
    }
    
    public function getChassis()
    {
      return $this->chassis;
    }
  }
  
  $carro1 = new Carro("ABC1D234");
  
  echo "[VIA M�TODO] O chassis do carro �: ".$carro1->getChassis();
  echo "[DIRETO] O chassis do carro �: ".$carro1->chassis;
 
?>
