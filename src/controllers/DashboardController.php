<?php

namespace kakalika\controllers;

use kakalika\lib\KakalikaController;

/**
 * 
 * @author ekow
 */
class DashboardController extends KakalikaController
{

    public function init()
    {
        parent::init();
        $this->set('sub_section', 'Dashboard');
    }

    public function run()
    {
        
    }
}
