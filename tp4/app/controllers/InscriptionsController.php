<?php
namespace controllers;

use Ubiquity\utils\http\USession;
use Ubiquity\utils\http\UResponse;
use Ubiquity\orm\DAO;
use Ubiquity\utils\http\URequest;

class InscriptionsController extends ControllerBase{

	public function index(){
		$this->loadView("InscriptionsController/index.html");
	}
    public function inscription(){	
		$this->loadView('InscriptionsController/inscription.html');
	}
    public function do(){
        $var->Nom = $_POST["pseudo"];
        $var->Email = $_POST["email"];
        $var->DateHeure = date('H:i');
        DAO::insert($var);
	}
}
