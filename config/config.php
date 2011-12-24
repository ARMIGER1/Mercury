<?php
    /**
	 * Config file
	 *
	 * Contains various global configuration options.
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
	 * @package     Mercury_Config
	 * @subpackage  None
	 * @copyright   Copyright (c) ARMIGER1
	 * @license     http://creativecommons.org/licenses/by-sa/3.0/
	 * @version     1.0
	 * @link        http://github.com/ARMIGER1/Mercury
	 * @since       No version
	 */
     
    /**
     * The directory separator for every single file path.
     * @var char A character that separates directories on the filesystem.
     * @todo Define a directory separator.
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
     * @todo Fill this in.
     */
    define('SITE_ROOT', ROOT_DIR);
    
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
    