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
		$this->form_validation->set_rules('ket','Keterangan','required');
		if ($this->form_validation->run() == false) {
			$this->load->view('template/header');
			$this->load->view('template/menuadmin');
			$this->load->view('admin/add_paket');
			$this->load->view('template/footer');
		} else {
			$data = [
				'nama_paket' => $this->input->post('nama'),
				'tanggal_paket' => date('Y-m-d'),
				'keterangan_paket' => $this->input->post('ket'),
				'active_paket' => 'Active'
			];

			$insert = $this->Models->post_paket($data);
			if ($insert) {
				$this->session->set_flashdata('success','menambahkan paket berhasil');
				redirect('AdminController/paket');
			} else {
				$this->session->set_flashdata('success','menambahkan paket gaga;');
				redirect('AdminController/paket');
			}
		}
	}

	public function edit_paket($id)
	{
		$data['paket'] = $this->Models->get_id_paket($id);
		$this->load->view('template/header');
		$this->load->view('template/menuadmin');
		$this->load->view('admin/edit_paket',$data);
		$this->load->view('template/footer');
	}

	public function do_edit_paket()
	{
		$id = $this->input->post('id');
		$data = [
			'nama_paket' => $this->input->post('nama'),
			'keterangan_paket' => $this->input->post('ket'),
			'active_paket' => $this->input->post('status')
		];

		$update = $this->Models->edit_paket($id,$data);

		if ($update) {
			$this->session->set_flashdata('success','update paket berhasil');
			redirect('AdminController/paket');
		} else {
			$this->session->set_flashdata('success','update paket gagal');
			redirect('AdminController/paket');
		}

	}

	public function delete_paket($id)
	{
		$del = $this->Models->delete_paket($id);
		if ($del) {
			$this->session->set_flashdata('success','hapus paket berhasil');
			redirect('AdminController/paket');
		} else {
			$this->session->set_flashdata('success','hapus paket gagal');
			redirect('AdminController/paket');
		}
	}


	public function cari_paket()
	{
		$cari = $this->input->post('cari');
		$data['pakets'] = $this->Models->search_paket($cari);
		$data['no'] = 1;
		if (count($data['pakets']) > 0 ) {
			$this->load->view('template/header');
			$this->load->view('template/menuadmin');
			$this->load->view('admin/promo',$data);
			$this->load->view('template/footer');
		} else {
			$this->session->set_flashdata('success','data paket tidak ditemukan');
			redirect('AdminController/paket');
		}
	
	}

	public function transaksi()
	{
		$data['trans'] = $this->Models->get_alltrans();
		$data['no'] =1;
		$this->load->view('template/header');
		$this->load->view('template/menuadmin');
		$this->load->view('admin/transaksi',$data);
		$this->load->view('template/footer');
	}

	public function detail_trans($id)
	{
		$data['trans'] = $this->Models->get_id_trans($id);
		//var_dump($data['trans']);
		$this->load->view('template/header');
		$this->load->view('template/menuadmin');
		$this->load->view('admin/detail_transaksi',$data);
		$this->load->view('template/footer');
	}

	public function hapus_trans($id)
	{
		$this->Models->delete_transaksi($id);
		$this->session->set_flashdata('Success','Data success deleted');
		redirect('AdminController/transaksi');
	}

	public function cari_trans()
	{
		$key = $this->input->post('cari');
		$data['trans'] = $this->Models->search_trans($key);
		$data['no'] =1;
		$this->load->view('template/header');
		$this->load->view('template/menuadmin');
		$this->load->view('admin/transaksi',$data);
		$this->load->view('template/footer');
	}

	public function pelanggan()
	{
		// $data['trans'] = $this->Models->get_alltrans();
		// $data['no'] =1;
		$this->load->view('template/header');
		$this->load->view('template/menuadmin');
		$this->load->view('admin/pelanggan');
		$this->load->view('template/footer');
	}


	
}