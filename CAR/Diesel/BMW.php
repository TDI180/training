<?php
namespace HONDA\YAMAHA\DIESEL;
echo __NAMESPACE__.'</br>';

      class BMW {
                   private $model;
				   private $moteur;
				   private $color;
				   
				   
				   public function getcolor() 
				                              {
											   $this->color='BLACK';
											   echo "COLOR-BMW--->".$this->color."</br>"; 
				                              }
				   
				   public function getMoteur()
				                               {
											   $this->motor='M21 2.4 L Diesel.';
											   echo '------'.$this->moteur."</br>"; 
				                               }
											 
					public function getModel()
					                          {
											   $this->model='serie-7';
											   echo '-----'.$this->model."</br>"; 
				                              }						 
											 
		  
		  
	             }

?>