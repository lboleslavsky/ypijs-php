<?php

/* 
 * Avatar control for Nette
 * ---
 * @author:     lboleslavsky [http://boleslavsky.net] 2014
 * @license:    MIT [link to ypijs.org required]
 * @project: 
 *              Your Presentation Interface for JavaScript
 *              [http://ypijs.org]
 */

namespace YpiControls;

use Nette\Application\UI;

class Avatar extends UI\Control{

    /**
     * Construct
     * @param type $params array with parameters
     */
    public function __construct($params)
    {
        $this->template->bubble=$params[$this::BUBBLE_ID];
        $this->template->name=$params[$this::NAME];
        parent::__construct();
    }
    
    /**
     * Render control
     */
    public function render()
    {
        $this->template->setFile(__DIR__.$this::TEMPLATE_PATH);       
        $this->template->render();
    }
    
    // attributes
    const NAME = 'Name';
    const BUBBLE_ID = 'BubbleId'; 
    
    // path to latte template file
    const TEMPLATE_PATH = '/templates/avatar.latte';   
}
