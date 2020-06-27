<?php
class news extends Controller{
	protected function Index(){
		$viewmodel = new NewsModel();
		$this->returnView($viewmodel->Index(), true);
	}
	protected function add(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'news');
		}
		$viewmodel = new ReservationModel();
		$this->returnView($viewmodel->add(), true);
	}
}