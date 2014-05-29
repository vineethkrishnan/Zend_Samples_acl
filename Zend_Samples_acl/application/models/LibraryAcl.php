<?php

class Application_Model_LibraryAcl extends Zend_Acl
{
    public function __construct() {
        
       $this->addResource(new Zend_Acl_Resource('index'));
       
       $this->addResource(new Zend_Acl_Resource('auth'));
       $this->addResource(new Zend_Acl_Resource('login'),'auth');
       $this->addResource(new Zend_Acl_Resource('logout'),'auth');
       
       
       $this->addResource(new Zend_Acl_Resource('book'));
       $this->addResource(new Zend_Acl_Resource('add'),'book');
       $this->addResource(new Zend_Acl_Resource('edit'),'book');
       $this->addResource(new Zend_Acl_Resource('delete'),'book');
       
       $this->addResource(new Zend_Acl_Resource('books'));
       $this->addResource(new Zend_Acl_Resource('list'),'books');
       
       $this->addRole(new Zend_Acl_Role('user'));
       $this->addRole(new Zend_Acl_Role('admin'), 'user');
       
       $this->allow('user', 'index', 'index');
       $this->allow('user', 'books', 'list');
       $this->allow('user', 'auth', 'login');
       $this->allow('user', 'auth', 'logout');
       $this->allow('admin', 'book', 'add');
       $this->allow('admin', 'book', 'edit');
       $this->allow('admin', 'book', 'delete');
    }

}

