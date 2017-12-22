<?php
class Teachers extends Controller{

  protected function Index(){
 		$viewmodel = new TeacherModel();
 		$this->returnView($viewmodel->Index(), true);
 	}
  protected function addteacher(){
 		$viewmodel = new TeacherModel();
 		$this->returnView($viewmodel->addteacher(), true);
 	}

}
