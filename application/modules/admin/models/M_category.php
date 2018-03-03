<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_category extends CI_Model
{
	function __construct()
    {
        parent::__construct();
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
        return $this->db->get('product_categories');
    }

    function getdata_detail($where=array())
    {
        $this->db->from('product_categories_detail');
        $this->db->join('product_categories', 'product_categories_detail.product_categories_detail_product_categories_id = product_categories.product_categories_id', 'left');
        $this->db->join('product', 'product.product_id = product_categories_detail.product_categories_detail_product_id', 'left');
        $this->db->where($where);
        return $this->db->get();
    }

    function insert($datainsert=array())
    {
        $this->db->insert('product_categories', $datainsert);
        return $this->db->insert_id();
    }

    function update($data=array(),$where=array())
    {
        $this->db->update('product_categories', $data, $where);
    }
}
?>