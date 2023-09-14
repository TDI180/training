<?php
namespace HONDA\YAMAHA\ESSENCE;
Use HONDA\YAMAHA as H;

      class mercedes extends H\moteurESSENCE 
					{
					   private $model='Mercedes-Benz C 180';
					   private $moteur='quatre cylindres diesel 2.2 litres de 120 chevaux' ;
					   private $color='white_BLUE';
					   private $fiscal='12 chevaux fiscaux';
					   
					   
					   public function getmodel()
					                            {
											
													echo "MODEL-MERCO--->".$this->model."</br>";
												}
					   
					   
					   public function getcolor() {
													 echo $this->color."</br>"; 
						   
												}
					   
					  
						public function getMoteur()
												{
												  $this->moteur= new H\moteurESSENCE();												  
												    echo "MOTOR-MERCO-PUISSANCE-->".$this->moteur->getPuissance();
												    echo "MOTOR-MERCO-CYLINDER--->".$this->moteur->getCylinder(); 
												    echo "MOTOR-MERCO-MOTEUR----->".$this->moteur->getMoteur();
												    echo '</br>';																									
				                                }						 
												 
	                }
?>