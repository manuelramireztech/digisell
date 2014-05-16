<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
			$this->load->model('Admin_login');
			$data['user'] = $this->Admin_login->login($this->session->userdata('email'),$this->session->userdata('password'));
			if($data['user'])
			{
				$this->load->view('admin/dashboard',$data);
			}
		}
		$this->load->view('admin/login');
	}

	function login()
	{
		$data['uname'] = $this->input->post('username');
		$data['password'] = $this->input->post('password');
		$this->load->model('Admin_login');
		$data['user'] = $this->Admin_login->login($data['uname'],$data['password']);
		if($data['user'])
		{
			$this->load->view('admin/dashboard',$data);
		}
		else
		{	
			$this->session->set_flashdata('error', 'User un-available');
			// redirect('admin/dashboard/login');
			$this->load->view('admin/login');
		}		
	}

	function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->set_flashdata('message', 'You have been logged out');
		redirect('admin/dashboard/login');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */