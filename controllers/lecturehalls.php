<?php
	class Lecturehalls extends Controller{

		protected function Index(){
		$viewmodel = new LecturehallModel();
 		$this->returnView($viewmodel->Index(), true);
 	}

 		protected function addactivity(){

		$viewmodel = new LecturehallModel();
 		$this->returnView($viewmodel->addactivity(), true);
 	}

	protected function viewactivity(){
 			if(!isset($_SESSION['is_logged_in'])){
 			header('Location: '.ROOT_URL.'lecturehalls');
 		}
		$viewmodel = new LecturehallModel();
 		$this->returnView($viewmodel->viewactivity(), true);
 	}

	protected function addhall(){
		$viewmodel = new LecturehallModel();
 		$this->returnView($viewmodel->addhall(), true);
	}

	protected function gotoview(){
		$viewmodel = new LecturehallModel();
 		$this->returnView($viewmodel->gotoview(), true);
	}

	protected function delete(){
		$viewmodel = new LecturehallModel();
 		$this->returnView($viewmodel->delete(), true);
	}

	}
