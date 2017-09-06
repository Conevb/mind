<?php

class Cart extends CI_Controller{

	public function index(){
		$this->load->view('templates/header');
		$this->load->view('cart/index');
		$this->load->view('templates/footer');
	}

	public function add(){
		$product = $this->product_model->get_product_by_id($this->input->post('id'));

		$data = array(
			'id' => $product['id'],
			'name' => $product['product_title'],
			'price' => $product['price'],
			'qty' => $this->input->post('qty'),
			'slug' => $product['product_slug']
		);

		if($this->cart->insert($data)){
			echo 'radi';
		}else {
			echo "greska";
		}
	}
}