<?php

class Product_model extends CI_Model{

	public function get_products(){
		$this->db->join('products', 'products.category_id = p_categories.id');
		$query = $this->db->get('p_categories');
		return $query->result_array();
	}

	public function get_product_by_id($id){
		$this->db->where('id', $id);
		$query = $this->db->get('products');
		return $query->row_array();
	}

	public function get_product_by_slug($slug){
		$this->db->where('product_slug', $slug);
		$this->db->join('p_categories', 'products.category_id = p_categories.id');
		$query = $this->db->get('products');
		return $query->row_array();
	}

	public function get_product_by_category($slug){
		$this->db->where('p_categories.category_slug', $slug);
		$this->db->join('products', 'products.category_id = p_categories.id');
		$query = $this->db->get('p_categories');
		return $query->result_array();
	}

	public function get_category_by_slug($slug){
		$this->db->where('category_slug', $slug);
		$query = $this->db->get('p_categories');
		return $query->row_array();
	}
}