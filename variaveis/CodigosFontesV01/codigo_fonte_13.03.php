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
  
  class CarroUtilitario extends Carro
  {
    protected $capacidadeCacamba;
    
    function __construct($chassis, $capacidadeCacamba)
    {
      parent::__construct($chassis);
      $this->capacidadeCacamba  = $capacidadeCacamba;
      
      echo "Um novo objeto CarroUtilitario foi constru�do<BR>";
    }
    
    public function getCapacidade()
    {
      return $this->capacidadeCacamba;
    }
  }
  
  $carro1 = new CarroUtilitario("ABC1D234", 300);
  
  echo "O chassis da carro �: ".$carro1->getChassis();
  echo "<BR>A capacidade do carro �: ".$carro1->getCapacidade();
  
  /* RESULTADO
  *
  * Um novo objeto Carro foi constru�do
  * Um novo objeto CarroUtilitario foi constru�do
  * O chassis da carro �: ABC1D234
  * A capacidade do carro �: 300   
  *   
  */  
  
?>
