<?php 

class LoginController extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('ModelLaundry','Models');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function DoLogin()
	{
		$level = $this->input->post('level');
		if ($level == '0') {
			echo "KARYAWAN";
		} elseif ($level == '1') {
			echo "ADMIN";
		} else {
			echo "NotShow";
		}
	}


}
