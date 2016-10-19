<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_model 
{
    /**
     * get list blog by keyword
     * @param $offset
     * @param $limit
     * @param $keyword     
     * @return array blogs
     */
    function get_blogs_paging($offset, $limit, $keyword = '') {
    	// Loader
    	$this->load->model('dal/blog_q_model');

    	// setup url paging
    	$url = 'blog';
        if(isset($keyword)) {
            $url = $url . '?keyword=' . $keyword;
        }

    	// config paging
        $pagination_config['total_rows'] = $this->blog_q_model->count_blogs($keyword);
        $pagination_config['per_page'] = $limit;
        $pagination_config['base_url'] = base_url($url);
        $pagination_config['query_string_segment'] = 'offset';
        $pagination_config['page_query_string'] = TRUE;

        // setup blogs paging
        $blogs_paging['pagination'] = $pagination_config; 
        $blogs_paging['data'] = $this->blog_q_model->get_blogs($offset, $limit, $keyword);
        
        return $blogs_paging;
    }	
}