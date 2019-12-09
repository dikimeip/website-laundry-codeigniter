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

}