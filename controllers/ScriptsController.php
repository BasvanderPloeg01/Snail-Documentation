<?php

class ScriptsController extends Controller {
	public function __construct(){
		parent::__construct();
		
		$this->load_model("scripts");
		
		$this->view->show_hf("scripts");
	}
}
    