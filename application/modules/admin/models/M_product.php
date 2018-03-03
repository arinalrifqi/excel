<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_product extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }



    function getdata($where=array(),$limit="",$offset="",$order="",$by="")
    {
        $this->db->from('product');
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
        return $this->db->get();
    }

    function getdata_category($where=array(),$limit="",$offset="",$order="",$by=""){
        $this->db->from('product_categories');
        //$this->db->where($where);
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
        return $this->db->get();
    }


    function getdata_detail($where=array(),$limit="",$offset="",$order="",$by="")
    {
        $this->db->from('product');
        $this->db->join('product_variant', 'product_variant.product_variant_product_id = product.product_id', 'left');
        $this->db->join('product_desc', 'product_desc.product_desc_product_variant_id = product_variant.product_variant_id', 'left');
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
        return $this->db->get();
    }


    function get_product_variant($where=array(), $limit='')
    {
        $this->db->where($where);
        if($limit!='')
        {
            $this->db->limit($limit);
        }
        return $this->db->get('product_variant');
    }


    function get_variant_desc($where=array(), $limit='')
    {
        $this->db->from('product_variant');
        $this->db->join('product_desc', 'product_desc.product_desc_product_variant_id = product_variant.product_variant_id');
        $this->db->where($where);
        if($limit!='')
        {
            $this->db->limit($limit);
        }
        return $this->db->get();
    }


    function insert_product($datainsert=array())
    {
        $this->db->insert('product', $datainsert);
        return $this->db->insert_id();
    }

    function insert_product_categories_detail($datainsert=array())
    {
        $this->db->insert('product_categories_detail', $datainsert);
        return $this->db->insert_id();
    }


    function insert_product_variant($datainsert=array())
    {
        $this->db->insert('product_variant', $datainsert);
        return $this->db->insert_id();
    }


    function insert_product_desc($datainsert=array())
    {
        $this->db->insert('product_desc', $datainsert);
        return $this->db->insert_id();
    }


    function update($data=array(),$where=array())
    {
        $this->db->update('product', $data, $where);
    }


    function cek_delete_product($product_id="", $variant_id="")
    {
        if($product_id!="")
        {
            $data = $this->getdata_detail(array("product_id"=>$product_id),1);
        }
        else {
            $data = $this->getdata_detail(array("product_variant_id"=>$variant_id),1);
        }

        if($data->num_rows()==1)
        {
            $so  = $this->m_sales_order->getdata_detail(array("sales_order_detail_product_variant_id"=>$data->row()->product_variant_id))->num_rows();
            $inventory = $this->m_inventory->getdata(array("inventory_item_code"=>$data->row()->product_variant_code))->num_rows();
            if($so>0 || $inventory>0)
            {
                return $status = "no";
            }
            else {
                return $status = "yes";
            }
        }
        else {
            return $status = "no";
        }
    }

    function delete_product($product_id="")
    {
        $id_variant = $this->get_product_variant(array("product_variant_product_id"=>$product_id))->row()->product_variant_id;

        $this->db->delete('product', array("product_id"=>$product_id));
        $this->db->delete('product_variant', array("product_variant_product_id"=>$product_id));
        $this->db->delete('product_desc', array("product_desc_product_variant_id"=>$id_variant));
        $this->db->delete('product_categories_detail', array("product_categories_detail_product_id"=>$product_id));
    }

    function delete_variant($id='')
    {
        $this->db->delete('product_variant', array("product_variant_id"=>$id));
        $this->db->delete('product_desc', array("product_desc_product_variant_id"=>$id));
    }
}
?>