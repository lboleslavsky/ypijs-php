<?php

/* 
 * YPI base script control for nette
 * ---
 * @author:     lboleslavsky [http://boleslavsky.net] 2014
 * @license:    MIT [link to ypijs.org required]
 * @project: 
 *              Your Presentation Interface for JavaScript
 *              [http://ypijs.org]
 */

namespace YpiControls;

use Nette\Application\UI;
use Ypi\Core\YPIScriptBase;

class YpiControl extends UI\Control {   
    
    // ypi core syntax generator
    private $ypiScript;
    
    /**
     * 
     * @param type $params
     * @return \Avatar
     */
    public function createAvatar($className,$params)
    {       
        return $this->ypiScript->createAvatar($className, $params);
    }
    
    /**
     * Create and returns control panel with reactions
     * @param type $className class name
     * @return type  control panel by class name
     */
    public function createControlPanel($className)
    {
        return $this->ypiScript->createControlPanel($className);
    }
    
    /**
     * Construct
     * @param type $params array with initial parameters
     * @param type $requires array with script requirements
     */
    public function __construct($params,$requires) {
        $this->ypiScript = new YPIScriptBase($params,$requires);
        parent::__construct();
    }       

    /**
     * Pack all together
     */
    private function pack()
    {       
       $this->template->script = $this->ypiScript->getScriptBase();
    }
    
    /**
     * Render control
     */
    public function render()
    {        
        $this->template->setFile(__DIR__.$this::TEMPLATE_PATH);
        $this->pack();
        $this->template->render();                
    }
    
    // path to latte template file
    const TEMPLATE_PATH = '/templates/ypi.latte';
}
