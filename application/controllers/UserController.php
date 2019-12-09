<?php  


/**
 * 
 */
class UserController extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('ModelLaundry','Models');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
	}
	
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('user/dasboard');
		$this->load->view('template/footer');
	}

	public function user()
	{
		$data['user'] = $this->Models->get_user();
		$data['no']=1;
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('user/pengguna',$data);
		$this->load->view('template/footer');
	}

	public function post_user()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('user/tambah_pengguna');
		$this->load->view('template/footer');
	}

	public function do_post_user()
	{
		 $this->form_validation->set_rules('nama', 'Nama', 'required');
		 $this->form_validation->set_rules('alamat', 'Alamat', 'required');
		 $this->form_validation->set_rules('hp', 'Hp', 'required|max_length[12]|integer');
		 $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		 if ($this->form_validation->run() == false ) {
		 	$this->load->view('template/header');
			$this->load->view('template/menu');
			$this->load->view('user/tambah_pengguna');
			$this->load->view('template/footer');
		 } else {
		 	$data = [
		 		'nama_user' => $this->input->post('nama'),
		 		'alamat_user' => $this->input->post('alamat'),
		 		'hp_user' => $this->input->post('hp'),
		 		'email_user' => $this->input->post('email'),
		 		'ket_user' => 'User'
		 	];
		 	$query = $this->Models->post_user($data);
		 	if ($query) {
		 		$this->session->set_flashdata('success','Tambah data berhasil dilakukan');
		 		redirect('UserController/user');
		 	} else {
		 		$this->session->set_flashdata('success','Tambah Gagal dilakukan');
		 		redirect('UserController/user');
		 	}
		 }
	}

	public function edit_user($id)
	{
		$data['user'] = $this->Models->get_id_user($id);
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('user/edit_pengguna',$data);
		$this->load->view('template/footer');
	}

	public function do_edituser()
	{
		$data = [
		 		'nama_user' => $this->input->post('nama'),
		 		'alamat_user' => $this->input->post('alamat'),
		 		'hp_user' => $this->input->post('hp'),
		 		'email_user' => $this->input->post('email'),
		 		'ket_user' => $this->input->post('ket')
		 	];
		$id = $this->input->post('id');

		$query = $this->Models->edit_user($data,$id);
		if ($query) {
			$this->session->set_flashdata('success','Edit data berhasil dilakukan');
		 	redirect('UserController/user');
		} else {
			$this->session->set_flashdata('success','Edit data Gagal dilakukan');
		 	redirect('UserController/user');
		}
	}

	public function cari_user()
	{
		$data['user'] = $this->Models->cari_user();
		$data['no']=1;
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('user/pengguna',$data);
		$this->load->view('template/footer');
	}

}