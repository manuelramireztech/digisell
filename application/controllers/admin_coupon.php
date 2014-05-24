<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_coupon extends CI_Controller {
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

		$config['base_url']		= base_url('index.php').'/admin_coupon/index';
		$config['total_rows']	= $this->Coupons->total_coupons();
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

		$data['coupons'] = $this->Coupons->get_coupons(10, $page);
		$this->load->view('admin/coupons',$data);
	}

	public function delete()
	{
		$coupons = $this->input->post('cop');
		if($coupons)
		{
			foreach($coupons as $cop)
			{
				$this->Coupons->delete_coupons($cop);
			}
			$this->session->set_flashdata('message', 'Coupon(s) deleted');
			redirect('admin_coupon');
		}
		else
		{
			//if they do not provide an id send them to the Coupon(s) list page with an error
			$this->session->set_flashdata('error', 'Coupon(s) not found');
			redirect('admin_coupon');

		}
	}

	public function add_coupon($code = 0)
	{
		if($code)
		{
			$data['coupon'] = $this->Coupons->get_coupon($code);
			$this->load->view('admin/coupon_form',$data);
		}
		else
		{
			$this->load->view('admin/coupon_form');
		}
	}

	public function add_new($code = 0)
	{
		$discount = $this->input->post('discount');
		$expires_on = $this->input->post('expires_on');
		$coupon_code = $this->input->post('coupon_code');
		$coupon_type = $this->input->post('coupon_type');
		$data = array('discount'=>$discount,'expires_on'=>strtotime($expires_on),'coupon_code'=>$coupon_code,'coupon_type'=>$coupon_type);
		if($code)
		{
			$suc = $this->Coupons->edit($data);
			if($suc)
			{
				$this->session->set_flashdata('message', 'Coupon succesfully edited');
				redirect('admin_coupon');
			}
			else
			{
				$this->session->set_flashdata('error', 'Coupon editing failed');
				redirect('admin_coupon/add_coupon');
			}

		}
		$success = $this->Coupons->save($data);
		if($success)
		{
			$this->session->set_flashdata('message', 'New Coupon Generated');
			redirect('admin_coupon');
		}
	}
}
?>