<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {

        parent::__construct();

        date_default_timezone_set("Asia/Dhaka");
    }

    //login
	public function index()
	{
		if (isset($_SESSION['user_auth'])) {
            if ($_SESSION['user_auth'] == true) {
                redirect('home', 'refresh');
            }
        }
		$data['activeMenu'] = 'login';
		$this->load->view('login_view', $data);
	}
    //user login checking
	public function login_validation()
	{
        $email    = $this->input->post('email');
        $password = $this->input->post('password');
        if ($this->input->post('email') && $this->input->post('password')) {
            $this->db->where('password', sha1($password));
            $this->db->group_start()
                    ->where('email', $email)
                    ->or_where('user_name', $email)
                    ->group_end();
            $savedLoginQuery = $this->db->get('register_users');
            $user = $savedLoginQuery->num_rows();
            if ($user > 0) {

                $this->session->set_userdata('user_auth', true);
                $this->session->set_userdata('login_name', $email);
                $this->session->set_userdata('user_id', $savedLoginQuery->row()->id);
                $this->session->set_userdata('user_name', $savedLoginQuery->row()->user_name);
                $this->session->set_userdata('user_first_name', $savedLoginQuery->row()->first_name);
                $this->session->set_userdata('user_last_name', $savedLoginQuery->row()->last_name);
                $this->session->set_userdata('user_full_name', $savedLoginQuery->row()->full_name);
                $this->session->set_userdata('user_profile_photo', $savedLoginQuery->row()->profile_photo);
                redirect('login', 'refresh');
            }
            else {
                $this->session->set_flashdata('message', 'Login Failed !');
                redirect('login', 'refresh');
            }
        } else {
            $this->session->set_flashdata('message', 'Login Failed !');
            redirect('login', 'refresh');
        }
    }

    //user logout
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login', 'refresh');
    }

    //new user registration
    public function registration()
    {
    	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    		$user_data['first_name']  = $this->input->post('first_name');
    		$user_data['last_name']   = $this->input->post('last_name');
            $user_data['full_name']   = $user_data['first_name'].' '.$user_data['last_name'];
    		$user_data['email']       = $this->input->post('email');
    		$user_data['password']    = sha1($this->input->post('password'));
    		$day                      = $this->input->post('day');
    		$month                    = $this->input->post('month');
    		$year                     = $this->input->post('year');
    		$dob                      = $year.'-'.$month.'-'.$day;
            $user_data['dob']         = date('Y-m-d', strtotime($dob));
    		$user_data['gender']      = $this->input->post('gender');
    		$user_data['city']        = $this->input->post('city');
    		$user_data['country']     = $this->input->post('country');
            $user_data['created_at']  = date('Y-m-d H:i');
    		$add_user = $this->db->insert('register_users', $user_data);
    		$last_id  = $this->db->insert_id();
    		if ($add_user) {
    			$this->session->set_userdata('user_auth', true);
                $this->session->set_userdata('user_id', $last_id);
                $this->session->set_userdata('user_first_name', $user_data['first_name']);
                $this->session->set_userdata('user_last_name', $user_data['last_name']);
                $this->session->set_userdata('user_full_name', $user_data['full_name']);
                $this->session->set_userdata('user_profile_photo', $user_data['last_name']);
                redirect('login', 'refresh');
    		} else {
    			redirect('login', 'refresh');
    		}
    	} else {
    		redirect('login', 'refresh');

    	}
    }

	
}