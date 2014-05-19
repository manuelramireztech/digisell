<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_login extends CI_Controller {
	public function __construct() {
        parent::__construct();
    }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if($this->session->userdata('email'))
		{
			redirect('admin_dashboard');
		}
		$this->load->view('admin/login');
	}

	function login()
	{	
		$data['uname'] = $this->input->post('username');
		$data['password'] = $this->input->post('password');
		$data['user'] = $this->Admin->login($data['uname'],$data['password']);
		$info['name'] = $data['user']->first_name;
		$this->session->set_userdata($info);
	
		if($data['user'])
		{
			redirect('admin_dashboard');
		}
		else
		{	
			$this->session->set_flashdata('error', 'Failed to Login!'.heading(' Invalid Login data.......',3));
			redirect('admin_login');
		}
	}

	function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->set_flashdata('message', 'Successfully logged out! ');
		redirect('admin_login');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */