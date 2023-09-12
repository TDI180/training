<?php
//namespace App ; /* you can't call or include folders or class or functions if  the file is not a member of the same namespace...
/**
 * Created by PhpStorm.
 * User: capta
 * Date: 05/05/2019                 C:\wamp64\www\REQUIRE_PHP\blog\app\Table
 * Time: 16:30
 */
                            class autoloader 					
							{	  
								public static function  autoload ($class)
																		{		
																	  echo ($class.'<br>');
																	  $class2=str_replace( __NAMESPACE__ .'\\','', $class);
																	  /*we delete the namespace from the path*/
																	  echo ($class2.'<br>');
																					
																	  $path=str_replace('App','' ,__DIR__).'\\box\\minibox';
																	  echo ('<br>');
																	  echo ($path);
																	  echo ('<br>');
																	 require str_replace('App','' ,__DIR__).'\\box\\minibox'.'\\'.$class2.'.php';			
																	/*not  the correct path */
																	/* real  path= C:\wamp64\www\Namespaces\box\minibox\box_2.php*/
																	/* path define with __dir__ =C:\wamp64\www\Namespaces\App\box_2.php*/
																	   }				
							 public static function register ()
																				{ 																 
																				   spl_autoload_register ( array (__CLASS__, 'autoload') ) ;
																					/*__CLASS__  defines the class called in the script  */
																					/* the engine script automaticcaly built the corresponding path of the called class*/
																					/* function autoload is stored in the pile _autoload */		
																					/*	spl_autoload_register() enregistre une fonction dans la pile __autoload() fournie	*/
																				}	
						   }
