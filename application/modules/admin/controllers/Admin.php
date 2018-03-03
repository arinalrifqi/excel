<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MX_Controller {

	public function __construct() {
        parent::__construct();
        $this->m_regular->check();
        $this->lang->load('content_lang', 'indonesia');
    }
    

    public function index()
    {
        $data["list"] = "";

        $tmp["content"] = $this->load->view("dashboard", $data, TRUE);
        $tmp["title"]   = "DASHBOARD";

        $this->load->view('template_admin', $tmp);
    }

    public function dashboard()
    {
    	$data["list"] = "";

        $tmp["content"] = $this->load->view("dashboard", $data, TRUE);
        $tmp["title"]   = "DASHBOARD";

        $this->load->view('template_admin', $tmp);
    }
}
?>