<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap {

    protected function _initAutoLoader() {
        $modelLoader = new Zend_Application_Module_Autoloader(array(
            'namespace' => '',
            'basePath' => APPLICATION_PATH
        ));

//        $acl = new Application_Model_LibraryAcl();
//        $auth = Zend_Auth::getInstance();
//
//        $front = Zend_Controller_Front::getInstance();
//        $front->registerPlugin(new Application_Plugin_AccessCheck($acl, $auth));

        return $modelLoader;
    }

}
