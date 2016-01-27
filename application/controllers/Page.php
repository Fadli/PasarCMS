<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
	
	public function index()
	{
		$this->load->helper(array('form'));
		
		$data['pasar']=$this->db->get('data_pasar')->result();
		$data['web']=$this->db->get('web_profile')->row();
		$data['category']=$this->db->get('category')->result();
		
		$data['sponsor']=$this->db->where('status',1);
		$data['sponsor']=$this->db->get('data_productsponsor')->result();
		
		$this->load->view('front/index',$data);
	}
	public function Category()
	{
		$this->load->helper(array('form'));
				
		$data['pasar']=$this->db->get('data_pasar')->result();
		$data['produksponsor']=$this->db->limit(1);
		$data['produksponsor']=$this->db->order_by('idproduct','random');
		$data['produksponsor']=$this->db->get('data_productsponsor')->result();
		
		$data['web']=$this->db->get('web_profile')->row();
		
		$data['category']=$this->db->where('idkategori',$this->uri->segment(3));
		$data['category']=$this->db->get('data_subkategori')->result();
		
		$data['product']=$seller=$this->db->join('data_seller', 'data_seller.idseller = data_product.idseller');
		$data['product']=$seller=$this->db->join('data_pasar', 'data_pasar.id_pasar = data_seller.idpasar');
		$data['product']=$this->db->order_by('idproduct','random');
		$data['product']=$this->db->where('idcategory',$this->uri->segment(3));
		$data['product']=$this->db->get('data_product')->result();
		
		$data['keyword']=$this->uri->segment(4);
		
		$this->load->view('front/kategori',$data);
	}
	public function search()
	{
		$this->load->helper(array('form'));
				
		$data['pasar']=$this->db->where('id_pasar',$this->input->post('pasar'));
		$data['pasar']=$this->db->get('data_pasar')->row();
		
		$data['produksponsor']=$this->db->limit(1);
		$data['produksponsor']=$this->db->order_by('idproduct','random');
		$data['produksponsor']=$this->db->get('data_productsponsor')->result();
		$data['web']=$this->db->get('web_profile')->row();
		
		$data['category']=$this->db->order_by('idsub','random');
		$data['category']=$this->db->limit(10);
		$data['category']=$this->db->get('data_subkategori')->result();
		
		$data['kategori']=$this->db->get('category')->result();
		
		$data['keyword']=$this->input->post('key');
		
		if($this->input->post('pasar')!="0") 
		{
				
		$data['product']=$seller=$this->db->join('data_seller', 'data_seller.idseller = data_product.idseller');
		$data['product']=$seller=$this->db->join('data_pasar', 'data_pasar.id_pasar = data_seller.idpasar');
		$data['product']=$this->db->order_by('idproduct','random');
		$data['product']=$this->db->where('idpasar', $this->input->post('pasar')); 
		$data['product']=$this->db->get('data_product')->result();
		
		$this->load->view('front/pasar',$data);
		}
		else
		{
					
		$data['product']=$seller=$this->db->join('data_seller', 'data_seller.idseller = data_product.idseller');
		$data['product']=$seller=$this->db->join('data_pasar', 'data_pasar.id_pasar = data_seller.idpasar');
		$data['product']=$this->db->order_by('idproduct','random');
		$data['product']=$this->db->like('product_name', $this->input->post('key')); 
		$data['product']=$this->db->get('data_product')->result();
		
		$this->load->view('front/kategori',$data);
		}
	}
	public function Category_grid()
	{
		$this->load->helper(array('form'));
				
		$data['pasar']=$this->db->get('data_pasar')->result();
		$data['produksponsor']=$this->db->limit(3);
		$data['produksponsor']=$this->db->get('data_productsponsor')->result();
		$data['web']=$this->db->get('web_profile')->row();
		
		$data['category']=$this->db->get('category')->result();
		
		$data['product']=$seller=$this->db->join('data_seller', 'data_seller.idseller = data_product.idseller');
		$data['product']=$seller=$this->db->join('data_pasar', 'data_pasar.id_pasar = data_seller.idpasar');
		$data['product']=$this->db->order_by('idproduct','random');
		$data['product']=$this->db->where('idcategory',$this->uri->segment(3));
		$data['product']=$this->db->get('data_product')->result();
		
		$this->load->view('front/category_grid', $data);
	}
	public function detail()
	{
		$data['category']=$this->db->get('category')->result();
		
		$data['product']=$seller=$this->db->join('data_seller', 'data_seller.idseller = data_product.idseller');
		$data['product']=$seller=$this->db->join('data_pasar', 'data_pasar.id_pasar = data_seller.idpasar');
		$data['product']=$this->db->where('idproduct',$this->uri->segment(3));
		$data['product']=$this->db->get('data_product')->row();
		
		$data['sponsor']=$this->db->where('status',1);
		$data['sponsor']=$this->db->limit(3);
		$data['sponsor']=$this->db->get('data_productsponsor')->result();
		
		$data['web']=$this->db->get('web_profile')->row();
		
		$this->load->view('front/detil',$data);
	}
		public function productsponsor()
	{
		$data['category']=$this->db->get('category')->result();
		
		$data['product']=$this->db->where('idproduct',$this->uri->segment(3));
		$data['product']=$this->db->get('data_productsponsor')->row();
		
		$data['sponsor']=$this->db->where('status',1);
		$data['sponsor']=$this->db->limit(3);
		$data['sponsor']=$this->db->get('data_productsponsor')->result();
		
		$data['web']=$this->db->get('web_profile')->row();
		
		$this->load->view('front/detilproduksponsor',$data);
	}
	public function bukatoko()
	{
		$data['web']=$this->db->get('web_profile')->row();
		
		$this->load->view('front/daftar',$data);
	}
	public function login()
	{
		$this->load->helper(array('form'));
		
		$data['web']=$this->db->get('web_profile')->row();
		$this->load->view('front/login',$data);
	}
	public function about()
	{
		$this->load->helper(array('form'));
		
		$data['web']=$this->db->get('web_profile')->row();
		$this->load->view('front/about',$data);
	}
	public function contact()
	{
		$this->load->helper(array('form'));
		
		$data['web']=$this->db->get('web_profile')->row();
		$this->load->view('front/contact',$data);
	}
}
