<?php

/* 
 * JavaScript function type
 * ---
 * @author:     lboleslavsky [http://boleslavsky.net] 2014
 * @license:    MIT [link to ypijs.org required]
 * @project: 
 *              Your Presentation Interface for JavaScript
 *              [http://ypijs.org]
 */

namespace Ypi\Core;

class JSFunc implements IJSType{
    // function body
    private $body; 
    // function arguments
    private $args;
    
    /**
     * Construct 
     * @param type $body function body
     * @param type $args function arguments
     */
    public function __construct($body,$args)
    {
        $this->body=$body;
        $this->args=$args;
    }
    
    /**
     * Returns javascript function 
     * @return type function$args{$body} if $args!=null. Else return only name of function
     */
    public function getStr()
    {
        if($this->args==null)
        {
            return $this->body;
        }
        return $this::SCRIPT_FUNCTION_PREFIX.$this->args.$this::BRACKET_LEFT.$this->body.$this::BRACKET_RIGHT;
    }
}
