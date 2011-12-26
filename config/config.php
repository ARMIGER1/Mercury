<?php
    /**
     * Config File
     *
     * Contains various global configuration options.
     *
     * @category    Mercury
     * @package     Mercury_Config
     * @subpackage  Config_Files
     * @copyright   Copyright (c) 2011, ARMIGER1
     * @license     http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons BY-SA 3.0
     * @version     1.0
     * @link        http://github.com/ARMIGER1/Mercury Mercury
     * @since       1.0
     */
    
    /**
     * The directory separator for every single file path.
     * @var char A character that separates directories on the filesystem.
     */
    define('DS', 'DIRECTORY_SEPARATOR');
    
    /**
     * Your server root directory.
     * @var string The path to the root directory of your server.
     */
    define('ROOT_DIR', dirname(dirname(__FILE__)));
    
    /**
     * Your site root directory.
     * @var string Your site root directory.
     */
    define('SITE_ROOT', 'ROOT_DIR');
    
    /**
     * The directory where all logs are kept.
     * @var string Path to the directory where all logs are kept.
     */
    define('LOG_DIR', SITE_ROOT . DS . 'logs');
    
    /**
     * The location of Mercury's error log.
     * @var string Path to the error log.
     */
    define('ERROR_LOG', LOG_DIR . DS . 'error.log');
    
    /**
     * The location of the application log.
     * @var string Path to your application's main log.
     */
    define('APP_LOG', LOG_DIR . DS . 'app.log');
    
    /**
     * The location of Mercury's startup log.
     * @var string Path to the startup log.
     */
    define('STARTUP_LOG', LOG_DIR . DS . 'startup.log');
    
    /**
     * The main title of your site.
     * @var string The main title of your site.
     */
    define('SITE_TITLE', '[YOUR SITE TITLE]');
    
    // Should you need it...
    //$url = $_GET['url'];
    