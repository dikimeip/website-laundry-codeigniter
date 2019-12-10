<?php  

/**
 * 
 */
class AdminController extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('ModelLaundry','Models');
		$this->load->library('session');
		$this->load->helper('form');
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/menuadmin');
		$this->load->view('admin/dasboard');
		$this->load->view('template/footer');
	}

	public function paket()
	{
		$data['pakets'] = $this->Models->get_paket();
		$data['no'] = 1;
		$this->load->view('template/header');
		$this->load->view('template/menuadmin');
		$this->load->view('admin/promo',$data);
		$this->load->view('template/footer');
	}

	
	
}