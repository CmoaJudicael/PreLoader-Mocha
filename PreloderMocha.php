<?php
/**
 * @package PreloaderMocha
 * @version 1.0
 */
/*
Plugin Name: Preloader Mocha Production
Description: Preloader personnalisé Mocha Production permettant d'affiché les animations LottiFile
Author: Judicael Maquaire
Version: 1.0
*/
//=================================================
// Security: Abort if this file is called directly
//=================================================
// 
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

if ( ! class_exists( 'Preloader_Mocha_Prod' ) ) 
{
	class Preloader_Mocha_Prod 
    {
		/**
	 	* Constructeur pour cette class.
	 	*/
		public function __construct() 
        {
            //Chargement du fichier preloader functions
            require_once plugin_dir_path( __FILE__ ) . 'include/preloader_functions.php';			
		}
	}

	// Instantiate the plugin class.
	$Preloader_Mocha_Prod = new Preloader_Mocha_Prod();

}
?>

