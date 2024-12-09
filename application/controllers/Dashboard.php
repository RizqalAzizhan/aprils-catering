<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    public function __construct () {
        parent::__construct();
        
       
    }

    public function index()
    {
        $data['title'] = "April's Catering By JMA";
        $this->load->view('templates/header', $data);
        $this->load->view('dashboard/navbar');
        $this->load->view('dashboard/dashboard');
        $this->load->view('templates/footer');
    }
    
    public function about() 
    {
        $data['title'] = "April's Catering By JMA";
        $this->load->view('templates/header', $data);
        $this->load->view('about/navbar');
        $this->load->view('about/about');
        $this->load->view('templates/footer');
    }

    public function service() 
    {
        $data['title'] = "April's Catering By JMA";
        $this->load->view('templates/header', $data);
        $this->load->view('service/navbar');
        $this->load->view('service/service');
        $this->load->view('templates/footer');
    }
    
    public function menu()
    {
        $data['title'] = "April's Catering By JMA";
        $this->load->view('templates/header', $data);
        $this->load->view('menu/navbar');
        $this->load->view('menu/menu');
        $this->load->view('templates/footer');

    }
    public function booking()
    {
        $data['title'] = "April's Catering By JMA";
        $this->load->view('templates/header', $data);
        $this->load->view('pages/booking/navbar');
        $this->load->view('pages/booking/booking');
        $this->load->view('templates/footer');
        
    }
    // public function team()
    // {
    //     $data['title'] = "April's Catering By JMA";
    //     $this->load->view('templates/header', $data);
    //     $this->load->view('pages/our_team/navbar');
    //     $this->load->view('pages/our_team/team');
    //     $this->load->view('templates/footer');
        
    // }
    public function testimonial()
    {
        $data['title'] = "April's Catering By JMA";
        $this->load->view('templates/header', $data);
        $this->load->view('pages/testimonial/navbar');
        $this->load->view('pages/testimonial/testimonial');
        $this->load->view('templates/footer');
        
    }
    public function contact()
    {
        $data['title'] = "April's Catering By JMA";
        $this->load->view('templates/header', $data);
        $this->load->view('contact/navbar');
        $this->load->view('contact/contact');
        $this->load->view('templates/footer');

    }
}
