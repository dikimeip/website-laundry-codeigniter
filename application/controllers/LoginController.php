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
		echo "Halaman Login";
	}


}
