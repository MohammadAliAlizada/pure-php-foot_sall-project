<?php
class Saloon extends Controller{
	protected function Index(){
		$viewmodel = new SaloonModel();
		$this->returnView($viewmodel->Index(), true);
	}
	protected function list(){
		$viewmodel = new SaloonModel();
		$this->returnView($viewmodel->list($_GET['id']), true);
	}
	protected function adv(){
		$viewmodel = new SaloonModel();
		$this->returnView($viewmodel->adv(), true);
	}
	protected function reserve(){

		$viewmodel = new SaloonModel();
		$this->returnView($viewmodel->reserve(), true);
	}
	
	protected function customer(){

		$viewmodel = new SaloonModel();
		$this->returnView($viewmodel->customer(), true);
	}



}