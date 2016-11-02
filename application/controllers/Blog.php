<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends Base_Controller {

    public function index() {
    	// Loader
    	$this->load->model('business/blog_model');
    	$this->load->library('pagination');
    	$this->load->language('common_lang');
    	$this->load->language('blog_lang');

        // var_dump($this->config->item('language'));

        $offset = $this->input->get('offset');
        $limit = 5;
        $data['keyword'] = $this->input->get('keyword');


    	$blogs_paging = $this->blog_model->get_blogs_paging($offset, $limit, $data['keyword']);

    	$data['blogs'] = $blogs_paging['data'];

    	// Pagination
    	$this->pagination->initialize($blogs_paging['pagination']);
    	$data['total_blogs'] = $blogs_paging['pagination']['total_rows'];

        $this->load->view('blog/list', $data);
    }
}