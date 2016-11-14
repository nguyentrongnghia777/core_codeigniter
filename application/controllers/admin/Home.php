<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Base_Controller {
    /**
     * Very first page of the web
     */
    public function index() {
		// Load library language
		$this->load->language('common_lang');

		// Load view
        $this->load->view('admin/home/index');
    }
}