<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ProductModel extends CI_Model{
    
    public function getProductById($prodId)
    {
		$returnData = new stdClass();
        $this->db->select ('*'); 
        $this->db->from ('product');
        $this->db->where('product_id', $prodId);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $returnData = $query->row();
        }
        return $returnData;

        
    }

    public function getActiveProductGroupByImage($limit = 0)
    {
		$returnData = new stdClass();
        $this->db->select ('*'); 
        $this->db->from ('product');
        $this->db->where('status', 1);
		$this->db->group_by('product_image');
        $this->db->order_by('product_id', 'DESC');
        if ($limit > 0) {
            $this->db->limit(0, $limit);
        }
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $returnData = $query->result();
        }
        return $returnData;
    }

    public function getActiveProductBySubCategories($cat)
    {

		$returnData = new stdClass();
        $this->db->select ('*'); 
        $this->db->from ('product');
        $this->db->where('status', 1);
        $this->db->where_in('product_subcategory', $cat);
		$this->db->group_by('product_code');
        $this->db->order_by('product_id', 'DESC');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $returnData = $query->result();
        }
        return $returnData;
    }

    public function formatSubCategoryProductIdAsKey($prods)
    {

		$result = [];
        if (count($prods) > 0) {
            foreach($prods as $row)
            {
                $result[$row->product_subcategory][] = $row;
            }
        }
        
        return $result;
    }
}