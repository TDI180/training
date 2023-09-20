<?php
//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 : TrainingToken
require_once '../CAR/autoloader.php';

autoloader::register();


ECHO '---------------------------VOITURE-ESSENCE-------------------------------------------'.'</br>';

/*$MERCOS_E=new Ess\mercedes();
$MERCOS_E->getcolor();
$MERCOS_E->getMoteur();*/


ECHO '----------------------------VOITURE-DIESEL-------------------------------------------'.'</br>';

$MERCOS=new mercedes();
$MERCOS->getcolor();
$MERCOS->getMoteur();


  try {
          // division(1,0);  
      }  
	  
	  
  catch(Exception $e) {  
                        echo "Message : " . $e->getMessage();  
                        echo "Code : " . $e->getCode();  
                      }   
					  
					  
  function division($a, $b) 
  {
    if($b == 0) {  
      throw new Exception("c l infini----", -32);  
    }else{
      return $a/$b;
    } 
  }  
					

?>

