<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_inventory extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }


    function getdata($where=array(),$limit="",$offset="",$order="",$by="", $group="")
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

        if($group!="")
        {
            $this->db->group_by($group);
        }
        return $this->db->get('inventory');
    }


    function in($code="", $category="", $qty=0, $nominal="", $desc="", $type=INVENTORY_TYPE, $warehouse=0)
    {
        // jika ada parameter yg tidak diisi
        $product = $this->m_product->getdata_detail(array("product_variant_code"=>$code));

        if($code=="" || $category=="" || $qty=="" || $nominal=="" || $product->num_rows()!=1)
        {
            die("parameter insert inventory harus di lengkapi, item code : $code, category : $category");
        }

        $data = $this->getdata(array("inventory_item_code"=>$code, "inventory_categories"=>$category),1,"","inventory_id","desc");

        // jika tidak ada item ini di inventory maka tidak perlu kalkulasi stock_awal, average_nominal dll
        if($data->num_rows()!=1)
        {
            $stock_awal      = 0;
            $nominal_awal    = 0;
            $nominal_average = $nominal;
            $total_qty       = $qty;
            $total_nominal   = $nominal*$qty;
        }
        else {
            // hitung average
            for($a=0;$a<($qty+$data->row()->inventory_total_stock_now);$a++)
            {
                if($a<$qty)
                {
                    $avr[] = $nominal;
                }
                else {
                    $avr[] = $data->row()->inventory_average_nominal_now_per_item;
                }
            }

            $nominal_average = array_sum($avr)/($qty+$data->row()->inventory_total_stock_now);
            $stock_awal      = $data->row()->inventory_total_stock_now;
            $nominal_awal    = $data->row()->inventory_total_nominal_now;
            $total_qty       = $data->row()->inventory_total_stock_now+$qty;
            $total_nominal   = $data->row()->inventory_total_nominal_now+($nominal*$qty);
        }

        // set nama product
        if($product->row()->product_variant_type=="" || $product->row()->product_variant_value=="")
        {
            $name = $product->row()->product_name;
        }
        else {
            $name = $product->row()->product_name." - ".$product->row()->product_variant_type." - ".$product->row()->product_variant_value;
        }

        // set log inventory
        if($desc=="")
        {
            $desc = "insert by ".$this->session->userdata('username');
        }

        $data_insert = array(
            "inventory_item_code"                    => $code,
            "inventory_name"                         => $name,
            "inventory_categories"                   => $category,
            "inventory_item_type"                    => $type,
            "inventory_operator"                     => "in",
            "inventory_qty"                          => $qty,
            "inventory_nominal_per_item"             => $nominal,
            "inventory_total_nominal"                => $nominal*$qty,
            "inventory_stock_awal"                   => $stock_awal,
            "inventory_nominal_stock_awal"           => $nominal_awal,
            "inventory_average_nominal_now_per_item" => $nominal_average,
            "inventory_total_stock_now"              => $total_qty,
            "inventory_total_nominal_now"            => $total_nominal,
            "inventory_warehouse_id"                 => $warehouse,
            "inventory_date_craeted"                 => date('Y-m-d H:i:s'),
            "inventory_log"                          => $desc,
        );
        $this->db->insert('inventory', $data_insert);
        return $this->db->insert_id();
    }


    function out($code="", $category="", $qty=0, $desc="", $type=INVENTORY_TYPE, $warehouse=0)
    {
        // jika ada parameter yg tidak diisi
        $product = $this->m_product->getdata_detail(array("product_variant_code"=>$code));

        // $data = $this->getdata(array("inventory_item_code"=>$code, "inventory_categories"=>$category, "inventory_operator"=>"in"),1,"","inventory_id","desc");
        $data = $this->getdata(array("inventory_item_code"=>$code, "inventory_categories"=>$category),1,"","inventory_id","desc");

        if($code=="" || $category=="" || $qty=="" || $product->num_rows()!=1 || $data->num_rows()!=1)
        {
            die("parameter out inventory harus di lengkapi, item code : $code, category : $category");
        }

        // jika tidak ada item ini di inventory maka tidak perlu kalkulasi stock_awal, average_nominal dll
        if($data->num_rows()==1)
        {
            $nominal_average = $data->row()->inventory_average_nominal_now_per_item;
            $stock_awal      = $data->row()->inventory_total_stock_now;
            $nominal_awal    = $data->row()->inventory_total_nominal_now;
            $total_qty       = $data->row()->inventory_total_stock_now - $qty;
            $total_nominal   = $data->row()->inventory_total_nominal_now - ($data->row()->inventory_average_nominal_now_per_item*$qty);
        }

        // set nama product
        if($product->row()->product_variant_type=="" || $product->row()->product_variant_value=="")
        {
            $name = $product->row()->product_name;
        }
        else {
            $name = $product->row()->product_name." - ".$product->row()->product_variant_type." - ".$product->row()->product_variant_value;
        }

        // set log inventory
        if($desc=="")
        {
            $desc = "insert by ".$this->session->userdata('username');
        }

        $data_insert = array(
            "inventory_item_code"                    => $code,
            "inventory_name"                         => $name,
            "inventory_categories"                   => $category,
            "inventory_item_type"                    => $type,
            "inventory_operator"                     => "out",
            "inventory_qty"                          => $qty,
            "inventory_nominal_per_item"             => $nominal_average,
            "inventory_total_nominal"                => $nominal_average*$qty,
            "inventory_stock_awal"                   => $stock_awal,
            "inventory_nominal_stock_awal"           => $nominal_awal,
            "inventory_average_nominal_now_per_item" => $nominal_average,
            "inventory_total_stock_now"              => $total_qty,
            "inventory_total_nominal_now"            => $total_nominal,
            "inventory_warehouse_id"                 => $warehouse,
            "inventory_date_craeted"                 => date('Y-m-d H:i:s'),
            "inventory_log"                          => $desc,
        );
        $this->db->insert('inventory', $data_insert);
        return $this->db->insert_id();
    }


    function update($data=array(),$where=array())
    {
        $this->db->update('inventory', $data, $where);
    }
}
?>