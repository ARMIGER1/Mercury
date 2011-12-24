<?php
    /**
	 * Main Mercury file
	 *
	 * Contains references to all other Mercury classes.
	 *
	 * LICENSE: CC BY-SA
	 * -----------------
	 * This license lets you, the user, remix, tweak and build upon
	 * this work even for commercial purposes, as long as you credit
	 * the author of this file and license your new creations
	 * under the identical terms.  This license is often compared to
	 * "copyleft" free and open-source software licenses.
	 *
	 * @category    Mercury
	 * @package     Mercury
	 * @subpackage  None
	 * @copyright   Copyright (c) ARMIGER1
	 * @license     http://creativecommons.org/licenses/by-sa/3.0/
	 * @version     1.0
	 * @link        http://github.com/ARMIGER1/Mercury
	 * @since       No version
	 */
     
     /**
      * Loads the specified file.
      * @param string $file The filename of the file to load.
      */
     function load($file) {
         if (file_exists($file)) {
         	$logfile = getcwd() . "/logs/startup.log";
         	$log = fopen($logfile, "a") or die("Could not load {$logfile}!");
         	fwrite($log, "Loaded {$file}!\n");
         	fclose($log);
             require_once $file;
         } else {
             die("File {$file} not found!");
         }
     }
     
     /**
      * Shows all the options in the configuration file.
      */
     function post_test() {
     	echo "Directory Separator: " . DS . "<br />";
		echo "Site Root: " . SITE_ROOT . "<br />";
		echo "Log Directory: " . LOG_DIR . "<br />";
		echo "Error Log: " . ERROR_LOG . "<br />";
		echo "Application Log: " . APP_LOG . "<br />";
		echo "Startup Log: " . STARTUP_LOG . "<br />";
		echo "Site Title: " . SITE_TITLE . "<br />";
     }
     
     // Config files
     load('config/config.php');
     
     // Interfaces
     load('.' . DS . 'interfaces' . DS . 'Types.interface.php');
     
     // Classes
     load('.' . DS . 'classes' . DS . 'Logger.class.php');