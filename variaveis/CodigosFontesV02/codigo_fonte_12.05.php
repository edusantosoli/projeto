<?PHP
 
  if($_COOKIE["VisitCounter"] == "") 
  {
    $visitas = 1;
    setcookie("VisitCounter", $visitas, time() + 8640000);
  }
  else 
  {
    $_COOKIE["VisitCounter"]++;
    $visitas = $_COOKIE["VisitCounter"];
    setcookie("VisitCounter", $visitas, time() + 8640000);
  } 
  
  echo $visitas;
  
?>
