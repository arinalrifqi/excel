<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MX_Controller {

	public function __construct() {
        parent::__construct();
        $this->m_regular->check();
        $this->lang->load('content_lang', 'indonesia');
    }
    

    public function index()
    {
        $data["list"] = $this->m_global->getdata("user",array(),"","","user_name");

        $tmp["content"] = $this->load->view("user/home", $data, TRUE);
        $tmp["title"]   = "ADMIN";

        $this->load->view('template_admin', $tmp);
    }

    public function insert()
    {
        $this->load->view("user/insert");
    }

    public function post_insert()
    {
        $cek = $this->m_global->getdata("user",array("user_email"=>$this->input->post("email")));

        // cek jika tidak ada email yg sama maka insert
        if($cek->num_rows() < 1)
        {
            $data_insert    = array(
                "user_name"         => $this->input->post("name"),
                "user_email"        => $this->input->post("email"),
                "user_password"     => md5($this->input->post("password")),
                "user_phone"        => $this->input->post("telp"),
                "user_address"      => $this->input->post("address"),
                "user_date_created" => date('Y-m-d H:i:s'),
                "user_log"          => "insert by ".$this->session->userdata('user_name')
            );
            $this->m_global->insert("user",$data_insert);
            $this->session->set_flashdata('report', valid("Success add new admin"));
        }
        else {
            $this->session->set_flashdata('report', error("Email sudah di gunakan"));
        }

        redirect('admin/user/?load_template=false');
    }

    public function delete($id="")
    {
        $cek = $this->m_global->getdata("user");

        // jika data admin hanya ada 1 maka tidak boleh di hapus
        if($cek->num_rows() > 1)
        {
            $this->db->delete('user', array("user_id"=>$id));
            $this->session->set_flashdata('report', valid("Success delete admin"));
        }
        else {
            $this->session->set_flashdata('report', error("Data admin tidak boleh kosong"));
        }

        redirect('admin/user/?load_template=false');
    }

    public function edit($id='')
    {
        $data["data"] = $this->m_global->getdata("user",array("user_id"=>$id));
        if($data["data"]->num_rows()==1)
        {
            $data["data"]   = $data["data"]->row();
            $this->load->view("user/edit", $data);
        }
        else {
            echo "<div class='modal-body'>Data not found</div>";
        }
    }

    public function post_edit()
    {
        $data_updated['user_name']         = $this->input->post("name");
        $data_updated['user_email']        = $this->input->post("email");
        $data_updated['user_phone']        = $this->input->post("telp");
        $data_updated['user_address']      = $this->input->post("address");
        $data_updated['user_last_updated'] = date('Y-m-d H:i:s');
        $data_updated['user_log']          = "edited by ".$this->session->userdata('user_name');

        // jika password kosong maka tidak usah ganti password
        if($this->input->post("password")!="")
        {
            $data_updated['user_password'] = md5($this->input->post("password"));
        }

        $this->m_global->update("user",$data_updated, array("user_id"=>$this->input->post("id_user")));
        $data_updated = array();

        $this->session->set_flashdata('report', valid("Success updated admin"));
        redirect('admin/user/?load_template=false');
    }
}
?>