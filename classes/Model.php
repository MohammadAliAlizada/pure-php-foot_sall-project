<?php

	abstract class Model{
		protected $dbh;
		protected $stmt;

		public function __construct(){
			$this->dbh = new mysqli( constant("DB_HOST"), constant("DB_USER"), constant("DB_PASS"), constant("DB_NAME"));


		}

		public function query($query){
			$this->stmt = $this->dbh->prepare($query);
		}
		

		public function paramBinding($newTitle, $newBody, $newLink, $newUserID){
			$this->stmt->bind_param('sssi', $newTitle, $newBody, $newLink, $newUserID);
		}

		public function paramBindingUser($newName, $newEmail, $newPass){
			$this->stmt->bind_param('sss', $newName, $newEmail, $newPass);
		}

		public function paramBindingLogin($newEmail, $newPass){
			$this->stmt->bind_param('ss', $newEmail, $newPass);	
		}
		public function paramBindingTime($newSal_id, $newTim, $newReserv){
			$this->stmt->bind_param('isb', $newSal_id, $newTim, $newReserv );	
		}
		public function paramBindingReserve($newSal_id, $newTable_id, $newName, $newPhone){
			$this->stmt->bind_param('iiss', $newSal_id, $newTable_id, $newName, $newPhone );	
		}
		public function paramBindingNews($newAds_title, $newAds_pic, $newAds_desc, $newAds_url, $newAds_date, $newAds_expire){
			$this->stmt->bind_param('sssfdd', $newAds_title, $newAds_pic, $newAds_desc, $newAds_url, $newAds_date, $newAds_expire );	
		}
		public function paramBindingCustomer($newSal_id, $newTable_id, $newName, $newPhone){
			$this->stmt->bind_param('iiss', $newSal_id, $newTable_id, $newName, $newPhone );	
		}

		public function executeSingle(){
			$result = $this->resultSet(); 
			return $result->fetch_assoc();
		}


		public function execute(){
			$this->stmt->execute();
		}

		public function resultSet(){
			$this->execute();
			return $this->stmt->get_result();
		}


		public function lastInsertId(){
			return $this->dbh->lastInsertId();
		}

	}
