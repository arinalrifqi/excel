<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends MX_Controller {

	public function __construct() {
        parent::__construct();
        $this->m_regular->check();
        $this->lang->load('content_lang', 'indonesia');
    }
    

    public function index()
    {
        $data["list"] = $this->m_global->getdata("user",array(),"","","user_name");

        $tmp["content"] = $this->load->view("transaction/home", $data, TRUE);
        $tmp["title"]   = "ADMIN";

        $this->load->view('template_admin', $tmp);
    }

}
?>