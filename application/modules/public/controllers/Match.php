<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Match extends MX_Controller {

    public function __construct() {
        parent::__construct();
        // $this->m_regular->check();
        $this->lang->load('content_lang', 'indonesia');
        $this->load->model('m_match');
    }
    

    public function index()
    {
        // $data["list"] = $this->m_global->getdata("member",array(),"","","member_fullname");
        $data["list"]    = "";

        // $tmp["content"] = $this->load->view("member/home", $data, TRUE);

        $this->load->view('home', $data);
    }

    public function do_match()
    {
        require('assets/excel_reader/excel_reader2.php');
        require('assets/excel_reader/SpreadsheetReader.php');

        try
        {
            // $Filepath = "assets/a.xlsx";
            $target = basename($_FILES['userfile']['name']) ;
            move_uploaded_file($_FILES['userfile']['tmp_name'], $target);
            
            // $data = new Spreadsheet_Excel_Reader($_FILES['userfile']['name'],false);
            
            $Spreadsheet = new SpreadsheetReader($_FILES['userfile']['name']);

            $data["list"] = $Spreadsheet;
            $this->load->view('home', $data);
        }
        catch (Exception $E)
        {
            echo $E -> getMessage();
        }
        //    hapus file xls yang udah dibaca
        unlink($_FILES['userfile']['name']);
    }



    public function input()
    {
        $data["no_fail"]    = "";
        $data["no_success"] = "";
        $data["fail"]       = "";
        $data["no_data"]    = 0;
        $this->load->view('input', $data);
    }

    public function do_input()
    { 
        require('assets/excel_reader/excel_reader2.php');
        require('assets/excel_reader/SpreadsheetReader.php');

        try
        {
            // $Filepath = "assets/a.xlsx";
            $target = basename($_FILES['userfile']['name']) ;
            move_uploaded_file($_FILES['userfile']['tmp_name'], $target);
            // $data = new Spreadsheet_Excel_Reader($_FILES['userfile']['name'],false);
            $Spreadsheet   = new SpreadsheetReader($_FILES['userfile']['name']);
            $no_fail       = 0;
            $no_success    = 0;
            $no_fail_input = 0;
            $success       = array();
            $fail          = array();

            foreach ($Spreadsheet as $Key => $row)
            {
                $cek = $this->m_match->cek($row[0], $row[1]);
                if ($row && $cek!='ada' && $row[0]!="" && $row[1]!="")
                {
                    // input table
                    $data_input = array(
                        "company_name"         => $row[0],
                        "company_domain"       => $row[1],
                        "company_desc"         => $row[2],
                        "company_address"      => $row[3],
                        "company_mail"         => $row[4],
                        "company_telpon_office"=> $row[5],
                        "company_pic"          => $row[6],
                        "company_position"     => $row[7],
                        "company_telpon_pic"   => $row[8]
                    );
                    if($this->db->insert("company", $data_input))
                    { 
                        $no_success += 1;
                        $success[] = array('name'=>$row[0], 'domain'=>$row[1]);
                    }
                    else{ 
                        $fail[] = array('name'=>$row[0], 'domain'=>$row[1]);
                        $no_fail_input= $no_fail_input+1;
                    }
                }
                elseif (trim($row[0])=="" || trim($row[1])=="") {
                    $no_fail= $no_fail+1;
                }
                else {
                    // tampung data yg fail
                    $fail[] = array('name'=>$row[0], 'domain'=>$row[1]);
                    $no_fail_input= $no_fail_input+1;
                }
            }

            $data["no_fail"]       = $no_fail;
            $data["no_fail_input"] = $no_fail_input;
            $data["no_success"]    = $no_success;
            $data["fail"]          = $fail;
            $data["success"]       = $success;
            $data["no_data"]       = count($Spreadsheet)-$no_fail;
            $this->load->view('input', $data);
        }
        catch (Exception $E)
        {
            echo $E -> getMessage();
        }
        //    hapus file xls yang udah dibaca
        unlink($_FILES['userfile']['name']);
    }
}
?>