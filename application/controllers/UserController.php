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
		 	echo "Ok";
		 }
	}

}