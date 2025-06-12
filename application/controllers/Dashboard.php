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

    public function sendEmail($token)
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'muhamadrizkysaputra34@gmail.com',
            'smtp_pass' => 'tpac vema mxyk ypqe',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ];

        $this->email->initialize($config);

        $this->email->from('muhamadrizkysaputra34@gmail.com', 'Rizky Saputra');
        $this->email->to($this->input->post('email'));
        $this->email->subject('Verifikasi Akun');
        $this->email->message('Token : ' . $token);

        if ( $this->email->send() ){
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }
}
