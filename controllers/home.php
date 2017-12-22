<?php
 class Home extends Controller{

 	protected function Index(){
 		$viewmodel = new HomeModel();
 		$this->ReturnView($viewmodel->Index(), true);
 	}

 	protected function about(){
 		$viewmodel = new HomeModel();
 		$this->ReturnView($viewmodel->about(), true);
 	}

 	protected function newadmin(){
 		$viewmodel = new HomeModel();
 		$this->ReturnView($viewmodel->newadmin(), true);
 	}
  
 }
