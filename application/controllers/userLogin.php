<?php
class Login extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->m_regular->lang();
    }
    
    public function index()
    {
    	if($this->session->userdata('logged_in') == 'YES')
    	{
        	redirect('admin');
    	}
    	else {
    		$this->load->view('login');
    	}

    }

    public function do_login()
    {
		$email    = $this->input->post("email");
		$password = md5($this->input->post("password"));

		$check_login = $this->m_regular->check_user(array("user_email"=>$email, "user_password"=>$password),1);
		if($check_login->num_rows() > 0)
		{
			$set_session = array(
				'logged_in'   => 'YES',
				'user_id'     => $check_login->row()->user_id,
				'user_name'   => $check_login->row()->user_name,
				'access_code' => $check_login->row()->user_access_code
			);
			
			$this->session->set_userdata( $set_session );
			redirect('admin');
		}
		else {
			redirect('login');
		}
    }

    public function logout()
    {
		$this->session->sess_destroy();
		redirect("login");
    }
}
