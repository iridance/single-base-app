<?php

namespace app\controllers;

use single\web\Controller;

class SiteController extends Controller
{
    public function indexAction()
    {
        $this->assign('content', 'hello world');
        $this->display('site/index');
    }
}