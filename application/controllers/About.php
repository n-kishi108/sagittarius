<?php
	class About extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->helper('url');
		}
		public function index() {
			$this->load->view('template/header');
			$this->load->view('about/index');
			$this->load->view('template/footer');
		}
	}
?>
