<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller {

	public function index()
	{
		$this->db->select("*");
		$res = $this->db->get("member")->result_array();
		$this->load->view('template',array("user"=>$res));
	}

}

/* End of file chat.php */
/* Location: ./application/controllers/chat.php */