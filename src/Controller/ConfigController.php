<?php

namespace App\Controller;
use Cake\Core\Configure;

class ConfigController extends AppController
{
	public function initialize()
    {
        parent::initialize();
       if (!($this->Auth->user())) {
            return $this->redirect($this->Auth->logout());
        }
        $usersTable = TableRegistry::get('Users');

        $usersTable->newEntity();
        $this->user= $usersTable->get($this->Auth->user('id'));
    }
    public function index()
    {
    	Configure::dump('iolearn_custom_config','default');

    	$config = Configure::read('Company');
    	debug($config);
    	exit;
    }



}