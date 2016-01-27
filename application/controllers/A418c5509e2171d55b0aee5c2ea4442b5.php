<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A418c5509e2171d55b0aee5c2ea4442b5 extends CI_Controller {

	public function bukatoko()
	{
		//dataseller
		$data = array(
		'idseller' => md5($this->input->post('email')),
        'sellername' => $this->input->post('name'),
        'email' => $this->input->post('email'),
		'date' => date('d-m-Y'),
		'avatar' => 'nopic.jpg',
        'status' => 0
		);
		$this->db->insert('data_seller', $data);
		//login
		$data = array(
		'idseller' => md5($this->input->post('email')),
        'email' => $this->input->post('email'),
        'password' => md5($this->input->post('password')),
		'showpassword' => $this->input->post('password'),
        'status' => 0
		);
		$this->db->insert('data_login', $data);
		
		redirect('/page/bukatoko/success');
	}
	public function upload_product()
	{
		$this->load->library('upload');
		
		$config['upload_path'] = './assets/images/product';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '10000000';
		$config['max_width'] = '2024';
		$config['max_height'] = '2768';
		$config['encrypt_name'] = TRUE;
		
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload())
		{
			$data = array(
			'idseller' => $this->input->post('idseller'),
			'idcategory' => $this->input->post('kategori'),
			'product_name' => $this->input->post('nama_produk'),
			'date' => date('d-m-Y'),
			'description' => $this->input->post('diskripsi'),
			'price' => $this->input->post('harga'),
			'stok' => $this->input->post('stok'),
			'picture' => 'nopic.jpg',
			'kondisi' => $this->input->post('kondisi'),
			'publish' => 1
			);
			$this->db->insert('data_product', $data);	
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$temp=$this->upload->data();
			
			$data = array(
			'idseller' => $this->input->post('idseller'),
			'idcategory' => $this->input->post('kategori'),
			'product_name' => $this->input->post('nama_produk'),
			'date' => date('d-m-Y'),
			'description' => $this->input->post('diskripsi'),
			'price' => $this->input->post('harga'),
			'stok' => $this->input->post('stok'),
			'picture' => $temp['file_name'],
			'kondisi' => $this->input->post('kondisi'),
			'publish' => 1
			);
			$this->db->insert('data_product', $data);	

		}
		redirect('/toko/upload_product/sukses');
	}
		public function edit_product()
	{
		$this->load->library('upload');
		
		$config['upload_path'] = './assets/images/product';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '10000000';
		$config['max_width'] = '2024';
		$config['max_height'] = '2768';
		$config['encrypt_name'] = TRUE;
		
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload())
		{
			$data = array(
			'idseller' => $this->input->post('idseller'),
			'idcategory' => $this->input->post('kategori'),
			'product_name' => $this->input->post('nama_produk'),
			'date' => date('d-m-Y'),
			'description' => $this->input->post('diskripsi'),
			'price' => $this->input->post('harga'),
			'stok' => $this->input->post('stok'),
			'kondisi' => $this->input->post('kondisi'),
			'publish' => 1
			);
			$this->db->where('idproduct', $this->input->post('idproduct'));	
			$this->db->update('data_product', $data);	
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$temp=$this->upload->data();
			
			$data = array(
			'idseller' => $this->input->post('idseller'),
			'idcategory' => $this->input->post('kategori'),
			'product_name' => $this->input->post('nama_produk'),
			'date' => date('d-m-Y'),
			'description' => $this->input->post('diskripsi'),
			'price' => $this->input->post('harga'),
			'stok' => $this->input->post('stok'),
			'picture' => $temp['file_name'],
			'kondisi' => $this->input->post('kondisi'),
			'publish' => 1
			);
			$this->db->where('idproduct', $this->input->post('idproduct'));	
			$this->db->update('data_product', $data);	

		}
		redirect('/toko/edit_product/'.$this->input->post('idproduct').'/sukses');
	}
	public function update_profile()
	{
		$this->load->library('upload');
		
		$config['upload_path'] = './assets/images/seller';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100000';
		$config['max_width'] = '2024';
		$config['max_height'] = '2768';
		$config['encrypt_name'] = TRUE;
		
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload())
		{
			$data = array(
			'owner' => $this->input->post('owner'),
			'idpasar' => $this->input->post('pasar'),
			'address' => $this->input->post('address'),
			'phone' => $this->input->post('phone'),
			'WA' => $this->input->post('WA'),
			'BBM' => $this->input->post('BBM'),
			);
			$this->db->where('idseller', $this->input->post('idseller') );
			$this->db->update('data_seller', $data);
			
			//update password
			if($this->input->post('password1')!=""){
				$data = array(
				'password' => md5($this->input->post('password1')),
				'showpassword' => $this->input->post('password1'),
				);
				$this->db->where('idseller', $this->input->post('idseller') );
				$this->db->update('data_login', $data);
			}
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$temp=$this->upload->data();
			
			$data = array(
			'owner' => $this->input->post('owner'),
			'idpasar' => $this->input->post('pasar'),
			'address' => $this->input->post('address'),
			'phone' => $this->input->post('phone'),
			'WA' => $this->input->post('WA'),
			'BBM' => $this->input->post('BBM'),
			'avatar' => $temp['file_name'],
			);
			$this->db->where('idseller', $this->input->post('idseller') );
			$this->db->update('data_seller', $data);	
			
			//update password
			if($this->input->post('password1')!=""){
				$data = array(
				'password' => md5($this->input->post('password1')),
				'showpassword' => $this->input->post('password1'),
				);
				$this->db->where('idseller', $this->input->post('idseller') );
				$this->db->update('data_login', $data);
			}
		}
		redirect('/toko/profil/sukses');
	}
	public function aktifasi()
	{
		$data = array(
				'status' => 1
				);
				$this->db->where('idseller', $this->uri->segment(3) );
				$this->db->update('data_login', $data);
				
		redirect('/page/login/sukses');
	}
	
}
