<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_regular extends CI_Model
{
	function __construct()
    {
        parent::__construct();
        $this->table = 'tbl_user';
    }

	function check()
	{
		if ($this->session->userdata('logged_in') != 'YES')
		{
            redirect('login','refresh');
			die("hak akses ditolak");
		}
	}

    function lang()
    {
        if ($this->session->userdata('lang') == 'english')
        {
            $this->lang->load('content_lang', "english");
        }
        else {
            $this->lang->load('content_lang', "indonesia");
        }
    }

    function check_user($where=array(), $limit='', $offset='', $order='', $by='')
    {
        $this->db->where($where);
        if($limit!="")
        {
            if($offset!="")
            {
                $this->db->limit($limit, $offset);
            }
            else {
                $this->db->limit($limit);
            }
        }

        if($order!="" && $by!="")
        {
            $this->db->order_by($order, $by);
        }

        return $this->db->get('user');
    }

    function cek_url($table="", $where = NULL, $limit = NULL, $offset = NULL)
    {
        return $this->db->get_where($table, $where, $limit, $offset);
    }
    function string_to_url($string='', $table='', $kolom='')
    {
        $hapus_simbol = preg_replace('/[^A-Za-z0-9\. -]/', '', $string);
        $ready        = str_replace(" ", "-", $hapus_simbol);
        $num_row      = 1;
        $i            = '';
        while($num_row > 0):
            $word    = $ready.$i;
            $num_row = $this->cek_url($table,array($kolom => $word))->num_rows();
            $i = $i+1;
        endwhile;
        
        return strtolower($word);
    }


    function media_image($mulai='', $to='')
    {
        $dir = scandir("assets/file/img/");
        foreach ($dir as $key => $value)
        {
            if($key>1)
            {
                $img  = base_url("assets/file/img/".$value);
                $size = GetImageSize($img);

                $data_img[] = array("img"=>$value, "url"=>$img, "w"=>$size[0], "h"=>$size[1]);
            }
        }
        
        // jika tidak ada direktori gambar
        if(!isset($data_img))
        { 
            return $data_img[] = array();
        }
        else {
            // nampilin gambar
            if($mulai!='' || $to!='' || $mulai > -1 || $to > -1)
            {
                $index_count = count($data_img)-1;
                if($index_count == $mulai)
                {
                    $send[] = $data_img[0];
                    return $send;
                }
                else
                {
                    // jika $to lebih besar dari jumlah $index_count maka maksimal kirim berarti $index_count di index array nya
                    if($mulai<=$index_count && $to > $index_count)
                    {
                        for($i=$mulai;$i<($index_count+1);$i++)
                        {
                            $send[] = $data_img[$i];
                        }
                        return $send;
                    }
                    elseif($mulai<=$index_count && $to <= $index_count)
                    {
                        for($i=$mulai;$i<($to+1);$i++)
                        {
                            $send[] = $data_img[$i];
                        }
                        return $send;
                    }
                    else {
                        return array();
                    }
                }
            }
            else {
                return array();
            }
        }
    }


    function rename_img($string='')
    {
        $hapus_simbol = preg_replace('/[^A-Za-z0-9\. -]/', '', $string);
        $ready        = str_replace(" ", "-", $hapus_simbol);
        $num_row      = 1;
        $i            = '';
        while($num_row > 0):
            $word    = $i.$ready;
            $num_row = $this->cek_img($word);
            $i = $i+1;
        endwhile;
        
        return $word;
    }
    function cek_img($string='')
    {
        $dir  = scandir("assets/file/img/");
        $cari = array_search($string, $dir);
        if($cari=='')
        {
            return 0;
        }
        else {
            return 1;
        }
    }

}
?>