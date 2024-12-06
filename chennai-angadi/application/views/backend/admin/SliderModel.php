<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SliderModel extends CI_Model{
    
	public function get($id)
    {
		$returnData = new stdClass();
        $this->db->select('*');
        $this->db->from('slider');
        $this->db->where('id', $id);
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
        $this->db->from ('slider');
		$this->db->order_by('id', 'ASC');
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
                
			$product_data = array(
				'slider_order' => $this->input->post("slider_order"),
				'slider_link' => $this->input->post("slider_link"),
				'status' => $this->input->post("status")
			);
			
			if ($mode == "add") {
				$result = $this->db->insert('slider',$product_data);
				$id = $this->db->insert_id();
			} else {
				$this->db->where('id',$id);
				$result = $this->db->update('slider',$product_data);
			}

			if($result) 
			{
				$data = array();

				// do upload
				if (isset($_FILES['slider_image']) && !empty($_FILES['slider_image']['name'])) {
					$uploadFileInfo = static::doUpload("slider_image", "slider/");
					$data["slider_image"] = $uploadFileInfo["file_name"];
					static::deleteOldImg($this->input->post("oldproduct"));
				}

				if (count($data) > 0) {
					$this->db->where('id',$id);
					$this->db->update('slider',$data);
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
			unlink("slider/".$img);
		}
		return true;
	}

	public function delete($id) {
		if (!empty($id)) {
			$this->db->where('id', $id);
			$this->db->delete('slider');
			return true;
		}
		return false;
	}
}