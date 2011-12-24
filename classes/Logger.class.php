<?php
    /**
	 * Logger class
	 *
	 * Handles creating, writing and appending to log files.
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
	 * @package     Mercury_Classes
	 * @subpackage  Logger
	 * @copyright   Copyright (c) ARMIGER1
	 * @license     http://creativecommons.org/licenses/by-sa/3.0/
	 * @version     1.0
	 * @link        http://github.com/ARMIGER1/Mercury
	 * @since       No version
	 */
	 
	class Logger {
	
		function __construct() {
			//
		}
		
		function test() {
			echo "Working!<br />";
			$file = "./logs/test.txt";
			
			echo $file;
			
			if (!file_exists($file)) {
				echo "<h1>Will now create file: {$file}!</h1>";
				
				echo "Escaped: {$file}";
				
				$newFile = fopen($file, "a") or die("Cannot open {$file}!");
				fclose($newFile);
				
			} else {
				echo "<h1>File already created!</h1>";
			}
			
		}
		
		/**
		 * Logs the specified message into the type of log specified.
		 * @param int $type The type of log to write to.
		 * @param string The message to append to the log.
		 */
		function log_action($type, $message) {
			switch ($type) {
				case Types::LOGTYPE_ERROR:
					$logfile = fopen(ERROR_LOG, "a") or die("Cannot open error log!");
					fwrite($logfile, "{$message}\n");
					fclose($logfile);
					break;
				case Types::LOGTYPE_APP:
					//echo $type;
					$logfile = fopen(APP_LOG, "a") or die ("Cannot open app log");
					fwrite($logfile, $message . "\n");
					fclose($logfile);
					break;
				case Types::LOGTYPE_STARTUP:
					//echo $type;
					$logfile = fopen(STARTUP_LOG, "a") or die("Cannot open startup log");
					fwrite($logfile, $message . "\n");
					fclose($logfile);
					break;
				default:
					//echo "Default";
					$logfile = fopen(ERROR_LOG, "a") or die("Cannot open file");
					fwrite($logfile, "Error: Invalid log type {$type}!" + "\n");
					fclose($logfile);
					break;
			}
		}
	}