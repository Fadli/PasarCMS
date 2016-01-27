<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toko extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('logged_in'))
	   {
		 $session_data = $this->session->userdata('logged_in');
		 $data['idseller'] = $session_data['idseller'];
		 
		 $data['web']=$this->db->get('web_profile')->row();
		 
		 $data['seller'] = $this->db->where('idseller',$data['idseller']);
		 $data['seller'] = $this->db->get('data_seller')->row();
		 
		 $data['product']=$this->db->where('idseller',$data['idseller']);
		 $data['product']=$this->db->get('data_product')->result();
		 
		 $this->load->view('backend/dashboard',$data);
	   }
	   else
	   {
		 //If no session, redirect to login page
		redirect('page/login', 'refresh');
	   }
		
	}
	public function upload_product()
	{
		if($this->session->userdata('logged_in'))
	   {
		 $session_data = $this->session->userdata('logged_in');
		 $data['idseller'] = $session_data['idseller'];
		 
		 $data['web']=$this->db->get('web_profile')->row();
		 
		 $data['seller'] = $this->db->where('idseller',$data['idseller']);
		 $data['seller'] = $this->db->get('data_seller')->row();
		 
		 $data['category']=$this->db->get('category')->result();
		 
		 $this->load->view('backend/upload_product',$data);
	   }
	   else
	   {
		 //If no session, redirect to login page
		redirect('page/login', 'refresh');
	   }
	}
	public function edit_product()
	{
		if($this->session->userdata('logged_in'))
	   {
		 $session_data = $this->session->userdata('logged_in');
		 $data['idseller'] = $session_data['idseller'];
		 
		 $data['web']=$this->db->get('web_profile')->row();
		 
		 $data['seller'] = $this->db->where('idseller',$data['idseller']);
		 $data['seller'] = $this->db->get('data_seller')->row();
		 
		 $data['category']=$this->db->get('category')->result();
		 
		 $data['product']=$this->db->where('idproduct',$this->uri->segment(3));
		 $data['product']=$this->db->where('idseller',$data['idseller']);
		 $data['product']=$this->db->get('data_product')->row();
		 
		 $this->load->view('backend/edit_product',$data);
	   }
	   else
	   {
		 //If no session, redirect to login page
		redirect('page/login', 'refresh');
	   }
	}
	public function profil()
	{
		if($this->session->userdata('logged_in'))
	   {
		 $session_data = $this->session->userdata('logged_in');
		 $data['idseller'] = $session_data['idseller'];
		 
		 $data['pasar']=$this->db->get('data_pasar')->result();
		 
		 $data['web']=$this->db->get('web_profile')->row();
		 
		 $data['seller'] = $this->db->where('idseller',$data['idseller']);
		 $data['seller'] = $this->db->get('data_seller')->row();
		 
		 $this->load->view('backend/profile',$data);
	   }
	   else
	   {
		 //If no session, redirect to login page
		redirect('page/login', 'refresh');
	   }
	}
	public function donasi()
	{
		if($this->session->userdata('logged_in'))
	   {
		 $session_data = $this->session->userdata('logged_in');
		 $data['idseller'] = $session_data['idseller'];
		 
		 $data['web']=$this->db->get('web_profile')->row();
		 
		 $data['seller'] = $this->db->where('idseller',$data['idseller']);
		 $data['seller'] = $this->db->get('data_seller')->row();
		 
		 $this->load->view('backend/tagihan',$data);
	   }
	   else
	   {
		 //If no session, redirect to login page
		redirect('page/login', 'refresh');
	   }
	}
	public function order()
	{
		if($this->session->userdata('logged_in'))
	   {
		 $session_data = $this->session->userdata('logged_in');
		 $data['idseller'] = $session_data['idseller'];
		 
		 $data['web']=$this->db->get('web_profile')->row();
		 
		 $data['seller'] = $this->db->where('idseller',$data['idseller']);
		 $data['seller'] = $this->db->get('data_seller')->row();
		 
		 $this->load->view('backend/pemesanan',$data);
	   }
	   else
	   {
		 //If no session, redirect to login page
		redirect('page/login', 'refresh');
	   }
	}

}
