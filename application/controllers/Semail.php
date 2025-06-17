<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Semail extends CI_Controller {
    
    public function __construct () {
        parent::__construct();
        $this->load->model('Models');
        $this->load->library('form_validation');
       
    }

    public function semail()
    {
        $this->load->helper('login/login');

    }

}