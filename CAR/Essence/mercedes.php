<?php
namespace TEST;

    class mercedes //extends Moteur 

					{
					   private $model='Mercedes-Benz C 180';					  
					   private $color='white_BLUE';					  
					   
					   
					   public function getmodel()
					                            {
												    echo "MODEL-MERCO--->".$this->model."</br>";
												}
					   
					   
					   public function getcolor() 
					                              {
													echo $this->color."</br>"; 						   
												  }
					   
					  
						/*public function getMoteur()
												{

												  $this->moteur= new Moteur();	
													
												    echo 'puissance-->';
													echo $this->moteur->getPuissance()."</br>";
													echo 'cylinder-->';
												    echo $this->moteur->getCylinder()."</br>"; 
													echo 'motorisation--->';
												    echo $this->moteur->getMotorisation()."</br>";
													echo 'puissance-fiscale---->';
													echo $this->moteur->getPuissancefiscal()."</br>";	
													//echo 'c est OK';
												    //echo '</br>';																									
				                                }	*/					 
												 
	                }
?>