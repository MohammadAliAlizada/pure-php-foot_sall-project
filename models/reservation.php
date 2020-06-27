<?php 

	class reservationModel extends Model{
		public function Index(){
			
		
			$this->query('SELECT * FROM reservation WHERE sal_id =' . $_SESSION['user_data']['sal_id']);

			$rows = $this->resultSet();
			return $rows;
	

		}

		public function add(){

			$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
			
			if($post['submit']){
				// validate
				if($post['sal_id'] == '' || $post['table_id'] == '' || $post['name'] == '' || $post['phone'] == ''){
					Messages::setMsg('Please Fill In All Fields', 'error');
					return;
				}
				// Insert into MySQL
				$this->query('INSERT INTO reservation (sal_id, table_id, name, phone) VALUES(?, ?, ?, ?)');
				
				$sal_id = $post['sal_id'];
				$table_id = $post['table_id'];
				$name = $post['name'];
				$phone = $post['phone'];
				

				$this->paramBindingReserve($sal_id, $table_id, $name, $phone);
				$this->execute();
				// Verify
				/*if($this->lastInsertId()){
					// Redirect
					header('Location: '.ROOT_URL.'shares');
				}*/
			}
			return;
			
		}


				public function del($newID){
			echo $newID;
			$this->query('DELETE FROM reservation WHERE rsv_id = '. $newID);
			$this->execute();
			header('Location: '.ROOT_URL.'reservations');
				
		}
		

		public function edit(){
			
			$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
			
			
			if($post['submit']){
				// validate
				if($post['sal_id'] == '' || $post['table_id'] == '' || $post['name'] == '' || $post['phone'] == ''){
					Messages::setMsg('Please Fill In All Fields', 'error');
					return;
				}
				// Insert into MySQL
				$this->query('INSERT INTO reservation (sal_id, table_id, name, phone) VALUES(?, ?, ?, ?)');
				
				$sal_id = $post['sal_id'];
				$table_id = $post['table_id'];
				$name = $post['name'];
				$phone = $post['phone'];
				

				$this->paramBindingReserve($sal_id, $table_id, $name, $phone);
				$this->execute();
				// Verify
				/*if($this->lastInsertId()){
					// Redirect
					header('Location: '.ROOT_URL.'shares');
				}*/
			}
			return;
			
		}
		

}
