<?php
//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 : TrainingToken

require_once '../CAR/autoloader.php';

//Vehicle\gasoline\autoloader::register();

$VGAutoloader=new Vehicle\gasoline\autoloader(5,2);

$VGAutoloader::register();

ECHO '---------------------------VOITURE-ESSENCE-------------------------------------------'.'</br>';
/*$moteur=new Essence\moteur;
$moteur->getPuissancefiscal();*/
$MERCOS_E=new Vehicle\gasoline\mercedes();
$MERCOS_E->getcolor();
$MERCOS_E->getMoteur();

ECHO '----------------------------VOITURE-DIESEL-------------------------------------------'.'</br>';

/*$MERCOS=new mercedes();
$MERCOS->getcolor();
$MERCOS->getMoteur();*/

  try {
        // division(1,0);  
      }  	  
	  
  catch(Exception $e) {  
                        echo "Message : " . $e->getMessage();  
                        echo "Code : " . $e->getCode();  
                      }   
					  
					  
  function division($a, $b) 
  {
    if( $b == 0) {  
      throw new Exception("c l infini----",-32);  
    }else{
      return $a/$b;
    } 
  } 					

?>

