<?php 

	class UserModel extends Model{
		public function register(){
			$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
			


			//$password = md5($post['password']);
				$password = $post['password'];
			if($post['submit']){

				// validate
				if($post['name'] == '' || $post['email'] == '' || $post['password'] == ''){
					Messages::setMsg('Please Fill In All Fields', 'error');
					return;
				}
				
				// Insert into MySQL
				$this->query('INSERT INTO users (name, email, password) VALUES(?, ?, ?)');
				
				$name = $post['name'];
				$email = $post['email'];
				$pass = $password;


				$this->paramBindingUser($name, $email, $pass);
				$this->execute();
			}
			return;
		}

		public function login(){
			$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
			
			//$password = md5($post['password']);
			$password = $post['password'];

			if($post['submit']){
				// Compare with mysql
				$this->query('SELECT * FROM user_ad WHERE username = ? AND password = ?');
				
				$username = $post['username'];
				$pass = $password;


				$this->paramBindingLogin($username, $pass);
				$row = $this->executeSingle();
				
				if($row){
				$_SESSION['is_logged_in'] = true;
				$_SESSION['user_data'] = array(
					"sal_id"	=> $row['sal_id'],
					"username"	=> $row['username']
					
					
				);
				header('Location: '.ROOT_URL);
			} 

			else {
				Messages::setMsg('Incorrect Login', 'error');
			}
				
			}
			return;
		}
	}
