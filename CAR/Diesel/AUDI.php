<?php
namespace HONDA\YAMAHA\DIESEL;
echo __NAMESPACE__.'</br>';

      class AUDI 
	  
	                  {
					   private $model='';				   
                       private $moteur='Audi A3 Sportback 2.0 TDI' ;
					   private $color='YELLOW FLASH';
					   
					   public function getcolor()  {
													 echo "COLOR-AUDI--->".$this->color."</br>"; 
						   
												 }
					   
					   public function getMoteur() {
						   
													echo $this->moteur."</br>"; 
												 }
												 
												 
					   public function getModel()
					                          {
											   $this->model='AUDI-RS-3';
											   echo '-----'.$this->model."</br>"; 
				                              }									 
		  
	                }
?>