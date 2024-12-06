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

    public function getActiveProductGroupByCode($limit = 0)
    {
		$returnData = new stdClass();
        $this->db->select ('*'); 
        $this->db->from ('product');
        $this->db->where('status', 1);
		$this->db->group_by('product_code');
        $this->db->order_by('product_id', 'DESC');
        if ($limit > 0) {
            $this->db->limit($limit, 0);
        }
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $returnData = $query->result();
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
            $this->db->limit($limit, 0);
        }
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $returnData = $query->result();
        }
        return $returnData;
    }

    public function getActiveProductGroupByName()
    {
		$returnData = new stdClass();
        $this->db->select ('*'); 
        $this->db->from ('product');
        $this->db->where('status', 1);
		$this->db->group_by('product_name');
        $this->db->order_by('product_id', 'DESC');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $returnData = $query->result();
        }
        return $returnData;
    }

    public function getHotProducts()
    {
		$returnData = new stdClass();
        $this->db->select ('*'); 
        $this->db->from ('product');
        $this->db->where('status', 1);
        $this->db->where('prod_hot', 1);
		$this->db->group_by('product_code');
        $this->db->order_by('product_id', 'DESC');
        $this->db->limit(10,0);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $returnData = $query->result();
        }
        return $returnData;
    }

    public function getNewProducts()
    {
		$returnData = new stdClass();
        $this->db->select ('*'); 
        $this->db->from ('product');
        $this->db->where('status', 1);
        $this->db->where('prod_new', 1);
		$this->db->group_by('product_code');
        $this->db->order_by('product_id', 'DESC');
        $this->db->limit(10,0);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $returnData = $query->result();
        }
        return $returnData;
    }

    public function getActiveProductByCategory($cat)
    {

		$returnData = new stdClass();
        $this->db->select ('*'); 
        $this->db->from ('product');
        $this->db->where('status', 1);
        $this->db->where('product_category', $cat);
		$this->db->group_by('product_code');
        $this->db->order_by('product_id', 'DESC');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $returnData = $query->result();
        }
        return $returnData;
    }

    public function getActiveProductBySubCategory($cat)
    {

		$returnData = new stdClass();
        $this->db->select ('*'); 
        $this->db->from ('product');
        $this->db->where('status', 1);
        $this->db->where('product_subcategory', $cat);
		$this->db->group_by('product_code');
        $this->db->order_by('product_id', 'DESC');
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

    public function getActiveProductById($prodId)
    {

		$returnData = new stdClass();
        $this->db->select ('*'); 
        $this->db->from ('product');
        $this->db->where('product_id', $prodId);
        $this->db->where('status', 1);
        $this->db->order_by('product_id', 'DESC');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $returnData = $query->result();
        }
        // echo $this->db->last_query();exit;
        return $returnData;
    }

    public function getActiveRelatedProduct($prodId)
    {
		$returnData = new stdClass();
        $this->db->select ('*'); 
        $this->db->from ('product');
        $this->db->where('product_category = ', $prodId);
        $this->db->where('status', 1);
        $this->db->group_by('product_name');
        // $this->db->order_by('product_id', 'DESC');
        $this->db->limit(5,0);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $returnData = $query->result();
        }
        return $returnData;
    }

    public function updateProductData($id, $updateDate)
    {
        $this->db->where('product_id',$id);
        return $this->db->update('product',$updateDate);
    }

    public function getSearchProducts($whQry)
    {

		$returnData = new stdClass();
        $this->db->select ('*'); 
        $this->db->from ('product');
        $this->db->where($whQry);
        // $this->db->or_like('product_name', $searchTxt, 'both');
        // $this->db->or_like('product_category',  $searchTxt, 'both');
        // $this->db->or_like('product_description',  $searchTxt, 'both');
		// $this->db->group_by('product_name');
        // $this->db->order_by('product_id', 'DESC');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $returnData = $query->result();
        }
        // echo $this->db->last_query();;exit;
        return $returnData;
    }

    public function getSearchProductsNew($term)
    {

		$returnData = new stdClass();
        $this->db->select ('*'); 
        $this->db->from ('product');
        $this->db->like('product_name',$term);
        
        // $query = $this->db->get('product');
        // $this->db->where($whQry);
        // $this->db->or_like('product_name', $searchTxt, 'both');
        // $this->db->or_like('product_category',  $searchTxt, 'both');
        // $this->db->or_like('product_description',  $searchTxt, 'both');
		// $this->db->group_by('product_name');
        // $this->db->order_by('product_id', 'DESC');
        $query = $this->db->get();
        // echo $this->db->last_query();exit;
        // echo $query->num_rows();exit;
        if ($query->num_rows() > 0) {
            $returnData = $query->result();
        }
        // echo $this->db->last_query();;exit;

        // print_r($returnData);exit;
        return $returnData;
    }

    public function getPagingProducts($whQry)
    {

		// $returnData = new stdClass();
        $this->db->select ('*'); 
        $this->db->from ('product');
        $this->db->where($whQry);
        $query = $this->db->get();
        // if ($query->num_rows() > 0) {
        //     $returnData = $query->result();
        // }
        return $query->num_rows();
    }

    public function getProductsByQry($qry)
    {

		$returnData = new stdClass();
        $query = $this->db->query("Select * from product ".$qry);
        if ($query->num_rows() > 0) {
            $returnData = $query->result();
        }
        // echo $this->db->last_query();;exit;
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