<?php  


class ModelLaundry extends CI_Model
{
	public function Loginuser($email,$password)
	{
		return $this->db->get_where('karyawan',array(
			'username_karyawan' => $email,
			'password_karyawan' => $password,
			'active_karyawan'	=> 1
		))->result_array();
	}

	public function LoginAdmin($email,$password)
	{
		return $this->db->get_where('admin',array(
			'email_admin' => $email,
			'password_admin' => $password
		))->result_array();
	}

	public function get_user()
	{
		$this->db->order_by('nama_user', 'DESC');
		return $this->db->get('user')->result_array();
	}

	public function post_user($data)
	{
		return $this->db->insert('user',$data);
	}

	public function get_id_user($id)
	{
		return $this->db->get_where('user',['id_user' => $id])->row_array();
	}

	public function edit_user($data,$id)
	{
		$this->db->where('id_user',$id);
		return $this->db->update('user',$data);
	}

	public function cari_user()
	{
		$data = $this->input->post('cari');
		$this->db->select('*');
		$this->db->from('user');
		$this->db->like('nama_user',$data);
		return $this->db->get()->result_array();
	}

	public function get_paket()
	{
		return $this->db->get('paket')->result_array();
	}

	public function post_paket($data)
	{
		return $this->db->insert('paket',$data);
	}

	public function get_id_paket($id)
	{
		return $this->db->get_where('paket',['id_paket' => $id])->row_array();
	}

	public function edit_paket($id,$data)
	{
		$this->db->where('id_paket',$id);
		return $this->db->update('paket',$data);
	}

	public function delete_paket($id)
	{
		$this->db->where('id_paket',$id);
		return $this->db->delete('paket');
	}

	public function search_paket($cari)
	{
		$this->db->select('*');
		$this->db->from('paket');
		$this->db->like('nama_paket',$cari);
		return $this->db->get()->result_array();
	}

	public function paket_active()
	{
		return $this->db->get_where('paket',['active_paket' => 'Active'])->result_array();
	}

	public function input_transaksi($data)
	{
		return $this->db->insert('transaksi',$data);
	}

	public function get_alltrans()
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('user','user.id_user = transaksi.id_user');
		$this->db->join('paket','paket.id_paket = transaksi.id_paket');
		$this->db->order_by('id_transaksi', 'DESC');
		return $this->db->get()->result_array();
	}

	public function get_id_trans($id)
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('user','user.id_user = transaksi.id_user');
		$this->db->join('paket','paket.id_paket = transaksi.id_paket');
		$this->db->where('id_transaksi',$id);
		return $this->db->get()->row_array();
	}

	public function edit_transaksi($id,$data)
	{
		$this->db->where('id_transaksi',$id);
		return $this->db->update('transaksi',$data);
	}

	public function delete_transaksi($id)
	{
		$this->db->where('id_transaksi',$id);
		return $this->db->delete('transaksi');
	}

	public function search_trans($key)
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->like('tanggal_masuk_transaksi',$key);
		return $this->db->get()->result_array();
	}

}