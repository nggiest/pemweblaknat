<?php
class Auth extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->model('auth_model');
	}
	public function index()
	{
			$this->load->view('login');
		
	}

	public function login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$q = "SELECT * FROM member WHERE email = '$email'";
		$hasil = $this->db->query($q);
		$result = $hasil->row();
		var_dump($result);
		if ($result) {
			if ($password == $result->password) {
				$this->session->login_status = True;
				$this->session->email = $email;
				$this->session->role = $result->role;

				redirect('memberctrl');
			} else {
				$data['errmsg'] = "Maaf password salah";
				$data['page'] = 'login';
				$this->load->view('login', $data);
			}
		}	else {
			$data['errmsg'] = "Maaf username tidak terdaftar";
			$data['page'] = 'login/form_login';
			$this->load->view('login', $data);
		}
		
	}

	function logout(){
		session_destroy();
		redirect('Auth/index');
	}

}
?>