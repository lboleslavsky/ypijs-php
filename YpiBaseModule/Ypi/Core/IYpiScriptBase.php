<?php

/* 
 * YPI JavaScript code generator interface
 * ---
 * @author:     lboleslavsky [http://boleslavsky.net] 2014
 * @license:    MIT [link to ypijs.org required]
 * @project: 
 *              Your Presentation Interface for JavaScript
 *              [http://ypijs.org]
 */

namespace Ypi\Core;

interface IYpiScriptBase {    
  
    /**
     * Constructor
     * @param type $params array of init parameters
     */
    function __construct($params,$requires); 
    
    /**
     * Instantiate avatar by class name
     * @param type $className class name
     * @param type $params array of parameters 
     * @return \Avatar avatar instance
     */
    function createAvatar($className,$params);
    
    /**
     * Instantiate control panel by class name
     * @param type $className class name
     * @return \className control panel instance
     */
    function createControlPanel($className);
    
    /**
     * Returns BASE of ypijs script
     * @return type script
     */
    function getScriptBase(); 
    
    /**
     * Constants - javascript syntax
     */    
    const FIRST = '1';
    const EQUALS = '=';
    const STR_INIT = '';    
    const DELIM_DOT = ':';
    const DELIM_COMMA = ',';
    const DELIM_APOSTROF = '\'';
    const BRACKET_LEFT = '[';
    const BRACKET_RIGHT = ']';    
    const SCRIPT_INIT_PREFIX = 'ypi.df.init({';
    const SCRIPT_INIT_SUFFIX = '}});';
    const SCRIPT_CREATE_PREFIX = 'ypi.df.createAvatar({';
    const SCRIPT_CREATE_SUFFIX = '});';
    const SCRIPT_LOAD_EVENT_PREFIX = 'onload:function(options){';
    const SCRIPT_BEGIN_TAG_PREFIX = '<script type="text/javascript';
    const ATTR_SRC_PREFIX = '" src="';
    const SCRIPT_BEGIN_TAG_SUFFIX = '">';
    const SCRIPT_END_TAG = '</script>';
    const AVATAR_PREFIX = 'avatar_';
}
