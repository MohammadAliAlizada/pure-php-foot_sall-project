<?php 

	class TimeModel extends Model{
		
		public function Index(){

			
			$this->query('SELECT * FROM t_table WHERE sal_id =' . $_SESSION['user_data']['sal_id']);
			$rows = $this->resultSet();
			return $rows;
		
		}
		public function add(){

			$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
			
			if($post['submit']){
				// validate
				if($post['table_id'] == '' || $post['tim'] == '' || $post['reserv'] == ''){
					Messages::setMsg('Please Fill In All Fields', 'error');
					return;
				}
				// Insert into MySQL
				$this->query('INSERT INTO t_table (table_id,sal_id, tim, reserv) VALUES(?, ?, ?, ?)');
				$table_id = $post['table_id'];		
				$sal_id = $_SESSION['user_data']['sal_id']; 
		
				$tim = $post['tim'];
				$reserv = $post['reserv'];
				

				$this->paramBindingTime($table_id ,$sal_id, $tim, $reserv);
				$this->execute();
				// Verify
				/*if($this->lastInsertId()){
					// Redirect
					header('Location: '.ROOT_URL.'shares');
				}*/
			}
			return;
			
		}
			public function delete($newID){
			echo $newID;
			$this->query('delete from t_table where table_id = '. $newID);
			$this->execute();
			header('Location: '.ROOT_URL.'time');
				
		}
		


	}