<?php 

	class SaloonModel extends Model{
		
		public function Index(){
	
			$this->query('SELECT * FROM saloon');
			$rows = $this->resultSet();
			
				return $rows;
					
		}

		public function list($id){
		
	$this->query('SELECT * FROM t_table WHERE sal_id ='. $id);
			$rows = $this->resultSet();
			return $rows;

		}

		public function adv(){
		
	$this->query('SELECT * FROM advertisement');
			$rows = $this->resultSet();
			return $rows;
		}
	public function reserve($id){
	
	$this->query('UPDATE t_table SET reserv=1 WHERE table_id=3');
	$this->execute();
	header('Location: '.ROOT_URL.'saloon/customer');
				
		}
		public function customer(){
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
				

				$this->paramBindingCustomer($sal_id, $table_id, $name, $phone);
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
