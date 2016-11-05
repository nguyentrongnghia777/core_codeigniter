<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_q_model extends CI_model 
{
    /**
     * get list category  
     * @return array categorys
     */
    function get_list() {
        return $this->db
            ->select()
            ->from(Constants_helper::TBL_CATEGORYS)
            ->get()
            ->result();
    }

    /**
     * delete category by id
     * @param   $id
     * @return array
     */
    function get_category_by_id($id) {
        $query = $this->db
                    ->select()
                    ->from(Constants_helper::TBL_CATEGORYS)
                    ->where('id', $id)
                    ->get();
        if ($query->num_rows() > 0) {
            return $query->row();
        } 
    }
}