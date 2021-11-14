<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	function __construct() {

        parent::__construct();

        $this->load->model('SiteModel');
        $this->load->helper("url");
		$this->load->helper("text");

        date_default_timezone_set("Asia/Dhaka");
    }

    //home page view
	public function index()
	{
		$data = array();

		$data['search']['area'] = '';
		$data['search']['type'] = '';
		$data['search']['rent_min'] = '';
		$data['search']['rent_max'] = '';
		$data['search']['seat_no'] = '';
		$data['search']['keywords'] = '';
		$data['search']['bed_no'] = '';
		$data['search']['flat_size_min'] = '';
		$data['search']['flat_size_max'] = '';
		$data['search']['floor'] = '';

		if($_SERVER['REQUEST_METHOD'] == 'POST'){

			if($this->input->post('area', true)){
				$data['search']['area'] = $this->input->post('area', true);
			}

			// echo "<pre>";
			// print_r($data['search']['area']);
			// exit;

			if($this->input->post('type', true)){
				$data['search']['type'] = $this->input->post('type', true);
			}

			if($this->input->post('rent_min', true)){
				$data['search']['rent_min'] = $this->input->post('rent_min', true);
			}

			if($this->input->post('rent_max', true)){
				$data['search']['rent_max'] = $this->input->post('rent_max', true);
			}

			if($this->input->post('seat_no', true)){
				$data['search']['seat_no'] = $this->input->post('seat_no', true);
			}

			if($this->input->post('keywords', true)){
				$data['search']['keywords'] = strtolower($this->input->post('keywords', true));
			}

			if($this->input->post('bed_no', true)){
				$data['search']['bed_no'] = $this->input->post('bed_no', true);
			}

			if($this->input->post('flat_size_min', true)){
				$data['search']['flat_size_min'] = $this->input->post('flat_size_min', true);
			}

			if($this->input->post('flat_size_max', true)){
				$data['search']['flat_size_max'] = $this->input->post('flat_size_max', true);
			}

			if($this->input->post('floor', true)){
				$data['search']['floor'] = $this->input->post('floor', true);
			}
		}


 		$data['total_client']   = $this->db->count_all('user');
 		$data['total_post']   = $this->db->count_all('rent_post');
 		$data['total_wishlist']   = $this->db->count_all('wishlist');
 		$data['total_area']   = $this->db->count_all('area');
 		
		$data['rent_post']  = $this->SiteModel->get_post_list($data['search']);
		$data['post_type']  = $this->db->get('post_type')->result();
		$data['area']       = $this->db->get('area')->result();

        $data['title']      = 'home';
        $data['activeMenu'] = 'home';
 		$data['content']    = 'index';

		$this->load->view('welcome', $data);
	}

	public function about()
	{
		
		$data['title']      = 'About';
		$data['activeMenu'] = 'about';
		$data['content']    = 'about';

		$this->load->view('welcome', $data);
	}

	public function contact()
	{
		
		$data['title']      = 'Contact';
		$data['activeMenu'] = 'contact';
		$data['content']    = 'contact';

		$this->load->view('welcome', $data);
	}

	
	public function details($param)
	{
		$data['post_info']  = $this->db->where('id', $param)->get('rent_post');

		if($data['post_info']->num_rows() > 0){

			$data['post_info']  = $this->SiteModel->get_post_details($param);
			$data['relative_post']  = $this->db->select('rent_post.*, area.name as area_name')->limit(3)->order_by('rent_post.insert_time', 'RANDOM')->join('area', 'area.id = rent_post.area', 'left')->where('rent_post.approved', 1)->get('rent_post')->result();

			$data['title']      = 'details';
			$data['activeMenu'] = 'details';
			$data['content']    = 'details';

		} else{

			$data['title']      = 'Not Found';
			$data['activeMenu'] = 'not_found';
			$data['content']    = 'page_not_found';

		}
		
		

		$this->load->view('welcome', $data);
	}

	public function login_validation() {

        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $remember = $this->input->post('remember');

        if ($remember == "on") {

            $this->db->where('password', sha1($password));
            $this->db->group_start()
                    ->where('status', 1)
                    ->where('email', $email)
                    ->or_where('username', $email)
                    ->group_end();
            $savedLoginQuery = $this->db->get('user');
            $user = $savedLoginQuery->num_rows();

            if ($user > 0) {

                $this->session->set_userdata('user_auth', true);

                $this->session->set_userdata('loginname', $email);
                $this->session->set_userdata('userid', $savedLoginQuery->row()->id);
                $this->session->set_userdata('username', $savedLoginQuery->row()->username);
                $this->session->set_userdata('username_first', $savedLoginQuery->row()->firstname);
                $this->session->set_userdata('username_last', $savedLoginQuery->row()->lastname);

                $this->session->set_userdata('userType', $savedLoginQuery->row()->userType);
                $this->session->set_userdata('userPhoto', $savedLoginQuery->row()->photo);

                $this->session->set_flashdata('message', 'Login Successful');
                redirect('/', 'refresh');
            } else {

                //flash data wrong username or password
                $this->session->set_flashdata('message', 'Login Failed !');
                redirect('/', 'refresh');
            }
        } else {
            $this->session->set_flashdata('message', 'Login Failed !');
            redirect('/', 'refresh');
        }
    }

    public function registration() {

        $firstname = $this->input->post('firstname');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $accept = $this->input->post('accept');

        $saveData['firstname']       = $firstname;
		$saveData['lastname']        = '';
		$saveData['username']        = $username;
		$saveData['email']           = $email;
		$saveData['phone']           = '';
		$saveData['password']        = sha1($password);
		$saveData['address']         = '';
		$saveData['roadHouse']       = '';
		$saveData['userType']        = 'user';
		$saveData['photo']           = 'assets/images/profile-pic.png';

        if ($accept == "on") {

        	$check_user  = $this->db->where('username', $username)->get('user')->num_rows();
        	$check_email = $this->db->where('email', $email)->get('user')->num_rows();

            if ($check_user > 0 || $check_email > 0) {
            	//flash data wrong username or password
                $this->session->set_flashdata('message', 'User Already Exist!!!');
                redirect('/', 'refresh');
                
            } else {

            	$this->db->insert('user', $saveData);
            	$id = $this->db->insert_id();
            	$savedLoginQuery = $this->db->where('id', $id)->get('user');

            	$this->session->set_userdata('user_auth', true);

                $this->session->set_userdata('loginname', $email);
                $this->session->set_userdata('userid', $savedLoginQuery->row()->id);
                $this->session->set_userdata('username', $savedLoginQuery->row()->username);
                $this->session->set_userdata('username_first', $savedLoginQuery->row()->firstname);
                $this->session->set_userdata('username_last', $savedLoginQuery->row()->lastname);

                $this->session->set_userdata('userType', $savedLoginQuery->row()->userType);
                $this->session->set_userdata('userPhoto', $savedLoginQuery->row()->photo);

                $this->session->set_flashdata('message', 'Registration Successful');
                redirect('/', 'refresh');

                
            }
        } else {
            $this->session->set_flashdata('message', 'Registration Failed !');
            redirect('/', 'refresh');
        }
    }

    public function login_status()
    {
    	$status = false;
    	if (isset($_SESSION['user_auth'])) {
	    	if($_SESSION['user_auth'] == true){
	    		$status = true;
	    	}
	    }
    	return $status;
    }

    public function logout() {
        $this->session->sess_destroy();
        $this->session->set_flashdata('message', 'Logout Successful');
        redirect('/', 'refresh');
    }

    public function add_post()
    {
    	if($this->login_status()){

    		$data['post_type']  = $this->db->get('post_type')->result();
			$data['area']       = $this->db->get('area')->result();
 
			$data['title']      = 'Post';
			$data['activeMenu'] = 'post';
    		$data['content']    = 'add_post';


			$this->load->view('welcome', $data);
    	} else {
    		$this->session->set_flashdata('message', 'Please Login to add post!');
    		redirect('/', 'refresh');
    	}
    }
	
	



    public function insert_post()
    {
    	if($_SERVER['REQUEST_METHOD'] == 'POST'){

    		$insert_data['title'] = $this->input->post('title', true);
    		$insert_data['area'] = $this->input->post('area', true);
    		$insert_data['type_id'] = $this->input->post('type_id', true);
    		$insert_data['rent'] = $this->input->post('rent', true);
    		$insert_data['service_charge'] = $this->input->post('service_charge', true);
    		$insert_data['security_deposite'] = $this->input->post('security_deposite', true);
    		$insert_data['flat_release_policy'] = $this->input->post('flat_release_policy', true);
    		$insert_data['description'] = $this->input->post('description', true);
    		$insert_data['address'] = $this->input->post('address', true);
    		$insert_data['seat_no'] = $this->input->post('seat_no', true);
    		$insert_data['bed_no'] = $this->input->post('bed_no', true);
    		$insert_data['bath_no'] = $this->input->post('bath_no', true);
    		$insert_data['flat_size'] = $this->input->post('flat_size', true);
    		$insert_data['floor'] = $this->input->post('floor', true);
    		$insert_data['floor_description'] = $this->input->post('floor_description', true);
    		$insert_data['room_category'] = $this->input->post('room_category', true);
    		$insert_data['facilities'] = $this->input->post('facilities', true);
    		$insert_data['additional_facilities'] = $this->input->post('additional_facilities', true);
    		$insert_data['indoor_facilities'] = $this->input->post('indoor_facilities', true);
    		$insert_data['outdoor_facilities'] = $this->input->post('outdoor_facilities', true);
    		$insert_data['bkash_number'] = $this->input->post('bkash_number', true);
    		$insert_data['nagad_number'] = $this->input->post('nagad_number', true);
    		$insert_data['status'] = 1;
    		
    		$insert_data['approved'] = 0;
    		if($_SESSION['userType'] == 'admin') $insert_data['approved'] = 1;
    		$insert_data['insert_by'] = $_SESSION['userid'];
    		$insert_data['insert_time'] = date('Y-m-d H:i');



    		if (!empty($_FILES["thumb_photo"]['name'])){

				//exta work
				$path_parts                 = pathinfo($_FILES["thumb_photo"]['name']);
				$newfile_name               = preg_replace('/[^A-Za-z]/', "", $path_parts['filename']);
				$dir                        = date("YmdHis", time());
				$config_c['file_name']      = $newfile_name . '_' . $dir;
				$config_c['remove_spaces']  = TRUE;
				$config_c['upload_path']    = 'assets/images/apartment/';
				$config_c['max_size']       = '20000'; //  less than 20 MB
				$config_c['allowed_types']  = 'jpg|png|jpeg|jpg|JPG|JPG|PNG|JPEG';

				$this->load->library('upload', $config_c);
				$this->upload->initialize($config_c);
				if (!$this->upload->do_upload('thumb_photo')) {

				} else {

					$upload_c = $this->upload->data();
					$insert_data['thumb_photo']   = $config_c['upload_path'] . $upload_c['file_name'];
					$this->image_size_fix($insert_data['thumb_photo'], 377, 282);
				}
			}
			// echo "<pre>";
			// print_r($_FILES);
			// exit;

    		if (!empty($_FILES["another_photo"]['name'])){

				//exta work
				$path_parts                 = pathinfo($_FILES["another_photo"]['name']);
				$newfile_name               = preg_replace('/[^A-Za-z]/', "", $path_parts['filename']);
				$dir                        = date("YmdHis", time());
				$config_c['file_name']      = $newfile_name . '_' . $dir;
				$config_c['remove_spaces']  = TRUE;
				$config_c['upload_path']    = 'assets/images/apartment/';
				$config_c['max_size']       = '20000'; //  less than 20 MB
				$config_c['allowed_types']  = 'jpg|png|jpeg|jpg|JPG|JPG|PNG|JPEG';

				$this->load->library('upload', $config_c);
				$this->upload->initialize($config_c);
				if (!$this->upload->do_upload('another_photo')) {

				} else {

					$upload_c = $this->upload->data();
					$insert_data['another_photo']   = $config_c['upload_path'] . $upload_c['file_name'];
					$this->image_size_fix($insert_data['another_photo'], 377, 282);
				}
				
			}

			if (!empty($_FILES["additional_photo"]['name'])){

				//exta work
				$path_parts                 = pathinfo($_FILES["additional_photo"]['name']);
				$newfile_name               = preg_replace('/[^A-Za-z]/', "", $path_parts['filename']);
				$dir                        = date("YmdHis", time());
				$config_c['file_name']      = $newfile_name . '_' . $dir;
				$config_c['remove_spaces']  = TRUE;
				$config_c['upload_path']    = 'assets/images/apartment/';
				$config_c['max_size']       = '20000'; //  less than 20 MB
				$config_c['allowed_types']  = 'jpg|png|jpeg|jpg|JPG|JPG|PNG|JPEG';

				$this->load->library('upload', $config_c);
				$this->upload->initialize($config_c);
				if (!$this->upload->do_upload('additional_photo')) {

				} else {

					$upload_c = $this->upload->data();
					$insert_data['additional_photo']   = $config_c['upload_path'] . $upload_c['file_name'];
					$this->image_size_fix($insert_data['additional_photo'], 377, 282);
				}
				
			}

			
			$add_post = $this->db->insert('rent_post', $insert_data);
				if($add_post){
					$this->session->set_flashdata('message', 'Post successfully inserted');
					redirect('my_post', 'refresh');
				} else{
					$this->session->set_flashdata('message', 'Failed !');
					redirect('add_post', 'refresh');
				}

    	} else{
    		$this->session->set_flashdata('message', 'Wrong Attempt !');
    		redirect('/', 'refresh');

    	}
    }

    public function my_post()
    {
    	if($this->login_status()){
    		
    		$data['post']       = $this->db->order_by('id', 'DESC')->where('insert_by', $_SESSION['userid'])->get('rent_post')->result();
			
 
			$data['title']      = 'My Post';
			$data['activeMenu'] = 'my_post';
    		$data['content']    = 'my_post';


			$this->load->view('welcome', $data);
    	} else {
    		$this->session->set_flashdata('message', 'Wrong Attempt !');
    		redirect('/', 'refresh');
    	}
    }

    public function all_post()
    {
    	if($this->login_status()){
    		
    		$data['post']       = $this->db->order_by('id', 'DESC')->get('rent_post')->result();
			
 
			$data['title']      = 'All Post';
			$data['activeMenu'] = 'all_post';
    		$data['content']    = 'all_post';


			$this->load->view('welcome', $data);
    	} else {
    		$this->session->set_flashdata('message', 'Wrong Attempt !');
    		redirect('/', 'refresh');
    	}
    }

    public function wishlist()
    {
    	if($this->login_status()){
    		
    		$data['wishlist']       = $this->db->select('wishlist.id, wishlist.post_id, wishlist.user_id, rent_post.thumb_photo, rent_post.title, rent_post.rent, rent_post.status, rent_post.insert_time')->join('rent_post', 'rent_post.id = wishlist.post_id', 'left')->order_by('wishlist.id', 'DESC')->where('wishlist.user_id', $_SESSION['userid'])->get('wishlist')->result();
			
 
			$data['title']      = 'Wishlist';
			$data['activeMenu'] = 'wishlist';
    		$data['content']    = 'wishlist';


			$this->load->view('welcome', $data);
    	} else {
    		$this->session->set_flashdata('message', 'Wrong Attempt!');
    		redirect('/', 'refresh');
    	}
    }

    public function wishlist_delete($param)
    {
    	$this->db->where('id', $param)->delete('wishlist');
    	if(true){
    		$this->session->set_flashdata('message', 'Deleted Successfully !');
    		redirect('wishlist', 'refresh');
    	} else{
    		$this->session->set_flashdata('message', 'Delete Failed !');
    		redirect('wishlist', 'refresh');
    	}
    }

    public function post_delete($param)
    {
    	$this->db->where('id', $param)->delete('rent_post');
    	if(true){
    		$this->session->set_flashdata('message', 'Deleted Successfully !');
    		redirect('my_post', 'refresh');
    	} else{
    		$this->session->set_flashdata('message', 'Delete Failed !');
    		redirect('my_post', 'refresh');
    	}
    }

    public function all_post_delete($param)
    {
    	$this->db->where('id', $param)->delete('rent_post');
    	if(true){
    		$this->session->set_flashdata('message', 'Deleted Successfully');
    		redirect('all_post', 'refresh');
    	} else{
    		$this->session->set_flashdata('message', 'Delete  Failed !');
    		redirect('all_post', 'refresh');
    	}
    }

    public function approve($param)
    {
    	$data['check'] = $this->db->where('id', $param)->get('rent_post');
    	if($data['check']->num_rows() > 0){
    		$approved = $data['check']->row()->approved;
    		if($approved == 1){
    			$this->db->where('id', $param)->update('rent_post', array("approved" => 0));
    			$this->session->set_flashdata('message', 'Approved');
    			redirect('all_post', 'refresh');
    		} else {
    			$this->db->where('id', $param)->update('rent_post', array("approved" => 1));
    			$this->session->set_flashdata('message', 'Unapproved');
    			redirect('all_post', 'refresh');
    		}
    	} else{
    		$this->session->set_flashdata('message', 'Wrong Attempt !');
    		redirect('all_post', 'refresh');
    	}
    	
    }

    public function profile()
    {
    	if($this->login_status()){

			$data['title']      = 'Profile';
			$data['activeMenu'] = 'profile';
    		$data['content']    = 'profile';
    		$data['edit_info']  = $this->db->where('id', $_SESSION['userid'])->get('user')->row();
    		// echo "<pre>";
    		// print_r($data['edit_info']);
    		// exit;

			$this->load->view('welcome', $data);
    	} else {
    		$this->session->set_flashdata('message', 'Wrong Attempt !');
    		redirect('/', 'refresh');
    	}
    }

    public function update_profile()
    {
    	if($_SERVER['REQUEST_METHOD'] = 'POST'){
    		$update_data['firstname'] = $this->input->post('firstname', true);

    		if (!empty($_FILES["photo"]['name'])){

				//exta work
				$path_parts                 = pathinfo($_FILES["photo"]['name']);
				$newfile_name               = preg_replace('/[^A-Za-z]/', "", $path_parts['filename']);
				$dir                        = date("YmdHis", time());
				$config_c['file_name']      = $newfile_name . '_' . $dir;
				$config_c['remove_spaces']  = TRUE;
				$config_c['upload_path']    = 'assets/images/';
				$config_c['max_size']       = '20000'; //  less than 20 MB
				$config_c['allowed_types']  = 'jpg|png|jpeg|jpg|JPG|JPG|PNG|JPEG';

				$this->load->library('upload', $config_c);
				$this->upload->initialize($config_c);
				if (!$this->upload->do_upload('photo')) {

				} else {
					

					$upload_c = $this->upload->data();
					$update_data['photo']   = $config_c['upload_path'] . $upload_c['file_name'];
					$this->image_size_fix($update_data['photo'], 225, 225);
				}
				
			}
			// echo "<pre>";
			// print_r($update_data);
			// exit;


			if($this->db->where('id', $_SESSION['userid'])->update('user', $update_data)){
				$savedLoginQuery = $this->db->where('id', $_SESSION['userid'])->get('user');

                
                $this->session->set_userdata('username_first', $savedLoginQuery->row()->firstname);
                $this->session->set_userdata('userPhoto', $savedLoginQuery->row()->photo);
				$this->session->set_flashdata('message', 'Updated Successfully');
				redirect('profile', 'refresh');
			} else {
				$this->session->set_flashdata('message', 'Update Failed !');
				redirect('profile', 'refresh');
			}

    	} else{
    		$this->session->set_flashdata('message', 'Wrong_attempt !');
    		redirect('profile', 'refresh');
    	}
    }


	public function image_size_fix($filename, $width = 600, $height = 400, $destination = '') {
		// Content type
		// header('Content-Type: image/jpeg');
		// Get new dimensions
		list($width_orig, $height_orig) = getimagesize($filename);

		// Output 20 May, 2018 updated below part
		if ($destination == '' || $destination == null)
			$destination = $filename;

		$extention = pathinfo($destination, PATHINFO_EXTENSION);
		if ($extention != "png" && $extention != "PNG" && $extention != "JPEG" && $extention != "jpeg" && $extention != "jpg" && $extention != "JPG") {
 
			return true;
		}
		// Resample 
		$image_p = imagecreatetruecolor($width, $height);
		
		imagealphablending($image_p, false);
        imagesavealpha($image_p, true);
		//$black = imagecolorallocate($image_p, 255, 255, 255);

        // Make the background transparent
        //imagecolortransparent($image_p, $black);

		$image   = imagecreatefromstring(file_get_contents($filename));
		imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);

		

		if ($extention == "png" || $extention == "PNG") {
			imagepng($image_p, $destination);
		} else if ($extention == "jpg" || $extention == "JPG" || $extention == "jpeg" || $extention == "JPEG") {
			imagejpeg($image_p, $destination, 100);
		} else {
			imagepng($image_p, $destination);
		}
		return true;
	}

	//autocomplete search 
  	public function area_search()
    {
        $search_val = strtolower($this->input->post('area', true));

        $search_list = $this->db->where("LOWER(name) LIKE '%$search_val%'")->get('area')->result();
        
        echo json_encode($search_list, JSON_UNESCAPED_UNICODE);
    }

    public function add_wishlist()
    {
    	if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $post_id   = $this->input->post('id', true);
            $wishlist_data['post_id'] = $post_id;
            $wishlist_data['user_id'] = $_SESSION['userid'];
            $wishlist_data['insert_time']  = date('Y-m-d H:i');

            

            if($this->login_status()){
            	$check_wishlist = $this->db->where('post_id', $post_id)->where('user_id', $_SESSION['userid'])->get('wishlist');
            	if($check_wishlist->num_rows() > 0){
            		
                	echo json_encode(['msg'=>'Already Exist!!', 'status'=>1]);
            	} else{
            		$this->db->insert('wishlist', $wishlist_data);
                	echo json_encode(['msg'=>'Successfully Added Wishlist', 'status'=>1]);
            	}

            	// $this->db->insert('wishlist', $wishlist_data);
             //    echo json_encode(['msg'=>'Successfully Added Wishlist', 'status'=>1]);
            } else {
                echo json_encode(['msg'=>'Please Login First!!', 'status'=>0]);

            }
            
        } else {
            echo json_encode(['msg'=>'Worng Attempt!!', 'status'=>2]);
        }
    }

    public function contact_form_submit()
    {
       
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $contact_data['first_name']   = $this->input->post('first_name', true);
            $contact_data['email']        = $this->input->post('email', true);
            $contact_data['subject']      = $this->input->post('subject', true);
            $contact_data['description']  = $this->input->post('description', true);
            $contact_data['insert_time']  = date('Y-m-d H:i');

            $this->db->insert('tbl_contact_form', $contact_data);

            if(true){
                echo json_encode(['msg'=>'Successfully Added', 'status'=>1]);
            } else {
                echo json_encode(['msg'=>'Failed!!', 'status'=>0]);

            }
            
        } else {
            echo json_encode(['msg'=>'Worng Attempt!!', 'status'=>2]);
        }
    }

    public function contact_list()
    {
    	if($this->login_status()){
    		
    		$data['contact_list'] = $this->db->order_by('id', 'DESC')->get('tbl_contact_form')->result();
			
 
			$data['title']      = 'Contact List';
			$data['activeMenu'] = 'contact_list';
    		$data['content']    = 'contact_list';


			$this->load->view('welcome', $data);
    	} else {
    		$this->session->set_flashdata('message', 'Wrong Attempt !');
    		redirect('/', 'refresh');
    	}
    }



	

    

}