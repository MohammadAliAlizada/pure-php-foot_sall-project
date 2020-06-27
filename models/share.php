<?php 

	class ShareModel extends Model{
		
		public function Index(){

			$this->query('SELECT * FROM reservation ORDER BY create_date DESC');
			$rows = $this->resultSet();
			return $rows;
		}

		public function add(){

			$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
			
			if($post['submit']){
				// validate
				if($post['title'] == '' || $post['body'] == '' || $post['link'] == ''){
					Messages::setMsg('Please Fill In All Fields', 'error');
					return;
				}
				// Insert into MySQL
				$this->query('INSERT INTO shares (title, body, link, user_id) VALUES(?, ?, ?, ?)');
				
				$title = $post['title'];
				$body = $post['body'];
				$link = $post['link'];
				$id = 1;

				$this->paramBinding($title, $body, $link,$id);
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
