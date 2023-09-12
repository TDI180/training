<?php
namespace CAR\classloader;// the class autoloader must be in the same file SYSTEM root!!!
echo __NAMESPACE__.'</br>';
echo __DIR__.'</br>';

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
											echo __DIR__.'</br>';
											//$class=str_replace('Diesel\\','',$class);
											//identify the namespace if no namespace in the autoloader
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
