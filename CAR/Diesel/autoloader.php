<?php
namespace Diesel\zebi;

echo __NAMESPACE__ ;

class autoloader
				{
				  static function register()
											{
											  //spl_autoload_register('autoload');
											 //echo __CLASS__.'</br>';	
											  spl_autoload_register([__CLASS__,'autoload']);
													
											}
											
											
				  static function autoload($class)
										{								  
											var_dump ($class);
											//$class=str_replace('Diesel\\','',$class);
											//identify the namespace if no namespace in the autoloader
											echo __NAMESPACE__ ;
											$class=str_replace(__NAMESPACE__ . '\\','',$class);
											//autoloader and the files to load are in the same namespace
											$class=str_replace('\\','/',$class);									
											
											
												if (file_exists(__DIR__. '/' .$class.'.php')) 
												{
													require __DIR__. '/' .$class.'.php';
												}										
										}
											
				}							

?> 


