<?php
class Setting extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}
	public function index() {
		$array = array(
			'id' => $_POST['shop_id'],
			'menu' => $_POST['menu'],
			'price' => $_POST['price']
		);
		$this->load->model('insert_data');
		$this->insert_data->insert($array);
	}
}
 ?>
