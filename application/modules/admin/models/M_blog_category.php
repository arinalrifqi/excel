<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_blog_category extends CI_Model
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
        return $this->db->get('blog_categories');
    }

    function getdata_detail($where=array(),$limit="",$offset="")
    {
        $this->db->from('blog_categories_detail');
        $this->db->join('blog_categories', 'blog_categories.blog_categories_id = blog_categories_detail.blog_categories_detail_blog_categories_id', 'left');
        $this->db->join('blog', 'blog.blog_id = blog_categories_detail.blog_categories_detail_blog_id', 'left');
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

        return $this->db->get();
    }

    function insert($datainsert=array())
    {
        $this->db->insert('blog_categories', $datainsert);
        return $this->db->insert_id();
    }

    function update($data=array(),$where=array())
    {
        $this->db->update('blog_categories', $data, $where);
    }
}
?>