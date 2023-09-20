<?php
<<<<<<< HEAD
namespace MoteurEssence\ESSENCE;
Use MoteurEssence as Me;

      class mercedes extends Me\moteur 
=======
namespace ESSENCE;


      class mercedes extends MoteurESSENCE 
>>>>>>> 9128dc66a59547924d5d1d2fcf8f9aca206c4edd
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
					   
					  
						public function getMoteur()
												{
<<<<<<< HEAD
												  $this->moteur= new Me\moteurEssence();	
=======
												  $this->moteur= new moteurEssence();	
>>>>>>> 9128dc66a59547924d5d1d2fcf8f9aca206c4edd
													
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
				                                }						 
												 
	                }
?>