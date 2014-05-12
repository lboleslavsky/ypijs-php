<?php

/* 
 * YPI JavaScript code generator
 * ---
 * @author:     lboleslavsky [http://boleslavsky.net] 2014
 * @license:    MIT [link to ypijs.org required]
 * @project: 
 *              Your Presentation Interface for JavaScript
 *              [http://ypijs.org]
 */

namespace Ypi\Core;

class YPIScriptBase implements IYpiScriptBase  {

    // HTML syntax <script type="text/javascript" src="...></script><script type="...
    private $requireScript;
    // javascript syntax of ypi.df.init method
    private $initScript;
    // javascript syntax of onload:function(){...} handler
    private $loadScript; 
    // Id of avatar
    private $avatarId=0;
    
    /**
     * Instantiate avatar by class name
     * @param type $className class name
     * @param type $params array of parameters 
     * @return \Avatar avatar instance
     */
    public function createAvatar($className,$params)
    {
        $this->loadScript.=$this->getAvatarScript($params);
        $this->avatarId++;
        return new $className($params);
    }
    
    /**
     * Instantiate control panel by class name
     * @param type $className class name
     * @return \className control panel instance
     */
    public function createControlPanel($className)
    {
        return new $className();
    }
    
    /**
     * Returns BASE of ypijs script
     * @return type script
     */
    public function getScriptBase()
    {
        return $this->requireScript.$this::SCRIPT_BEGIN_TAG_PREFIX.$this::SCRIPT_BEGIN_TAG_SUFFIX .$this->getInitScript().$this::SCRIPT_END_TAG;
    }   
    
    /**
     * Returns script for ypi.df.init method
     * @return type 
     */
    private function getInitScript()
    {
       return $this::SCRIPT_INIT_PREFIX.$this->initScript.$this::DELIM_COMMA.$this::SCRIPT_LOAD_EVENT_PREFIX.$this->loadScript.$this::SCRIPT_INIT_SUFFIX;
    }   

    /**
     * Constructor
     * @param type $params array of init parameters
     */
    public function __construct($params,$requires) {
        $this->requireScript=$this->getRequireStr($requires);
        $this->initScript=$this->getObjectStr($params);
    }   
    
    /**
     * Returns HTML syntax to include javascript files to HTML page
     * @param type $requires required javascript files
     * @return string sequence of HTML element script syntax
     */
    private function getRequireStr($requires)
    {
        $str=$this::STR_INIT;
        foreach ($requires as $requireUrl)
        {
            $str.=$this::SCRIPT_BEGIN_TAG_PREFIX.$this::ATTR_SRC_PREFIX.$requireUrl.$this::SCRIPT_BEGIN_TAG_SUFFIX.$this::SCRIPT_END_TAG;
        }
        return $str;
    }
    
    /**
     * Returns ypi.df.createAvatar(... javascript syntax
     * @param type $params
     * @return type javascript syntax
     */
    private function getAvatarScript($params)
    {       
        return $this::AVATAR_PREFIX.$this->avatarId.$this::EQUALS.$this::SCRIPT_CREATE_PREFIX.$this->getObjectStr($params).$this::SCRIPT_CREATE_SUFFIX;
    }
    
    /**
     * Returns javascript syntax - object {..,..,..}  
     * @param type $params array with parameters
     * @return type javascript syntax
     */
    private function getObjectStr($params)
    {
        $str=$this::STR_INIT;
        foreach($params as $key=>$value)
        {           
            if($value instanceof JSFunc)
            {
                $str.=$this::DELIM_COMMA.$key.$this::DELIM_DOT.$value->getStr();
            }          
            else if(is_numeric($value)||  is_bool($value))
            {
                $str.=$this::DELIM_COMMA.$key.$this::DELIM_DOT.$value;
            }          
            else if(is_array($value))
            {
                $str.=$this::DELIM_COMMA.$key.$this::DELIM_DOT.$this->getArrayStr($value);
            }
            else
            {
                $str.=$this::DELIM_COMMA.$key.$this::DELIM_DOT.$this::DELIM_APOSTROF.$value.$this::DELIM_APOSTROF;                
            }                
        }
        return substr($str,$this::FIRST);
    }
    
    /**
     * Returns javascript array [] syntax
     * @param type $array array
     * @return type javascript syntax
     */
    private function getArrayStr($array)
    {
        $str=$this::STR_INIT;
        foreach($array as $value)
        {
            $str.=$this::DELIM_COMMA.$this::DELIM_APOSTROF.$value.$this::DELIM_APOSTROF;
        }
        return $this::BRACKET_LEFT.substr($str, $this::FIRST).$this::BRACKET_RIGHT;        
    }    
}
