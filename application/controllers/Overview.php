<?php
class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->database();
		$this->load->model("Model_member");
	}
	public function index()
	{
		$data['member']= $this->Model_member->get_member();
        	$data['konten']='home';
        	$this->load->view('layout/penghubung', $data) ;
	}
}
?>