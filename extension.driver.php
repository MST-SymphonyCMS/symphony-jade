<?php

class Extension_Jade extends Extension {

    public function getSubscribedDelegates(){
        return array(
            array(
                'page' => '/backend/',
                'delegate' => 'AdminPagePreGenerate',
                'callback' => 'addAssets'
            )
        );
    }

    public function addAssets(){
        Administration::instance()->Page->addScriptToHead(
            URL.'/extensions/jade/assets/ace/ace.js', 1000, false);
        Administration::instance()->Page->addScriptToHead(
            URL.'/extensions/jade/assets/main.js', 1001, false);
    }
}
