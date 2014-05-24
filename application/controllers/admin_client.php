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

		
		$data['clients'] = $this->Client->get_clients(15, $page);
		
		$this->load->view('admin/client',$data);
	}

	public function search($page=0)
	{
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

		if($this->input->post('client_search')!='')
		{
			$search = $this->input->post('client_search');
			$like = $this->input->post('client_select');
			$data['clients'] = $this->Client->search(15, $page, $search, $like);
			$this->load->view('admin/client',$data);
		}
		else
		{
			redirect('admin_client');
		}
		
	}

	public function delete_news()
	{
		$news = $this->input->post('new');
		if($news)
		{
			foreach($news as $clt)
			{
				$this->Client->delete_news($clt);
			}
			$this->session->set_flashdata('message', 'news deleted');
			redirect('admin_client/client_area');
		}
		else
		{
			//if they do not provide an id send them to the news list page with an error
			$this->session->set_flashdata('error', 'news not found');
			redirect('admin_client/client_area');

		}
	}

	public function delete($id = false)
	{
		if(!$id)
		{
			$cc = $this->input->post('clt');
			// print_r($this->input->post('clt'));
		
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

	public function edit($id)
	{
		$data['client_info'] = $this->Client->get_client($id);
		$data['due'] = $this->Client->total_invoice_due($id); 
		$data['paid'] = $this->Client->total_invoice_paid($id); 
		$data['total'] = $this->Client->total($id); 
		$data['credit'] = $this->Client->total_invoice_credit($id);
		$data['active'] = $this->Client->order_active($id); 
		$data['pending'] = $this->Client->order_pending($id); 
		$data['suspended'] = $this->Client->order_suspended($id); 
		$data['cancelled'] = $this->Client->order_cancelled($id); 
		$data['refunded'] = $this->Client->order_refunded($id); 
		$data['fraud'] = $this->Client->order_fraud($id); 
		$data['incomplete'] = $this->Client->order_incomplete($id); 
		$data['licence_info'] = $this->Client->recent_licence($id);
		$data['invoice_info'] = $this->Client->recent_invoice($id);
		$data['balance'] = $this->Client->register_balance($id);
		$this->load->view('admin/client_form',$data);
	}

	public function edit_details($id)
	{
		$data['client_info'] = $this->Client->get_client($id);

		$data['profiles'] = $this->Client->profiles();
		$this->load->view('admin/client_details_form',$data);
	}

	public function change_email($id)
	{
		$email_id = $this->input->post('email_id');
		$email = $this->Client->change_email($id,$email_id);
		if($email)
		{
			$this->session->set_flashdata('message', 'email changed successfully');
			redirect('admin_client/edit/'.$id);
		}
	}

	public function save_client_note($id)
	{
		$client_note = $this->input->post('client_notes');
		$suc = $this->Client->save_staff_note($id,$client_note);
		if($suc)
		{
			$this->session->set_flashdata('message', 'client notes updated successfully');
			redirect('admin_client/edit/'.$id);
		}
	}

	public function save_admin_note($id)
	{
		$admin_note = $this->input->post('admin_notes');
		$suc = $this->Client->save_note($id,$admin_note);
		if($suc)
		{
			$this->session->set_flashdata('message', 'admin notes updated successfully');
			redirect('admin_client/edit/'.$id);
		}
	}

	public function add_client()
	{
		$data['profiles'] = $this->Client->profiles();
		$this->load->view('admin/client_add',$data);
	}

	public function save($id = false)
	{
		$this->form_validation->set_rules('first_name', 'First Name', 'required|xss_clean');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required|xss_clean');
		$this->form_validation->set_rules('address_1', 'Address', 'required|xss_clean');
		$this->form_validation->set_rules('city', 'City', 'required|xss_clean');
		if($this->input->post('state')=="")
		{
			$this->form_validation->set_rules('province', 'State Other than USA ,Non USA Province', 'required|xss_clean');
		}
		$this->form_validation->set_rules('zip', 'Zip / Postal Code', 'required|xss_clean');
		$this->form_validation->set_rules('country', 'Country', 'required|xss_clean');
		$this->form_validation->set_rules('phone', 'Phone', 'required|xss_clean');
		$this->form_validation->set_rules('email', 'E-mail', 'required|xss_clean');

		$profiles = serialize($this->input->post('prf'));
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$org = $this->input->post('org');
		$address_1 = $this->input->post('address_1');
		$city = $this->input->post('city');
		$state = $this->input->post('state');
		$province = $this->input->post('province');
		$zip = $this->input->post('zip');
		$country = $this->input->post('country');
		$phone = $this->input->post('phone');
		$fax = $this->input->post('fax');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$confirm_password = $this->input->post('confirm_password');
		$client_notes = $this->input->post('client_notes');
		$admin_notes = $this->input->post('admin_notes');
		//adding new client
		if(!$id)
		{
			$this->form_validation->set_rules('password', 'Password', 'required|matches[confirm_password]');
			$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required');
			if ($this->form_validation->run() == FALSE)
			{
				$this->session->set_flashdata('error', validation_errors());
				redirect('admin_client/add_client');
			}
			$success = $this->Client->save($profiles,$first_name,$last_name,$org,$address_1,$city,$state,$province,$zip,$country,$phone,$fax,$email,$password,$client_notes,$admin_notes);
			if($success)
			{
				$this->session->set_flashdata('message', 'New Client added successfully');
				redirect('admin_client');
			}
		}
		if($password)
		{

			if(strlen($password)<8)
			{
				$this->session->set_flashdata('error', 'Password length must be more than 8 characters');
				redirect('admin_client/edit_details/'.$id);
			}
			if($password!=$confirm_password)
			{
				$this->session->set_flashdata('error', 'Password doesnt match with the confirm password');
				redirect('admin_client/edit_details/'.$id);
			}
			//updating client information
			$success = $this->Client->update($id,$profiles,$first_name,$last_name,$org,$address_1,$city,$state,$province,$zip,$country,$phone,$fax,$email,$password,$client_notes,$admin_notes);
			if($success)
			{
				$this->session->set_flashdata('message', 'user information saved');
				redirect('admin_client/edit/'.$id);
			}
		}
		if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('admin_client/edit_details/'.$id);
		}
		$success = $this->Client->update($id,$profiles,$first_name,$last_name,$org,$address_1,$city,$state,$province,$zip,$country,$phone,$fax,$email,$password,$client_notes,$admin_notes);

		if($success)
		{
			$this->session->set_flashdata('message', 'user information saved');
			redirect('admin_client/edit/'.$id);
		}
	}

	public function client_area($page=0)
	{
		$config['base_url']		= base_url('index.php').'/admin_client/client_area';
		$config['total_rows']	= $this->Client->total_client_news();
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

		$data['client_news'] = $this->Client->client_area_news(15, $page);
		$this->load->view('admin/client_area_news',$data);
	}

	public function add_client_area()
	{
		$data['profiles'] = $this->Client->profiles();
		$this->load->view('admin/client_area_news_form',$data);
	}

	public function manage_client_area($id)
	{
		$data['client_area'] = $this->Client->area_news($id);
		$data['profiles'] = $this->Client->profiles();
		$this->load->view('admin/edit_client_area_news',$data);
	}

	public function edit_client_area_news($id)
	{
		$data = array(	
		'profile_id' => $this->input->post('profile'),
		'news_title' => $this->input->post('news_title'),
		'news_body'  => $this->input->post('news_item'),
		'created'    => strtotime($this->input->post('publish_date')),
		'status'	 => $this->input->post('status'),
				);
		$success = $this->Client->edit_client_area_news($id,$data);
		if($success)
		{
			$this->session->set_flashdata('message', 'user information changed successfully');
			redirect('admin_client/client_area/');
		}
	}

	public function save_client_area_news()
	{
		$data = array(
		'profile_id' => $this->input->post('profile'),
		'news_title' => $this->input->post('news_title'),
		'news_body'  => $this->input->post('news_item'),
		'created'    => strtotime($this->input->post('publish_date')),
		'status'	 => $this->input->post('status'),
				);
		$success = $this->Client->save_client_area_news($data);
		if($success)
		{
			$this->session->set_flashdata('message', 'user information saved');
			redirect('admin_client/client_area/');
		}
	}
}
?>