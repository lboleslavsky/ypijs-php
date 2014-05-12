<?php

/* 
 * Panel control for Nette
 * ---
 * @author:     lboleslavsky [http://boleslavsky.net] 2014
 * @license:    MIT [link to ypijs.org required]
 * @project: 
 *              Your Presentation Interface for JavaScript
 *              [http://ypijs.org]
 */

namespace YpiControls;

use Nette\Application\UI;

class PanelReactions extends UI\Control {
    
    /**
     * Render control
     */
    public function render()
    {
        $this->template->setFile(__DIR__.$this::TEMPLATE_PATH);
        $this->template->render();
    }
    
    // path to latte template file
    const TEMPLATE_PATH = '/templates/panel.latte';
}