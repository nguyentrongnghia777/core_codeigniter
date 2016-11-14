<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_q_model extends CI_model 
{
    /**
     * Get list user 
     * @return array users
     */
    function get_list() {
        return $this->db
            ->select()
            ->from(Constants_helper::TBL_USERS)
            ->get()
            ->result();
    }

    /**
     * Get user by id
     * @param   $id
     * @return opject || boolean
     */
    function get_user_by_id($id) {
        $query = $this->db
                    ->select()
                    ->from(Constants_helper::TBL_USERS)
                    ->where('id', $id)
                    ->get();
        if ($query->num_rows() > 0) {
            return $query->row();
        } 
    }

}