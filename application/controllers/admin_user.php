<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_user extends CI_Controller {
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
		$config['base_url']		= base_url('index.php').'/admin_user/index';
		$config['total_rows']	= $this->Admin->total_admin();
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

		$data['users'] = $this->User->get_all(10, $page);
		
		$this->load->view('admin/user', $data);
	}

	public function search($page=0)
	{
		$search = $this->input->post('user_search');
		$like = $this->input->post('user_select');
		$config['base_url']		= base_url('index.php').'/admin_user/index';
		$config['total_rows']	= $this->Admin->total_admin();
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

		if($search!='')
		{
			$data['users'] = $this->User->search(10, $page, $search, $like);
			$this->load->view('admin/user',$data);
		}
		else
		{
			redirect('admin_user');
		}
	}

	public function user_edit($id)
	{
		$data['user'] = $this->User->single_user($id);
		if($data['user'])
		{
			$this->load->view('admin/user_form',$data);			
		}
		else
		{
			$this->session->set_flashdata('error', 'Admin Not Existed');
			redirect('admin_user');
		}
	}

	public function user_add()
	{
		$this->load->view('admin/user_new');
	}

	public function save($id=0)
	{
		if($id)
		{
			if($this->input->post('password')!=$this->input->post('confirm_password'))
			{
				$this->session->set_flashdata('error', 'Password (and) Confirm Password Don\'t match, Please verify.');
				redirect('admin_user/user_edit/'.$id);
			}
			$data['first_name'] = $this->input->post('first_name');
			$data['last_name'] = $this->input->post('last_name');
			$data['email'] = $this->input->post('email');
			$data['phone'] = $this->input->post('phone');
			if(($this->input->post('password')==$this->input->post('confirm_password')) && $this->input->post('password')!='')
			{
				$data['password'] = md5($this->input->post('password'));
			}
			$data['status'] = ($this->input->post('user_status')==false) ? 'disabled' : 'enabled';

			$msg_update = $this->User->update($id, $data);
			if($msg_update)
			{
				$this->session->set_flashdata('message', 'Admin Details Updated Successfully');
				redirect('admin_user');
			}
			else
			{
				$this->session->set_flashdata('error', 'Failed to update admin details');
				redirect('admin_user');
			}
		}
		else
		{
			if($this->input->post('password')!=$this->input->post('confirm_password'))
			{
				$this->session->set_flashdata('error', 'Password (and) Confirm Password Don\'t match, Please verify.');
				redirect('admin_user/user_add/');
			}
			$data['first_name'] = $this->input->post('first_name');
			$data['last_name'] = $this->input->post('last_name');
			$data['email'] = $this->input->post('email');
			$data['phone'] = $this->input->post('phone');
			if(($this->input->post('password')==$this->input->post('confirm_password')) && $this->input->post('password')!='')
			{
				$data['password'] = md5($this->input->post('password'));
			}
			$data['created'] = strtotime(date('d-m-Y'));
			$data['status'] = ($this->input->post('user_status')==false) ? 'disabled' : 'enabled';

			$msg_update = $this->User->add($data);
			if($msg_update)
			{
				$this->session->set_flashdata('message', 'Admin Created Successfully');
				redirect('admin_user');
			}
			else
			{
				$this->session->set_flashdata('error', 'Failed to create admin');
				redirect('admin_user');
			}
		}
	}

	public function user_delete($id)
	{
		$check = $this->User->single_user($id);
		if($check)
		{
			if($this->session->userdata('email')!=$check->email)
			{
				$delete = $this->User->delete($id);
				if($delete)
				{
					$this->session->set_flashdata('message', 'Admin Deleted Successfully');
					redirect('admin_user');
				}
				else
				{
					$this->session->set_flashdata('error', 'Failed to delete Admin');
					redirect('admin_user');
				}
			}
			else
			{
				$this->session->set_flashdata('warning', 'Admin is already Logged In. (Cannot perform this action)');
				redirect('admin_user');
			}
		}
		else
		{
			$this->session->set_flashdata('error', 'Admin Not Existed');
			redirect('admin_user');
		}
	}

	public function bulk_remove()
	{
		$users = $this->input->post('usr');
		if($users)
		{
			$sts = $this->User->remove($users);
			if($sts)
			{
				$this->session->set_flashdata('message', 'Admin Data Deleted');
				redirect('admin_user');
			}
			else
			{
				$this->session->set_flashdata('error', 'Failed To Delete Admin Data');
				redirect('admin_user');
			}
		}
		else
		{
			$this->session->set_flashdata('error', 'Admin Data Not Found');
			redirect('admin_user');
		}
	}
}