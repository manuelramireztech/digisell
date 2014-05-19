<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_client extends CI_Controller {
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
		$data['clients'] = $this->Client->get_clients(15, $page);
		$config['base_url']		= base_url('index.php').'/admin_client/index';
		$config['total_rows']	= $this->Admin->total_client();
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
		$this->load->view('admin/client',$data);
	}

	public function delete($id = false)
	{
		if(!$id)
		{
			$cc = $this->input->post('clt');
			print_r($this->input->post('clt'));
		
			if($cc)
			{
				foreach($cc as $clt)
				{
					$this->Client->delete_client($clt);
				}
				$this->session->set_flashdata('message', 'customer(s) deleted');
				redirect('admin_client');
			}
			else
			{
				//if they do not provide an id send them to the customer list page with an error
				$this->session->set_flashdata('error', 'customer not found');
				redirect('admin_client');

			}
		}
		$del = $this->Client->delete_client($id);
		if($del)
		{
			$this->session->set_flashdata('message', 'customer deleted');
			redirect('admin_client');
		}
		$this->session->set_flashdata('error', 'customer not found');
		redirect('admin_client');
	}

}
?>