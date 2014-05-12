<?php

/* 
 * NPC Presenter interface for nette
 * ---
 * @author:     lboleslavsky [http://boleslavsky.net] 2014
 * @license:    MIT [link to ypijs.org required]
 * @project: 
 *              Your Presentation Interface for JavaScript
 *              [http://ypijs.org]
 */

interface INpcPresenter {
    
    function createComponentAvatar1();
    function createComponentReactions();
    function createComponentYpiBase();
    
    const CLASS_PATH_AVATAR = 'YpiControls\Avatar';
    const CLASS_PATH_PANEL_REACTIONS = 'YpiControls\PanelReactions';
    const SCRIPT_YPI_MIN_URL = '../js/ypi_min-1.5.5.js';
    const SCRIPT_HELPER_URL= '../js/helper.js';
    const SCRIPT_CHAPTER_URL = 'http://localhost/k/www/welcome.xml';
    const INIT_STATE = 'n1';
    const FUNCTION_PARSE_MARK = 'parseCustomMark';
    const FUNCTION_BEHAVIOR = 'basicBehavior';
    const BUBBLE_ID = 'npc_avatar_1';
    const SPEECH_SPEED = 120;
    const AVATAR_ID = 'avatar1';
    const AVATAR_ALIAS= 'Name Surname';
    const CUSTOM_CASE_ATTRIBUTE_TRACK = 'trackId';
}
