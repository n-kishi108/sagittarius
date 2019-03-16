<?php
class Insert_data extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}
	public function insert($array) {
		if(count(array_filter($array)) == 3) {
		$mysqli = new mysqli('localhost', 'root', '', 'sagittarius01');
		$sql = "INSERT INTO `menu` (`shop_id`,`menu`,`price`) VALUES ('".$array['id']."', '".$array['menu']."', '".$array['price']."')";
		$result = $mysqli->query($sql);
		return;
		}
	}
}
 ?>
