<?php
//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 : TrainingToken
require_once '../CAR/autoloader.php';

use HONDA\YAMAHA\ESSENCE as E;
use HONDA\YAMAHA\Diesel	 as D;


HONDA\YAMAHA\autoloader::register();

//--------------------------VOITURE DIESEL

$BMw_D=new D\BMW();
$BMw_D->getcolor();
$AUDI=new D\AUDI();
$AUDI->getcolor();
ECHO '------VOITURE-DIESEL----------------------------------------------------------------'.'</br>';
$MERCOS=new D\mercedes();
$MERCOS->getcolor();
$MERCOS->getMoteur();

//-------------------------/VOITURE ESSENCE
/*$BMw_E=new E\BMW();
$BMw_E->getcolor();
$AUDI_E=new E\AUDI();
$AUDI_E->getcolor();*/

ECHO '------VOITURE-ESSENCE----------------------------------------------------------------'.'</br>';

$MERCOS_E=new E\mercedes();
$MERCOS_E->getcolor();
$MERCOS_E->getMoteur();




  try {
       division(1,0);  
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

