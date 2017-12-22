<?php
Class Statistics  extends Controller{

	protected function Index(){
		$viewmodel = new StatisticModel();
 		$this->returnView($viewmodel->Index(), true);
	}

	protected function freehall(){
		$viewmodel = new StatisticModel();
 		$this->returnView($viewmodel->freehall(), true);
	}

	protected function busyhall(){
		$viewmodel = new StatisticModel();
 		$this->returnView($viewmodel->busyhall(), true);
	}

	protected function teacherwithkey(){
		$viewmodel = new StatisticModel();
 		$this->returnView($viewmodel->teacherWithKey(), true);
	}

	protected function minchairtable(){
		$viewmodel = new StatisticModel();
 		$this->returnView($viewmodel->minChairTable(), true);
	}

	protected function maxchairtable(){
		$viewmodel = new StatisticModel();
 		$this->returnView($viewmodel->maxChairTable(), true);
	}

}