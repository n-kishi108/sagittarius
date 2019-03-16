<?php
class Menulist extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}
	public function getMenu($shop_id) {
		$mysqli = new mysqli('localhost', 'root', '', 'sagittarius01');
		$sql = "SELECT * FROM `menu` WHERE `shop_id`='".$shop_id."'";
		$result = $mysqli->query($sql);
		return $result;
	}
}
 ?>
