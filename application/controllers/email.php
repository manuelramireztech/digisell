<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Email extends CI_Controller 
{
    public function __construct() {
        parent::__construct();
        $this->load->library('email');
    }

    function index()
    {
        $config['protocol']    = 'smtp';
        $config['smtp_host']    = 'ssl://smtp.gmail.com';
        $config['smtp_port']    = '465';
        $config['smtp_timeout'] = '7';
        $config['smtp_user']    = 'praveen@bootstrapguru.com';
        $config['smtp_pass']    = 'Praveen526#';
        $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'html'; // or html
        $config['validation'] = TRUE; // bool whether to validate email or not      

        $this->email->initialize($config);

        $this->email->from('praveen@bootstrapguru.com', 'Praveen');
        $this->email->to('praveen@bootstrapguru.com'); 

        $this->email->subject('Email Test');
        $this->email->message('Wooooooooooooooo I have configured my localhost to send email from my pc');  

        $this->email->send();

        echo $this->email->print_debugger();

        //$this->load->view('email_view');
    }
}