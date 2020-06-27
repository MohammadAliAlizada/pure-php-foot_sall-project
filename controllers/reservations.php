<?php
class reservations extends Controller{
	protected function Index(){
		$viewmodel = new ReservationModel();
		$this->returnView($viewmodel->Index(), true);
	}

	protected function add(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'reservations');
		}
		$viewmodel = new ReservationModel();
		$this->returnView($viewmodel->add(), true);
	}

	protected function delete(){
		
			if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'reservations');
		}
		$viewmodel = new ReservationModel();
		$this->returnView($viewmodel->del($_GET["rsv_id"]), true);
	}
	
	

}