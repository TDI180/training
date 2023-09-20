<?php

class mercedes extends moteurDiesel
                  {
					private $model;
					private $moteur;
					private $color;
					  
					  
					  
					public function getmodel()
					                            {
												 $this->model='240 TURBODIESEL AMG';
													echo "MODEL-MERCO--->".$this->model."</br>";
												}
					   
					public function getcolor() 
													{
												 $this->color='green';
													echo "COLOR-MERCO--->".$this->color."</br>"; 
						   
												}
					   
					public function getMoteur()
												{
												  $this->moteur= new MoteurDiesel();												  
												    echo "MOTOR-MERCO-PUISSANCE-->".$this->moteur->getPuissance();
												    echo "MOTOR-MERCO-CYLINDER--->".$this->moteur->getCylinder(); 
												    echo "MOTOR-MERCO-MOTEUR----->".$this->moteur->getMoteur();
												    echo '</br>';																									
				                                }
		  
	             }
?>