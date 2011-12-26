<?php
    /**
     * Types Interface
     *
     * Contains all global types needed for Mercury.
     *
     * @category    Mercury
     * @package     Mercury_Interfaces
     * @subpackage  Types
     * @copyright   Copyright (c) ARMIGER1
     * @license     http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons BY-SA 3.0
     * @version     1.0
     * @link        http://github.com/ARMIGER1/Mercury
     * @since       No version
     */
    
    interface Types {
        
        /**
         * Denotes an article
         * @var int
         */
        const ARTICLE = 0;
        
        /**
         * Denotes an entire page
         * @var int
         */
        const PAGE = 1;
        
        /**
         * Denotes a section on a page
         * @var int
         */
        const SECTION = 2;
        
        /**
         * Denotes the entire site
         * @var int
         */
        const SITE = 3;
        
        /**
         * Denotes an unordered list
         * @var int
         */
        const LIST_UNORDERED = 0;
        
        /**
         * Denotes an ordered list
         * @var int
         */
        const LIST_ORDERED = 1;
        
        /**
         * Denotes a target of '_self'
         * @var int Allows a page to open in the current window/tab
         */
        const TARGET_SELF = 0;
        
        /**
         * Denotes a text link
         * @var int
         */
        const TEXT_LINK = 0;
        
        /**
         * Denotes an image link
         * @var int
         */
        const IMAGE_LINK = 1;
        
        /**
         * Denotes the error log
         */
        const LOGTYPE_ERROR = 0;
        
        /**
         * Denotes the application log
         */
        const LOGTYPE_APP = 1;
        
        /**
         * Denotes the startup log
         */
        const LOGTYPE_STARTUP = 2;
    }