<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin123 extends CI_Controller {
	
	public function index()
	{
		$this->load->helper(array('form'));
		
		$data['web']=$this->db->get('web_profile')->row();
		
		$this->load->view('admin123/login',$data);
	}
	public function dashboard()
	{
		$this->load->helper(array('form'));
		
		$data['web']=$this->db->get('web_profile')->row();
		$data['category']=$this->db->get('category')->result();
		
		$data['sponsor']=$this->db->where('status',1);
		$data['sponsor']=$this->db->get('data_productsponsor')->result();
		
		$this->load->view('admin123/index',$data);
	}
	public function product()
	{
		$this->load->helper(array('form'));
				
		$data['web']=$this->db->get('web_profile')->row();
		
		$data['category']=$this->db->get('category')->result();
		
		$data['product']=$seller=$this->db->join('data_seller', 'data_seller.idseller = data_product.idseller');
		$data['product']=$seller=$this->db->join('data_pasar', 'data_pasar.id_pasar = data_seller.idpasar');
		$data['product']=$this->db->get('data_product')->result();
		
		$this->load->view('admin123/product',$data);
	}
	public function seller()
	{
		$this->load->helper(array('form'));
				
		$data['produksponsor']=$this->db->limit(3);
		$data['produksponsor']=$this->db->get('data_productsponsor')->result();
		$data['web']=$this->db->get('web_profile')->row();
		
		$data['category']=$this->db->get('category')->result();
		
		$data['seller']=$seller=$this->db->join('data_login', 'data_login.idseller = data_seller.idseller');
		$data['seller']=$this->db->get('data_seller')->result();
		
		$this->load->view('admin123/seller',$data);
	}
	public function transaction()
	{
		$this->load->helper(array('form'));
				
		$data['produksponsor']=$this->db->limit(3);
		$data['produksponsor']=$this->db->get('data_productsponsor')->result();
		$data['web']=$this->db->get('web_profile')->row();
		
		$data['category']=$this->db->get('category')->result();
		
		$data['product']=$seller=$this->db->join('data_seller', 'data_seller.idseller = data_product.idseller');
		$data['product']=$seller=$this->db->join('data_pasar', 'data_pasar.id_pasar = data_seller.idpasar');
		$data['product']=$this->db->where('idcategory',$this->uri->segment(3));
		$data['product']=$this->db->get('data_product')->result();
		
		$this->load->view('admin123/transaksi',$data);
	}
	public function pasar()
	{
		$this->load->helper(array('form'));
				
		$data['market']=$this->db->get('data_pasar')->result();
		$data['web']=$this->db->get('web_profile')->row();
		
		$this->load->view('admin123/market',$data);
	}
	
	public function detail()
	{
		$data['category']=$this->db->get('category')->result();
		
		$data['product']=$seller=$this->db->join('data_seller', 'data_seller.idseller = data_product.idseller');
		$data['product']=$seller=$this->db->join('data_pasar', 'data_pasar.id_pasar = data_seller.idpasar');
		$data['product']=$this->db->where('idproduct',$this->uri->segment(3));
		$data['product']=$this->db->get('data_product')->row();
		
		$data['web']=$this->db->get('web_profile')->row();
		
		$this->load->view('front/detil',$data);
	}
	public function bukatoko()
	{
		$data['web']=$this->db->get('web_profile')->row();
		
		$this->load->view('front/daftar',$data);
	}

	public function produksponsor()
	{
		$this->load->helper(array('form'));
		
		$data['product']=$seller=$this->db->join('data_sponsor', 'data_sponsor.idsponsor = data_productsponsor.idsponsor');
		$data['product']=$this->db->get('data_productsponsor')->result();
		
		$data['web']=$this->db->get('web_profile')->row();
		
		$this->load->view('Admin123/product_sponsor',$data);
	}
}
