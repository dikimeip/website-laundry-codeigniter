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
		$this->load->library('form_validation');
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

	public function TambahPaket()
	{
		$this->load->view('template/header');
		$this->load->view('template/menuadmin');
		$this->load->view('admin/add_paket');
		$this->load->view('template/footer');
	}

	public function do_paket()
	{
		$this->form_validation->set_rules('nama','Nama','required|max[20]');
		$this->form_validation->set_rules('ket','Keterangan','required|max[100]');
		if ($this->form_validation->run() == false) {
			$this->load->view('template/header');
			$this->load->view('template/menuadmin');
			$this->load->view('admin/add_paket');
			$this->load->view('template/footer');
		} else {
			$data = [
				'nama_paket' => $this->input->post('nama'),
				'tanggal_paket' => date('yyyy-mm-dd'),
				'keterangan_paket' => $this->input->post('ket'),
				'active_paket' => 'Active'
			];

			$insert = $this->Models->post_paket($data);
			if ($insert) {
				$this->session->set_flashdata('success','menambahkan paket berhasil');
				redirect('AdminController/paket');
			}
		}
	}


	
}