<?php
namespace Vehicle\gasoline;

class autoloader
				{
					
				public function __construct($a,$b) {
													echo $a.'</br>';
													echo $b.'<br/>';
													}             	
				  static function register()
											{
											  //spl_autoload_register('autoload');
											 //echo __CLASS__.'</br>';	
											  spl_autoload_register([__CLASS__,'autoload']);	
                                              										  
											}											
											
				  static function autoload($class)
										{								  
											//echo "AVANT STR----->".$class.'</br>';									
											
												
											//$class=str_replace('Diesel\\','',$class);
											//identify the namespace if no namespace in the autoloader
											
											$class = str_replace(__NAMESPACE__.'\\','',$class);									        
											//echo "aprés STR---->".$class.'</br>';
										    //echo "***************************************************".'</br>';
											//autoloader and the files to load are in the same namespace
											$class=str_replace('\\','/',$class);
                                             //echo "aprés 2--STR---->".$class.'</br>';											
											// echo "***************************************************".'</br>';	
												
											
											 
											 if (file_exists(__DIR__.'/gasoline/'.$class.'.php')) 
												{
												  require __DIR__. '/gasoline/'.$class.'.php';												  
												}
												
											if (file_exists(__DIR__.'/gasoline/Motorisation/'.$class.'.php')) 
												{
												  require __DIR__. '/gasoline/Motorisation/'.$class.'.php';												  
												}
												
												
												
											if (file_exists(__DIR__.'/'.$class.'.php')) 
												{
												  require __DIR__. '/'.$class.'.php';
												  
												}	
												
												
												
													//echo "honda-250-------"."</br>";
										}
											 
				}	
?> 
