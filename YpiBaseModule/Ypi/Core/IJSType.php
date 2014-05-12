<?php

/* 
 * JavaScript object type
 * ---
 * @author:     lboleslavsky [http://boleslavsky.net] 2014
 * @license:    MIT [link to ypijs.org required]
 * @project: 
 *              Your Presentation Interface for JavaScript
 *              [http://ypijs.org]
 */

namespace Ypi\Core;

interface IJSType {
    
    /**
     * Returns string representation of object type
     */
    function getStr();
    
    /*
     * constants
     */
    const SCRIPT_FUNCTION_PREFIX = 'function';
    const BRACKET_LEFT='{';
    const BRACKET_RIGHT='}';
}
