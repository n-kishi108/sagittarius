<?php
class Index extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}
	public function index() {
		$this->load->view('template/header');
		$this->load->view('index/index');
		$this->load->view('template/footer');
	}
}
?>
