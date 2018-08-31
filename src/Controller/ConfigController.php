<?php

namespace App\Controller;
use Cake\Core\Configure;

class ConfigController extends AppController
{
    public function index()
    {
    	Configure::dump('iolearn_custom_config','default');

    	$config = Configure::read('Company');
    	debug($config);
    	exit;
    }



}