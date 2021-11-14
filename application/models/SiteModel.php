<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
	class SiteModel extends CI_Model{
		
		//check duplicate email exist in user table
		public function isRowExist($tableName,$data, $returnmessage, $user_id = NULL){
		
				$this->db->where($data);
				if($user_id !== NULL) {
						$this->db->where('userId',$user_id);
				}
				if($returnmessage == 'num_rows'){
						return $this->db->get($tableName)->num_rows();
				}else if($returnmessage == 'result_array'){
						return $this->db->get($tableName)->result_array();
				}else{
						return $this->db->get($tableName)->result();
				}
		}

		//get all posts for newsfeed post show
		public function get_all_posts()
		{
			
			$this->db->select('posts.id, posts.user_id, posts.content, posts.attachment, posts.post_like, posts.type, posts.status, posts.created_at, register_users.first_name, register_users.last_name, register_users.profile_photo')

				->limit('50')
				->from('posts')
				->join('register_users','register_users.id = posts.user_id','left')
				->where('posts.status', '1')
				->order_by('posts.created_at', 'DESC')
				->group_by('posts.id');
				
			$query = $this->db->get();

			if ($query->num_rows() > 0) {

				return $query->result();

			} else {

				return array();
			}
		
		}

		//last post inserted
		public function last_post_inserted($id)
		{
			
			$this->db->select('posts.id, posts.user_id, posts.content, posts.attachment, posts.post_like, posts.type, posts.status, posts.created_at, register_users.id, register_users.first_name, register_users.last_name, register_users.profile_photo')

				
				->from('posts')
				->join('register_users','register_users.id = posts.user_id','left')
				->where('posts.status', '1')
				->where('posts.id', $id)
				->group_by('posts.id');
				
			$query = $this->db->get();

			if ($query->num_rows() > 0) {

				return $query->row();

			} else {

				return array();
			}
		
		}

		//get search data for autocomplete
		public function search_data($search)
		 {
		 	$this->db->select('id, first_name, last_name, user_name')

				->limit('5')
				->from('register_users')
				->where("LOWER(first_name) LIKE '%$search%'")
				->or_where("LOWER(last_name) LIKE '%$search%'")
				->or_where("LOWER(user_name) LIKE '%$search%'")
				->group_by('id');
				
			$query = $this->db->get();

			if ($query->num_rows() > 0) {

				return $query->result();

			} else {

				return array();
			}

		} 

		//get comment data
		public function get_comments($post_id)
		{
			$this->db->select('register_users.id, register_users.first_name, register_users.last_name, register_users.user_name, register_users.profile_photo, post_comments.comment_content, post_comments.created_at, post_comments.updated_at')

				->limit('5')
				->from('post_comments')
				->join('register_users', 'register_users.id = post_comments.user_id', 'left')
				->where('post_comments.post_id', $post_id)
				->order_by('post_comments.id', 'DESC')
				->group_by('post_comments.id');
				
			$query = $this->db->get();
			// echo "<pre>";
	  //       print_r($query->num_rows());
	  //       exit;

			if ($query->num_rows() > 0) {

				return $query->result();

			} else {

				return array();
			}
		}

		// get last insert comment
		public function get_last_insert_comment($comment_id)
		{
			$this->db->select('register_users.id, register_users.first_name, register_users.last_name, register_users.user_name, register_users.profile_photo, post_comments.comment_content, post_comments.created_at, post_comments.updated_at')

				->limit('5')
				->from('post_comments')
				->join('register_users', 'register_users.id = post_comments.user_id', 'left')
				->where('post_comments.id', $comment_id)
				->order_by('created_at', 'DESC')
				->group_by('id');
				
			$query = $this->db->get();

			if ($query->num_rows() > 0) {

				return $query->row();

			} else {

				return array();
			}
		}

		public function get_post_list($data)
		{
			$this->db->select('rent_post.*, area.name as area_name, post_type.name as type_name, user.firstname')

				->from('rent_post')
				->join('post_type' , 'post_type.id = rent_post.type_id', 'left')
				->join('area' , 'area.id = rent_post.area', 'left')
				->join('user' , 'user.id = rent_post.insert_by', 'left')
				->where('rent_post.approved', 1)
				->order_by('rent_post.id', 'DESC')
				->group_by('rent_post.id');

			if(($data['area']) != ''){

				$this->db->where('area.name', $data['area']);
			}
			if(($data['type']) != ''){

				$this->db->where('rent_post.type_id', $data['type']);
			}

			if(($data['rent_min']) != ''){

				$this->db->where('rent_post.rent >=', $data['rent_min']);
			}

			if(($data['rent_max']) != ''){

				$this->db->where('rent_post.rent <=', $data['rent_max']);
			}

			if(($data['seat_no']) != ''){

				$this->db->where('rent_post.seat_no >=', $data['seat_no']);
			}

			if(($data['bed_no']) != ''){

				$this->db->where('rent_post.bed_no', $data['bed_no']);
			}

			if(($data['floor']) != ''){

				$this->db->where('rent_post.floor', $data['floor']);
			}

			if(($data['keywords']) != ''){

				$this->db->like('LOWER(rent_post.description)', $data['keywords']);
				$this->db->or_like('LOWER(rent_post.address)', $data['keywords']);
			}

			if(($data['flat_size_min']) != ''){

				$this->db->where('rent_post.flat_size >=', $data['flat_size_min']);
			}

			if(($data['flat_size_max']) != ''){

				$this->db->where('rent_post.flat_size <=', $data['flat_size_max']);
			}

			
			
			$result = $this->db->get();

			if($result->num_rows() > 0){

				return $result->result();

			} else {

				return array();
			}
		}

		public function get_post_details($id)
		{
			$this->db->select('rent_post.*, area.name as area_name, post_type.name as type_name, user.firstname')

				->from('rent_post')
				->join('post_type' , 'post_type.id = rent_post.type_id', 'left')
				->join('area' , 'area.id = rent_post.area', 'left')
				->join('user' , 'user.id = rent_post.insert_by', 'left')
				->where('rent_post.id', $id)
				->order_by('rent_post.id', 'DESC')
				->group_by('rent_post.id');

			$result = $this->db->get();

			if($result->num_rows() > 0){

				return $result->row();

			} else {

				return 0;
			}
		}

		

		
		

	}
	
?>

