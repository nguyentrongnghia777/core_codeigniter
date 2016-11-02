<?php
class Base_Controller extends CI_Controller {
    public $user;

    /**
     * Only allow POST request to partial controllers
     */
    function __construct() {
        parent::__construct();
        
        // set Language
        $siteLang = $this->session->userdata('site_lang');
        if ($siteLang) {
            $this->config->set_item('language', $siteLang);
        }

        // Load libraries
        $this->load->library('ion_auth');

        // If user is logged in, load user information
        if ($this->ion_auth->logged_in()) {
            // Load to controller
            $this->user = $this->ion_auth->user()->row();
            // Load to view
            $this->load->vars('user', $this->user);
        } else {
            $this->load->vars('user', FALSE);
        }
    }
}