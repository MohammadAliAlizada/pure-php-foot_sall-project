<?php
class Time extends Controller{
	protected function Index(){
		$viewmodel = new TimeModel();
		$this->returnView($viewmodel->Index(), true);
	}
	protected function add(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'time');
		}
		$viewmodel = new TimeModel();
		$this->returnView($viewmodel->add(), true);
	}
	protected function delete(){

			if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'time');
		}
		$viewmodel = new TimeModel();
		$this->returnView($viewmodel->delete($_GET['table_id']), true);
	}
}