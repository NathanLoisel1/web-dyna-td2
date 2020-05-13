<?php
namespace controllers;

use Ubiquity\utils\http\USession;
use Ubiquity\utils\http\UResponse;
use Ubiquity\orm\DAO;
use Ubiquity\utils\http\URequest;
use models\Inscription;

class InscriptionsController extends ControllerBase{

	public function index(){
		$this->loadView("InscriptionsController/index.html");
	}
    public function inscription(){	
		$this->loadView('InscriptionsController/inscription.html');
	}
    public function do(){
        $var = new Inscription();
        $var->setNom($_POST["pseudo"]);
        $var->setEmail($_POST["email"]);
        if(DAO::insert($var)){
            echo "Confirmé, redirection...";
            UResponse::header("location" ,"/inscriptionsController"); 
        }
        else {
            echo "<div class='ui red message'><p>Votre inscription avec l'email " . $_POST["email"] . " n'a pas fonctionnée</p><a href='/inscriptionsController'>Retour à l'accueil</a></div>";
        }
	}
    public function inscriptions(){
        $array = DAO::getAll(Inscription::class);
        foreach(DAO::getAll(Inscription::class)as $result) {
            echo $result;
        };
    }
}
