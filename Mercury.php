<?php
    /**
     * Main Mercury File
     * 
     * Contains references to all other Mercury classes.
     *
     * @category    Mercury
     * @package     Mercury
     * @subpackage  
     * @author      ARMIGER1 <1hockeyplayer+github@gmail.com>
     * @copyright   Copyright (c) 2011, ARMIGER1
     * @license     http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons BY-SA 3.0
     * @version     1.0
     * @link        http://github.com/ARMIGER1/Mercury Mercury
     * @since       1.0
     * @filesource
     */
    
    /**
     * Loads the specified file.
     * @param string $file The filename of the file to load.
     */
    function load($file) {
        if (file_exists($file)) {
            $logfile = getcwd() . "/logs/startup.log";
            $log = fopen($logfile, "a") or die("Could not load {$logfile}");
            fwrite($log, "Loaded {$file}\n");
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