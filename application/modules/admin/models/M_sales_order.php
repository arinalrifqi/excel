<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_sales_order extends CI_Model
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
        return $this->db->get('sales_order');
    }

    function getdata_detail($where=array())
    {
        $this->db->from('sales_order');
        $this->db->join('sales_order_detail', 'sales_order_detail.sales_order_detail_sales_order_id = sales_order.sales_order_id');
        $this->db->join('product_variant', 'product_variant.product_variant_id = sales_order_detail.sales_order_detail_product_variant_id');
        $this->db->join('product_desc', 'product_desc.product_desc_product_variant_id = product_variant.product_variant_id');
        $this->db->join('product', 'product.product_id = product_variant.product_variant_product_id');
        $this->db->where($where);
        return $this->db->get();
    }

    function insert($datainsert=array())
    {
        $this->db->insert('sales_order', $datainsert);
        return $this->db->insert_id();
    }

    function update($data=array(),$where=array())
    {
        $this->db->update('sales_order', $data, $where);
    }
}
?>