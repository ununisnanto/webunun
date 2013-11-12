<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('product_m');
		//tempat load data
	}
	
	function index(){ // control untuk menapilkan data produk dan data kategori
		$data['browse_product']=$this->product_m->tampil(); 
		$data['browse_category']=$this->product_m->tampilcategory();
		$data['admin']="tproduct_v";
		$this->load->view("admin_v",$data);
	}
	
	function cari(){ // control untuk mencari dan menampilkan data produk
		$data['browse_product']=$this->product_m->caridata();
		$data['browse_category']=$this->product_m->tampilcategory();
		$data['admin']="tproduct_v";
        $this->load->view('admin_v',$data);
	}
	
}
