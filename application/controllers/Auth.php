<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function index() {
        $this->login();
    }

    public function login() {
        $this->load->view('auth/login');
    }
}