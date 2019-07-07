<?php
class Auth extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model('login_model');
	}
	public function index()
	{
			$this->load->view('login');
		
	}

	public function auth(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		if($validate->num_rows()>0){
			$data = $validate->row_array();
			$email = $data['email'];
			$password = $data ['password'];
			$role = $data['role'];
			$sesdata = array(
				'email' => $email,
				'password' =>$password,
				'role' => $role,
				'logged_in'=> TRUE);
			$this->session->set_userdata($sesdata);
		}
	}

	function logout(){
		$this->session->session_destroy();
		redirect('login');
	}

}
?>