<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_addons extends CI_Controller {
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
	public function index($page=0)
	{
		if(!$this->session->userdata('email'))
		{
			redirect('admin_login');
		}
		$config['base_url']		= base_url('index.php').'/admin_addons/index';
		$config['total_rows']	= $this->Addons->total_addons();
		$config['per_page']		= 15;
		$config['uri_segment']	= 3;
		$config['first_link']		= 'First';
		$config['first_tag_open']	= '<li>';
		$config['first_tag_close']	= '</li>';
		$config['last_link']		= 'Last';
		$config['last_tag_open']	= '<li>';
		$config['last_tag_close']	= '</li>';

		$config['full_tag_open']	= '<ul class="pagination">';
		$config['full_tag_close']	= '</ul>';
		$config['cur_tag_open']		= '<li class="active"><a href="#">';
		$config['cur_tag_close']	= '</a></li>';

		$config['num_tag_open']		= '<li>';
		$config['num_tag_close']	= '</li>';

		$config['prev_link']		= '&laquo;';
		$config['prev_tag_open']	= '<li>';
		$config['prev_tag_close']	= '</li>';

		$config['next_link']		= '&raquo;';
		$config['next_tag_open']	= '<li>';
		$config['next_tag_close']	= '</li>';

		$this->pagination->initialize($config);

		
		$data['addons'] = $this->Addons->get_addons(15, $page);

		$this->load->view('admin/addons',$data);
	}
	public function form($id=0)
	{
		if($id)
		{
			$data['addons'] = $this->Addons->get_addon($id);
			$data['downloads'] = $this->Addons->get_downloads();
			$this->load->view('admin/addon_form', $data);	
		}
		else
		{
			$data['addons'] = '';
			$data['downloads'] = $this->Addons->get_downloads();
			$this->load->view('admin/addon_form', $data);
		}
		
	}
	public function delete($id)
	{
		$delete = $this->Addons->delete($id);
		if($delete)
		{
			$this->session->set_flashdata('message', 'addon deleted successfully');
			redirect('admin_addons');
		}
		else
		{
			$this->session->set_flashdata('error', 'addon failed to delete/not found');
			redirect('admin_addons');
		}
	}
}
?>