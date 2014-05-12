<?php

/* 
 * NPC Presenter for nette
 * ---
 * @author:     lboleslavsky [http://boleslavsky.net] 2014
 * @license:    MIT [link to ypijs.org required]
 * @project: 
 *              Your Presentation Interface for JavaScript
 *              [http://ypijs.org]
 */

use YpiControls\YpiControl;

use Nette\Application\UI;
use Ypi\Core\JSFunc;

class NpcPresenter extends BasePresenter implements INpcPresenter { 
    
    // base script component
    private $ypiBase;
    // avatar component
    private $avatar1;
    // reactions component
    private $reactions;
       
    /**
     * Construct
     */
    public function __construct() {
       $this->init();
       parent::__construct();
    }
    
    /**
     * Init components (not lazy load)
     */
    private function init()
    {
        $requiredSripts = array($this::SCRIPT_YPI_MIN_URL,$this::SCRIPT_HELPER_URL); 
        $initAttr=array(                 
                            'initState'=>$this::INIT_STATE,
                            'chapterUrl'=>$this::SCRIPT_CHAPTER_URL,
                            'isAutostart'=>true,
                            'isSoundEnabled'=>true,
                            'attrCase'=>array($this::CUSTOM_CASE_ATTRIBUTE_TRACK));
        
        $avatarAttr = array(
                            'Name'=>$this::AVATAR_ID,
                            'Alias'=>$this::AVATAR_ALIAS,
                            'BubbleId'=>$this::BUBBLE_ID,
                            'Speed'=>$this::SPEECH_SPEED,
                            'onbubble'=>new JSFunc($this::FUNCTION_PARSE_MARK,null),
                            'behavior'=>new JSFunc($this::FUNCTION_BEHAVIOR,null)); 
        
        $this->ypiBase= new YpiControl($initAttr,$requiredSripts);       
        $this->avatar1 = $this->ypiBase->createAvatar($this::CLASS_PATH_AVATAR ,$avatarAttr);
        $this->reactions=$this->ypiBase->createControlPanel($this::CLASS_PATH_PANEL_REACTIONS);
    }
    
    /**
     * Returns component avatar1
     * @return type avatar1 component
     */
    public function createComponentAvatar1() 
    {
        return $this->avatar1;
    }
    
    /**
     * Returns component reactions panel
     * @return type reactions panel component
     */
    public function createComponentReactions()
    {
        return $this->reactions;
    }
    
    /**
     * Returns component ypi script base
     * @return type ypi script base component
     */
    public function createComponentYpiBase()
    {
        return $this->ypiBase;
    }
}
