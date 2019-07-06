<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Memberctrl extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		$this->load->database();
        $this->load->model("model_member");
        $this->load->library("form_validation");
	}

	 public function index()
	{
		$data['member']=$this->model_member->get_member();
		$data['konten']="home";
		$this->load->view('layout/penghubung',$data);

    }
    
    public function insert()
    {
		$data['konten'] = "createdata";
        $this->load->view('layout/penghubung', $data);
	}
	
	public function view($id_member){
		$this->db->where('id_member', $id_member);
		$data['member'] = $this->db->get('member');
		$data['konten'] = "viewdata";
		$this->load->view('layout/penghubung', $data);
	}
	
    public function insert_member(){
		$data_member['nama_member']= $this->input->post('nama_member');
		$data_member['email']= $this->input->post('email');
		$data_member['password']= $this->input->post('password');
		$data_member['role']=$this->input->post('role');
		$data_member['no_telpon']=$this->input->post('no_telpon');
		$data_member['alamat'] = $this->input->post('alamat');
		//kirim data ke insert Model
		$this->model_member->insert_member($data_member);
		redirect('Memberctrl/index');
	}
	
	public function edit($id){
		$this->db->where('id', $id);
		$data['member'] = $this->db->get('member');
		$data['konten'] = "editdata";
		$this->load->view('layout/penghubung', $data);
		
	}

	public function update()
	{
		$post = $this->input->post();
			$id = $post['id'];
			$nama_member = $post['nama_member'];
			$email = $post['email'];
			$password = $post['password'];
			$role = $post['role'];
			$no_telpon = $post['no_telpon'];
			$alamat = $post['alamat'];
		$this->db->update('member',$post,array('id'=> $post['id']));
		redirect('Memberctrl/index');
		
	}


	public function delete ($id){
		$this->db->where('id', $id);
		$this->db->delete('member');
		
		redirect('Memberctrl/index');
	}
}
?>