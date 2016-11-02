<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Language extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function switch_language($language = "") {
        if ($language != Constants_helper::LANGUAGE_VIETNAMESE && $language != Constants_helper::LANGUAGE_ENGLISH) {
            show_404();
        }

        $this->session->set_userdata('site_lang', $language);
        redirect(base_url());
    }
}