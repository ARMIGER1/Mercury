<?php
    /**
     *
     * Handles creating, writing and appending to log files.
     *
     * @category    Mercury
     * @package     Mercury_Classes
     * @subpackage  Logging
     * @copyright   Copyright (c) 2011, ARMIGER1
     * @license     http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons BY-SA 3.0
     * @version     1.0
     * @link        http://github.com/ARMIGER1/Mercury Mercury
     * @since       1.0
     */
    
    /**
     * Logger Class
     *
     * Handles creating, writing and appending to log files.
     *
     * @category    Mercury
     * @package     Mercury_Classes
     * @subpackage  Logging
     * @author      ARMIGER1 <1hockeyplyaer+github@gmail.com>
     * @copyright   Copyright (c) 2011, ARMIGER1
     * @license     http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons BY-SA 3.0
     * @version     1.0
     * @link        http://github.com/ARMIGER1/Mercury Mercury
     * @since       1.0
     */
    class Logger {
        
        /**
         * Constructor function.
         */
        function __construct() {
            //
        }
        
        /**
         * Tests the class to ensure that it's working.
         */
        function test() {
            echo "Logger functional!";
            $file = './logs/test.txt';
            
            echo $file;
            
            if (!file_exists($file)) {
                echo "<h1>Attempting to creat file: {$file}!</h1>";
                
                echo "Escaped: {$file}";
                
                $newFile = fopen($file, "a") or die("Cannot open {$file}!");
                
                fclose($newFile);
            } else {
                echo "<h1>File has already been created!";
            }
        }
        
        /**
         * Logs the specified message into the type of log specified.
         * @param Type $type The type of log to write to.
         * @param string The message to append to the log.
         */
        function log_action($type, $message) {
            switch($type) {
                case Types::LOGTYPE_ERROR:
                    $logfile = fopen(ERROR_LOG, "a") or die("Cannot open error log!");
                    fwrite($logfile, "{$message}\n");
                    fclose($logfile);
                    break;
                case Types::LOGTYPE_APP:
                    $logfile = fopen(APP_LOG, "a") or die("Cannot open app log!");
                    fwrite($logfile, "{$message}\n");
                    fclose($logfile);
                    break;
                case Types::LOGTYPE_STARTUP:
                    $logfile = fopen(STARTUP_LOG, "a") or die("Cannot open startup log!");
                    fwrite($logfile, "{$message}\n");
                    fclose($logfile);
                    break;
                default:
                    $logfile = fopen(ERROR_LOG, "a") or die("Cannot open error log!");
                    fwrite($logfile, "{$message}\n");
                    fclose($logfile);
                    break;
            }
        }
    }