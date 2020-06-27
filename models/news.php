<?php 

	class NewsModel extends Model{
		public function Index(){
			$this->query('SELECT * FROM advertisement');
			$rows = $this->resultSet();
			
				return $rows;
			
	}

	public function add(){

			$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
			
			if($post['submit']){
				// validate
				if($post['ads_title'] == '' || $post['ads_pic'] == '' || $post['ads_desc'] == '' || $post['ads_url'] == '' || $post['ads_date'] == '' || $post['ads_expire'] == ''){
					Messages::setMsg('Please Fill In All Fields', 'error');
					return;
				}
				// Insert into MySQL
				$this->query('INSERT INTO advertisement (ads_title, ads_pic, ads_desc, ads_url, ads_date, ads_expire) VALUES( ?, ?,?, ?, ?, ?)');
				
				$ads_title = $post['ads_title'];
				$ads_pic = $post['ads_pic'];
				$ads_desc = $post['ads_desc'];
				$ads_url = $post['ads_url'];
				$ads_date = $post['ads_date'];
				$ads_expire = $post['ads_expire'];
				

				$this->paramBindingNews($ads_title, $ads_pic, $ads_desc, $ads_url, $ads_date, $ads_expire);
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
