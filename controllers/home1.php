<?php
class Home1 extends Controller{
	protected function Index(){
		$viewmodel = new Home1Model();
		$this->returnView($viewmodel->Index(), true);
	}
}