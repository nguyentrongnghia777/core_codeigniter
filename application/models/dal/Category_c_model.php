<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_c_model extends CI_model 
{
	/**
	 * Get list category  
	 * @param $data
	 * @return boolean
	 */
	function create($data) {
		return $this->db->insert(Constants_helper::TBL_CATEGORYS, $data);
	}

	/**
	 * Update category
	 * @param $id
	 * @param $data 
	 * @return boolean
	 */
	function update($id, $data) {
		return $this->db->update(Constants_helper::TBL_CATEGORYS, $data, array('id' => $id));
	}

	/**
	 * Delete category
	 * @param $id 
	 * @return boolean
	 */
	function delete($id) {
		return $this->db->delete(Constants_helper::TBL_CATEGORYS, array('id' => $id));
	}
}