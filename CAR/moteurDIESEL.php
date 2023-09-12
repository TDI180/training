<?php  
namespace HONDA\YAMAHA;


	class moteurDIESEL
	  
						{
						   private $model='Mercedes-Benz C 180';
						   private $moteur='Common Rail Diesel Injection' ;
						   private $puissance='194 chevaux';
						   private $cylinder='4 cylindre en ligne-2.2 litres';
						   
						   public function  getcolor()    {
															 echo $this->color."</br>"; 						   
														   }
						   
						   public function  getMoteur()   {						   
															 echo $this->moteur."</br>"; 
														   }
						   public function  getPuissance() 
														   {						   
															 echo $this->puissance."</br>"; 
														   }
						   public function  getCylinder() {						   
															 echo $this->cylinder."</br>"; 
														   }
													   
						}
	class moteurESSENCE
	  
						{
						   private $model='Classe A 250 4Matic';
						   private $moteur=	'ESSENCE ATMOSPHERIK' ;
						   private $puissance='224 ch à 5500 tr/min ';
						   private $cylinder='2.0L 4cyl. inj. directe turbo';
						   
						   public function  getcolor()    {
															 echo $this->color."</br>"; 						   
														   }
						   
						   public function  getMoteur()   {						   
															 echo $this->moteur."</br>"; 
														   }
						   public function  getPuissance() 
														   {						   
															 echo $this->puissance."</br>"; 
														   }
						   public function  getCylinder() {						   
															 echo $this->cylinder."</br>"; 
														   }
													   
						}					
						
						
						
						
?>