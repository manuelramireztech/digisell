<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_config extends CI_Controller {
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
		if(!$this->session->userdata('email'))
		{
			redirect('admin_login');
		}
		if($this->Config->get_data())
		{
			$data['info'] = $this->Config->get_data();	
		}
		else
		{
			$data['info'] = '';
		}
		if($this->Config->get_news())
		{
			$data['news'] = $this->Config->get_news();	
		}
		else
		{
			$data['news'] = '';
		}
		$this->load->view('admin/config',$data);
	}

	public function save()
	{
		if(!$this->session->userdata('email'))
		{
			redirect('admin_login');
		}
		$data['date_format'] = $this->input->post('date_format');
		$data['site_name'] = $this->input->post('site_name');
		$data['default_email'] = $this->input->post('default_email');
		$msg = $this->Config->save($data);
		if($msg)
		{
			$this->session->set_flashdata('message', 'Successfully Updated Settings');
			redirect('admin_config');
		}
		else
		{
			$this->session->set_flashdata('error', 'Failed Updating Settings');
			redirect('admin_config');
		}
	}

	public function save_news()
	{
		if(!$this->session->userdata('email'))
		{
			redirect('admin_login');
		}
		$data['date'] = strtotime(date('d-m-Y'));
		$data['news'] = $this->input->post('news');
		$msg = $this->Config->save_news($data);
		if($msg)
		{
			$this->session->set_flashdata('news_message', 'Successfully Updated News');
			redirect('admin_config');
		}
		else
		{
			$this->session->set_flashdata('news_error', 'Failed Updating News');
			redirect('admin_config');
		}
	}

}