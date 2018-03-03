<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_global extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }


    function getdata($tabel="",$where=array(),$limit="",$offset="",$order="",$by="")
    {
        $this->db->where($where);
        if($limit!="")
        {
            if($offset!="")
            {
                $this->db->limit($limit,$offset);
            }
            else {
                $this->db->limit($limit);
            }
        }

        if($order!="")
        {
            if($by!="")
            {
                $this->db->order_by($order, $by);
            }
            else {
                $this->db->order_by($order, 'asc');
            }
        }
        if($tabel!="")
        {
            return $this->db->get($tabel);
        }
        else {
            return array();
        }
    }

    function insert($tabel="",$datainsert=array())
    {
        $this->db->insert($tabel, $datainsert);
        return $this->db->insert_id();
    }

    function update($tabel="",$data=array(), $where=array())
    {
        $this->db->update($tabel, $data, $where);
    }
}
?>