<?php
class Regular extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    public function index()
    {
    	redirect('admin');

    }


    function load_more_img($mulai='', $to='')
    {
        $data = $this->m_regular->media_image($mulai+1,$to);

        // jika array 0 maka return no
        if(count($data)<1)
        {
            // echo "<div class='col-sm-12 text-center'>no more</div>";
            echo "no";
        }
        else {
            $send = "";
            foreach($data as $a => $row)
            {
                echo "<div class='col-md-2 col-sm-3 col-xs-6 text-center mb-20'>
                    <input type='hidden' name='name_img' value='".$row['img']."'>
                    <div class='box-img-upload pilih-img'><img src='".$row['url']."' class='img-upload'></div>
                    <label class='img-label'>
                    <button class='btn btn-success btn-xs pilih-img2'><i class='fa fa-check'></i></button>
                    <button class='btn btn-danger btn-xs delete-img'><i class='fa fa-trash'></i></button>
                    </label>
                    <label class='img-label img-name'>".$row['img']."</label>
                    <label class='img-label'>".$row['w']."px x ".$row['h']."px </label>
                    </div>";
            }
        }
    }


    function upload()
    {
        $file_name = $this->m_regular->rename_img($_FILES['userfile']['name']);

        $config['upload_path']   = './assets/file/img/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size']      = '5000';
        $config['file_name']     = $file_name;
        $this->load->library('upload', $config);

        $this->upload->do_upload();
        echo $file_name;
    }


    function media_image()
    {
        $this->load->view('choose_image');
    }
}
