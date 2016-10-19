<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_q_model extends CI_model 
{
    /**
     * get list blog by keyword
     * @param $offset
     * @param $limit
     * @param $keyword     
     * @return array blogs
     */
    function get_blogs($offset, $limit, $keyword = '') {
        return $this->db
            ->select()
            ->from(Constants_helper::TBL_BLOGS)
            ->like('title', $keyword)
            ->limit($limit, $offset)
            ->get()
            ->result();
    }

    /**
     * count blog by keyword
     * @param $keyword     
     * @return array blogs
     */
    function count_blogs($keyword = '') {
        return $this->db
            ->select()
            ->from(Constants_helper::TBL_BLOGS)
            ->like('title', $keyword)
            ->count_all_results();
    }
}