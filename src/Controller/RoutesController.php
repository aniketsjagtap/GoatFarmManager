<?php

namespace App\Controller;
use Cake\Core\Configure;

class RoutesController extends AppController{

public function index(){
	die("I am routes/index");
}
public function about(){
	die("I am routes/about");
}
public function view($id){
	die("I am routes/view with id: $id");
}


}