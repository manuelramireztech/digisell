<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_product extends CI_Controller {
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
		$config['base_url']		= base_url('index.php').'/admin_product/index';
		$config['total_rows']	= $this->Products->total_products();
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

		$data['products'] = $this->Products->get_products(10, $page);
		$data['test'] = $this->Products->get_test();
		$this->load->view('admin/product',$data);
	}

	public function delete()
	{
		$pro = $this->input->post('clt');
		if($pro)
		{
			foreach($pro as $prod)
			{
				$this->Products->delete_products($prod);
			}
			$this->session->set_flashdata('message', 'Product(s) deleted');
			redirect('admin_product');
		}
		else
		{
			//if they do not provide an id send them to the Product(s) list page with an error
			$this->session->set_flashdata('error', 'Product(s) not found');
			redirect('admin_product');
		}
	}

	public function form()
	{
		$data['licensing_types'] = $this->Products->get_licensing_types();
		$data['downloads'] = $this->Products->get_downloads();
		$data['agreements'] = $this->Products->get_agreements();
		$data['addons'] = $this->Products->get_addons();
		$data['coupons'] = $this->Coupons->get_coupons();
		$data['product'] = '';
		$data['support_package'] = $this->Products->get_support();
		$this->load->view('admin/product_form',$data);
	}

	public function duplicate($id)
	{
		$data = $this->Products->get_product($id);
		$success = $this->Products->copy($data);
		if($success)
		{
			$this->session->set_flashdata('message', 'Cloning of the Product <span class="text-info">'.$data->product_name.'</span> Completed Successfully.');
			redirect('admin_product');
		}
		else
		{
			$this->session->set_flashdata('error', 'Cloning Failed.');
			redirect('admin_product');
		}
	}

	public function edit($id)
	{
		$data['licensing_types'] = $this->Products->get_licensing_types();
		$data['downloads'] = $this->Products->get_downloads();
		$data['agreements'] = $this->Products->get_agreements();
		$data['addons'] = $this->Products->get_addons();
		$data['coupons'] = $this->Coupons->get_coupons();
		$data['product'] = $this->Products->get_product($id);
		$this->load->view('admin/product_form',$data);
	}

	public function save($id=0)
	{
		#Updating new product 
		if($id)
		{
			$pricing = array(
							'pricing_label'		=>	$this->input->post('pricing_label'),
							'license_qty'		=>	intval($this->input->post('license_qty')),
							'bulk_pricing'		=>	$this->input->post('bulk_pricing'),
							'min_purchase'		=>	intval($this->input->post('min_purchase')),
							'max_purchase'		=>	intval($this->input->post('max_purchase')),
							'release'			=>	$this->input->post('release'),
							'onetime_cost'		=>	floatval($this->input->post('onetime_cost')),
							'recurring_cost'	=>	floatval($this->input->post('recurring_cost')),
							'recurring_interval'	=>	intval($this->input->post('recurring_interval')),
							'period'				=>	$this->input->post('period'),
							'stop_recurring'		=>	intval($this->input->post('stop_recurring')),
				);
			$pricing_array = serialize($pricing);
			$data = array(
			'product_status'		=>	$this->input->post('status'),
			'pricing_array'		=>	$pricing_array,
			'min_purchase'		=>	$pricing['min_purchase'],
			'max_purchase'		=>	$pricing['max_purchase'],
			'licensing_id'	=>	intval($this->input->post('license_type')),
			'license_qty'	=>	$pricing['license_qty'],
			'product_name'	=>	$this->input->post('product_name'),
			'product_summary'	=>	$this->input->post('short_summary'),
			'product_description'		=>	$this->input->post('full_desc'),
			'download_array'=>	serialize($this->input->post('dwn')),
			'agreement_array'=>	serialize($this->input->post('agr')),
			'addon_array'=>	serialize($this->input->post('adon')),
			'coupon_array'=>	serialize($this->input->post('cpn')),
			);
			$success = $this->Products->save($id,$data);
			if($success)
			{
				$this->session->set_flashdata('message', 'product information updated');
				redirect('admin_product');
			}
			else
			{
				$this->session->set_flashdata('error', 'failed to update product information');
				redirect('admin_product');
			}
		}
		#adding new product
		else
		{
			$data = array(
			'product_status'		=>	$this->input->post('status'),
			'pricing_array'		=>	'',
			'min_purchase'		=>	1,
			'max_purchase'		=>	20,
			'licensing_id'	=>	intval($this->input->post('license_type')),
			'license_qty'	=>	1,
			'secret_key'	=>	'',
			'email_id'	=>	0,
			'cc_email'	=>	'',
			'product_name'	=>	$this->input->post('product_name'),
			'product_summary'	=>	$this->input->post('short_summary'),
			'product_description'		=>	$this->input->post('full_desc'),
			'download_array'=>	serialize($this->input->post('dwn')),
			'update_array'=>	'',
			'upgrade_array'=>	'',
			'support_array'=>	'',
			'agreement_array'=>	serialize($this->input->post('agr')),
			'addon_array'=>	serialize($this->input->post('adon')),
			'coupon_array'=>	serialize($this->input->post('cpn')),
			);
			$success = $this->Products->save($id,$data);
			if($success)
			{
				$this->session->set_flashdata('message', 'product information saved');
				redirect('admin_product');
			}
			else
			{
				$this->session->set_flashdata('error', 'failed to insert product data');
				redirect('admin_product');
			}
		}
	}

}

?>