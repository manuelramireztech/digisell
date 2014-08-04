<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client_login extends CI_Controller {

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
		if($this->session->userdata('client_login'))
		{
			redirect('client_dashboard');
		}
		$this->load->view('site/login');
	}

	function login()
	{	
		if($this->session->userdata('client_login'))
		{
			redirect('client_dashboard');
		}
		$data['uname'] = $this->input->post('username');
		$data['password'] = $this->input->post('password');
		$data['user'] = $this->Client->login($data['uname'],$data['password']);
		$info = $data['user']->first_name;
		$this->session->set_userdata('client_login', $info);
		if($data['user'])
		{
			redirect('client_dashboard');
		}
		else
		{	
			$this->session->set_flashdata('error', 'Failed to Login!'.heading(' Invalid Login data.......',3));
			redirect('client_login');
		}
	}

	function logout()
	{
		if($this->session->userdata('client_login'))
		{
			$this->session->unset_userdata('client_login');
			$this->session->set_flashdata('message', 'Successfully logged out! ');
			redirect('client_login');
		}
		else
		{
			$this->session->set_flashdata('warning', 'Already Logged Out');
			redirect('client_login');
		}
	}

	function register()
	{
		if($this->session->userdata('client_login'))
		{
			redirect('client_dashboard');
		}
		$this->load->view('site/register');
	}

	function registration()
	{
		if($this->session->userdata('client_login'))
		{
			redirect('client_dashboard');
		}
		$data['first_name'] = $this->input->post('fname');
		$data['last_name'] = $this->input->post('lname');
		$data['email'] = $this->input->post('email');
		$data['password'] = md5($this->input->post('password'));
		$data['tos'] = $this->input->post('accept');
		if($data['tos'])
		{
			$check_duplicate = $this->Client->check_duplication($data['email']);
			if($check_duplicate)
			{
				$this->session->set_flashdata('error', 'User Already Registered With Same Email. Please, try another one.');
				redirect('client_login/register');
			}
			else
			{
				$msg = $this->Client->register($data);
				if($msg)
				{
					$this->session->set_flashdata('message', 'Registration Successfull, Please Login.');		
					redirect('client_login');
				}
				else
				{
					$this->session->set_flashdata('error', 'Registration Failed');
					redirect('client_login/register');
				}
			}
		}
		else
		{
			$this->session->set_flashdata('error', 'Accept Terms & Condotions To Register');
			redirect('client_login/register');
		}
	}
}

