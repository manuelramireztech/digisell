<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_license extends CI_Controller {
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
	public function index($page = 0)
	{
		if(!$this->session->userdata('email'))
		{
			redirect('admin_login');
		}

		$config['base_url']		= base_url('index.php').'/admin_license/index';
		$config['total_rows']	= $this->License->total_license();
		$config['per_page']		= 10;
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

		$data['licenses'] = $this->License->get_all(10, $page);
		$this->load->view('admin/license',$data);
	}

	public function delete($id)
	{
		if($id)
		{
			$suc = $this->License->delete($id);
			if($suc)
			{
				$this->session->set_flashdata("message","License deleted successfully");
				redirect('admin_license');
			}
		}
		else
		{
			$this->session->set_flashdata("error","License Not Found");
			redirect('admin_license');
		}
	}

	public function edit($id)
	{
		$data['license'] = $this->License->get_license($id);
		$this->load->view('admin/edit_license',$data);
	}
}
?>