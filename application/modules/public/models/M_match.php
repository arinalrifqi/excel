<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_match extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }

    function cek($name='', $domain='')
    {
        // $sql    = "select company_id from compnay where company_name='$name' or company_domain='$domain'";
        // $result = $this->db->query($sql)->get()->num_rows();
        
        $this->db->select("company_id");
        $this->db->where("company_name = '$name' OR company_domain like '%$domain%'");
        $this->db->limit(1);
        $result = $this->db->get('company')->num_rows();
        if($result>0)
        {
            return "ada";
        }
        else {
            return "no";
        }
    }






    function getdata($where=array(),$limit="",$offset="",$order="",$by="")
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
        return $this->db->get('product_brand');
    }

    function getdata_detail($where=array())
    {
        $this->db->from('product_brand');
        $this->db->join('product', 'product.product_product_brand_id = product_brand.product_brand_id', 'left');
        $this->db->where($where);
        return $this->db->get();
    }

    function insert($datainsert=array())
    {
        $this->db->insert('product_brand', $datainsert);
        return $this->db->insert_id();
    }

    function update($data=array(),$where=array())
    {
        $this->db->update('product_brand', $data, $where);
    }
}
?>