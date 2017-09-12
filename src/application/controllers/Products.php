<?php

class Products extends CI_Controller{

	public function index($category=NULL, $product=NULL){
		$this->load->helper('text');

		if($category and $product){
			// Show single product
			$data['product'] = $this->product_model->get_product_by_slug($product);

			$this->load->view('templates/header');
			$this->load->view('products/single', $data);
			$this->load->view('templates/footer');
		}elseif ($category and !$product){
			// Show all products in category
			$data['products'] = $this->product_model->get_product_by_category($category);
			$data['category'] = $this->product_model->get_category_by_slug($category);

			$this->load->view('templates/header');
			$this->load->view('products/index', $data);
			$this->load->view('templates/footer');
		}else{
			// Show all products
			$data['products'] = $this->product_model->get_products();

			$this->load->view('templates/header');
			$this->load->view('products/index', $data);
			$this->load->view('templates/footer');
		}
	}

	public function add(){
		$data['categories'] = $this->product_model->get_categories();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/add-product', $data);
		$this->load->view('admin/footer');
	}
}