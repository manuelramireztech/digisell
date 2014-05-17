<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_dashboard extends CI_Controller {
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
			redirect('admin_dashboard/login');
		}
		$this->load->view('admin/login');
	}

	function login()
	{	
		$data['news'] = $this->Admin->news();
		$data['total_admins'] = $this->Admin->total_admin();
		$data['total_clients'] = $this->Admin->total_client();
		$data['total_invoice_paid'] = $this->Admin->total_invoice_paid();
		$data['total_invoice_due'] = $this->Admin->total_invoice_due();
		$data['total_invoice_credit'] = $this->Admin->total_invoice_credit();
		$data['balance'] = $this->Admin->register_balance();
		$data['order_active'] = $this->Admin->order_active();
		$data['order_pending'] = $this->Admin->order_pending();
		$data['order_suspended'] = $this->Admin->order_suspended();
		$data['order_cancelled'] = $this->Admin->order_cancelled();
		$data['order_refunded'] = $this->Admin->order_refunded();
		$data['order_fraud'] = $this->Admin->order_fraud();
		$data['order_incomplete'] = $this->Admin->order_incomplete();

		if($this->session->userdata('email'))
		{
			$data['user'] = $this->Admin->get_data();
		}
		else
		{
			$data['uname'] = $this->input->post('username');
			$data['password'] = $this->input->post('password');
			$data['user'] = $this->Admin->login($data['uname'],$data['password']);
		}
		if($data['user'])
		{
			$this->load->view('admin/dashboard',$data);
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