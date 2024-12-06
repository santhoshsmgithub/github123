<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ProductModel extends CI_Model{
    
	public function get($id)
    {
		$returnData = new stdClass();
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where('product_id', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row();
        } 
        return $returnData;
    }

	public function getAll()
    {
		$returnData = new stdClass();
        $this->db->select ('*'); 
        $this->db->from ('product');
		$this->db->group_by('product_image');
		$this->db->order_by('product_id', 'ASC');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $returnData = $query->result();
        }
        return $returnData;
    }

    public function getProductsByCode($productCode)
    {
		$returnData = new stdClass();
        $this->db->select ('*'); 
        $this->db->from ('product');
        $this->db->where('product_code', $productCode);
		// $this->db->group_by('product_image');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $returnData = $query->result();
        }
        return $returnData;
    }

    public function getProductGroupByCode()
    {
		$returnData = new stdClass();
        $this->db->select ('*'); 
        $this->db->from ('product');
		$this->db->group_by('product_code');
        $this->db->order_by('product_id', 'DESC');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $returnData = $query->result();
        }
        return $returnData;
    }

	public function add($id)
    {	

        if (count($this->input->post()) > 0) {

			$mode = "add";
			if (!empty($id)) {
				$mode = "update";
			}

			$productcount = 1;
            if ($mode == "add") {
                $productcount = $this->input->post("array_product_amount");
            }
            
            for($i=1;$i<=count($productcount);$i++){
                
                if ($mode == "add") {
                    $product_data = array(
                        'product_category' => $this->input->post("product_category"),
                        'product_subcategory' => $this->input->post("product_subcategory"),
                        'product_code' => $this->input->post("product_code"),
                        'product_name' => $this->input->post("product_name"),
                        'product_description' => $this->input->post("product_description"),
                        'prod_weight' => $this->input->post("prod_weight".$i),
                        'prod_mrp_amt' => $this->input->post("prod_mrp_amt".$i),
                        'product_amount' => $this->input->post("product_amount".$i),
                        'prod_stock' => $this->input->post("prod_stock".$i),
                        'product_features' => $this->input->post("product_features"),
                        'product_display_features' => $this->input->post("product_display_features"),
                        'seo_title' => $this->input->post("seo_title"),
                        'seo_description' => $this->input->post("seo_description"),
                        'seo_keywords' => $this->input->post("seo_keywords"),
                        'prod_hot' => $this->input->post("prod_hot"),
                        'prod_new' => $this->input->post("prod_new"),
                        'status' => $this->input->post("status"),
                    );
                } else {
                    $product_data = array(
                        'product_category' => $this->input->post("product_category"),
                        'product_subcategory' => $this->input->post("product_subcategory"),
                        'product_code' => $this->input->post("product_code"),
                        'product_name' => $this->input->post("product_name"),
                        'product_description' => $this->input->post("product_description"),
                        'product_features' => $this->input->post("product_features"),
                        'product_shipping' => $this->input->post("product_shipping"),
                        'product_display_features' => $this->input->post("product_display_features"),
                        'seo_title' => $this->input->post("seo_title"),
                        'seo_description' => $this->input->post("seo_description"),
                        'seo_keywords' => $this->input->post("seo_keywords"),
                        'prod_hot' => $this->input->post("prod_hot"),
                        'prod_new' => $this->input->post("prod_new"),
                        'prod_best' => $this->input->post("prod_best"),
                        'prod_feau' => !empty($this->input->post("prod_feau")) ? $this->input->post("prod_feau") : "",
                        'status' => $this->input->post("status"),
                    );
                }
                
                if ($mode == "add") {
                    $result = $this->db->insert('product',$product_data);
                    $id = $this->db->insert_id();
                } else {
                    $this->db->where('product_id',$id);
                    $result = $this->db->update('product',$product_data);
                }

                if($result) 
                {
					$data = array();
                    if ($i == 1) {

                        // do upload
                        if (isset($_FILES['product_image']) && !empty($_FILES['product_image']['name'])) {
                            $uploadFileInfo = static::doUpload("product_image", "product/");
							$data["product_image"] = $uploadFileInfo["file_name"];
							static::deleteOldImg($this->input->post("oldproduct"));
                        }
                    }

					if (isset($_FILES['product_image1']) && !empty($_FILES['product_image1']['name'])) {
						$uploadFileInfo = static::doUpload("product_image1", "product/");
						$data["product_image1"] = $uploadFileInfo["file_name"];
						static::deleteOldImg($this->input->post("oldproduct1"));
					}

					if (isset($_FILES['product_image2']) && !empty($_FILES['product_image2']['name'])) {
						$uploadFileInfo = static::doUpload("product_image2", "product/");
						$data["product_image2"] = $uploadFileInfo["file_name"];
						static::deleteOldImg($this->input->post("oldproduct2"));
					}

					if (isset($_FILES['product_image3']) && !empty($_FILES['product_image3']['name'])) {
						$uploadFileInfo = static::doUpload("product_image3", "product/");
						$data["product_image3"] = $uploadFileInfo["file_name"];
						static::deleteOldImg($this->input->post("oldproduct3"));
					}

					if (isset($_FILES['product_image4']) && !empty($_FILES['product_image4']['name'])) {
						$uploadFileInfo = static::doUpload("product_image4", "product/");
						$data["product_image4"] = $uploadFileInfo["file_name"];
						static::deleteOldImg($this->input->post("oldproduct4"));
					}

					if (isset($_FILES['product_image5']) && !empty($_FILES['product_image5']['name'])) {
						$uploadFileInfo = static::doUpload("product_image5", "product/");
						$data["product_image5"] = $uploadFileInfo["file_name"];
						static::deleteOldImg($this->input->post("oldproduct5"));
					}
					if (count($data) > 0) {
						$this->db->where('product_id',$id);
						$this->db->update('product',$data);
					}
                    // redirect('admin/product/list');
                }
            }
			return true;
		}
        return false;        
    }

    public function updateWPS(){

        if (count($this->input->post())) {
            $productcount=$this->input->post('arraycount');
            for($i=1;$i<=count($productcount);$i++){
                $wid=$this->input->post("prod_weight_id".$i);
                if(!empty($wid)){
                    $product_data=array(					
                        'prod_weight' => $this->input->post("prod_weight".$i),
                        'prod_mrp_amt' => $this->input->post("prod_mrp_amt".$i),
                        'product_amount' => $this->input->post("product_amount".$i),
                        'prod_stock' => $this->input->post("prod_stock".$i)
                    );
                    $this->db->where('product_id',$wid);
                    $this->db->update('product',$product_data);
                }else{		
                    $product_data = array(
                        'product_category' => $this->input->post("product_category"),
                        'product_subcategory' => $this->input->post("product_subcategory"),
                        'product_code' => $this->input->post("product_code"),
                        'product_name' => $this->input->post("product_name"),
                        'product_image' => $this->input->post("product_image"),
                        'product_image1' => $this->input->post("product_image1"),
                        'product_image2' => $this->input->post("product_image2"),
                        'product_image3' => $this->input->post("product_image3"),
                        'product_image4' => $this->input->post("product_image4"),
                        'product_image5' => $this->input->post("product_image5"),
                        'product_description' => $this->input->post("product_description"),
                        'prod_weight' => $this->input->post("prod_weight".$i),
                        'prod_mrp_amt' => $this->input->post("prod_mrp_amt".$i),
                        'product_amount' => $this->input->post("product_amount".$i),
                        'prod_stock' => $this->input->post("prod_stock".$i),
                        'product_features' => $this->input->post("product_features"),
                        'product_shipping' => $this->input->post("product_shipping"),
                        'product_display_features' => $this->input->post("product_display_features"),
                        'seo_title' => $this->input->post("seo_title"),
                        'seo_description' => $this->input->post("seo_description"),
                        'seo_keywords' => $this->input->post("seo_keywords"),
                        'prod_hot' => $this->input->post("prod_hot"),
                        'prod_new' => $this->input->post("prod_new"),
                        'prod_best' => $this->input->post("prod_best"),
                        'prod_feau' => $this->input->post("prod_feau"),
                        'status' => 1
                    ); 
                    $result = $this->db->insert('product',$product_data);
                    $id = $this->db->insert_id();	
                }  
            }
            return true;
        }
        return false;
    }

	public function doUpload($fileName, $uploadPath){
        $config = array();
        $config['upload_path'] = $uploadPath;
        $config['allowed_types'] = '*'; //'gif|jpg|png';
        $config['encrypt_name']  = TRUE;
        //$config['max_size'] = 100;
        //$config['max_width'] = 1024;
        //$config['max_height'] = 768;
        $this->load->library('upload',$config);
        if ( ! $this->upload->do_upload($fileName)) {
            $error = array('error' => $this->upload->display_errors());
            //Action, in case file upload failed
        } else {
            //Action, after file successfully uploaded
        }
        return $this->upload->data();
    }

	public function deleteOldImg($img) {
		if (!empty($img)) {
			unlink("product/".$img);
		}
		return true;
	}


	public function delete($productCode) {
		if (!empty($productCode)) {
			$this->db->where('product_code', $productCode);
			$this->db->delete('product');
			return true;
		}
		return false;
	}
}