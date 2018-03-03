<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rate extends MX_Controller {

	public function __construct() {
        parent::__construct();
        $this->m_regular->check();
        $this->lang->load('content_lang', 'indonesia');
    }
    

    public function index()
    {
        $data["list"]         = "";
        $data["title"]        = "EXCHANGE RATE";

        $tmp["content"] = $this->load->view("rate/rate", $data, TRUE);
        $this->load->view('template_admin', $tmp);
    }


}
?>