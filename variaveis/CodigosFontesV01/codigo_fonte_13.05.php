<?PHP
 
  abstract class Pais
  {
    abstract protected function formatarValor($valor);
    public function exibirValor($valor) 
    {
      echo $this->formatarValor($valor);
    }
  }
  
  class Brasil extends Pais
  {
    protected function formatarValor($valor)
    {
      return "R$ ".$valor."<BR>";
    }
  }
  
  class EUA extends Pais
  {
    protected function formatarValor($valor)
    {
      return "U$ ".$valor."<BR>";
    }
  }
 
  $pais1 = new Brasil();
  $pais2 = new EUA();
  
  $valor = 35;
  $pais1->exibirValor($valor);
  $pais2->exibirValor($valor);
   
  /* RESULTADO
  * 
  * R$ 35
  * U$ 35
  *   
  */  
 
?>
