<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    /**
     * Very first page of the web
     */
    public function index() {
        $this->load->view('home/home');
    }
}