<?php
namespace controllers;
 /**
 * Controller InscriptionsController
 **/
class InscriptionsController extends ControllerBase{

	public function index(){
		$this->loadView("InscriptionsController/index.html");
	}
    public function inscription(){	
		$this->loadView('InscriptionsController/inscription.html');

	}
}
