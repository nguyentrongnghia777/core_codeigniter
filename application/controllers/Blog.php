<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends Base_Controller {

    public function index() {
        $this->load->view('blog/list');
    }
}