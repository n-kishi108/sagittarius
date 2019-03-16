<?php
class Index extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('menulist');
	}
	public function index() {
		$data['menu'] = $this->menulist->getMenu('001');
		$this->load->view('template/header');
		$this->load->view('index/index', $data);
		$this->load->view('template/footer');
	}
}
?>
