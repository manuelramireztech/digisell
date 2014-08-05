<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client_profile extends CI_Controller {

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
		if(!$this->session->userdata('client_login'))
		{
			redirect('client_login');
		}
		$data['client_info'] = $this->Client->get_client($this->session->userdata('client_id'));
		$this->load->view('site/client_profile',$data);
	}

	public function save($id)
	{
		$data['first_name'] = $this->input->post('first_name');
		$data['last_name'] = $this->input->post('last_name');
		$data['last_name'] = $this->input->post('last_name');
		$data['org'] = $this->input->post('org');
		$data['address_1'] = $this->input->post('address_1');
		$data['city'] = $this->input->post('city');
		$data['state'] = $this->input->post('state');
		$data['province'] = $this->input->post('province');
		$data['zip'] = $this->input->post('zip');
		$data['country'] = $this->input->post('country');
		$data['phone'] = $this->input->post('phone');
		$data['fax'] = $this->input->post('fax');
		$data['staff_notes'] = $this->input->post('client_notes');

		$res = $this->Client->save_client_info($id, $data);
		if($res)
		{
			$this->session->set_flashdata('message','User Info Updated Successfully');
			redirect('client_profile');
		}
		else
		{
			$this->session->set_flashdata('error','User Info Update Failed');
			redirect('client_profile');
		}
	}

	public function change_password()
	{
		$data['client_info'] = $this->Client->get_client($this->session->userdata('client_id'));
		$this->load->view('site/change_password',$data);
	}

	public function save_password($id)
	{
		$data['password'] = md5($this->input->post('password'));
		if($this->input->post('password')!=$this->input->post('confirm_password'))
		{
			$this->session->set_flashdata('error','Password Not Matched');
			redirect('Client_profile/change_password');
		}
		elseif($this->input->post('password')=='' || $this->input->post('confirm_password')=='')
		{
			$this->session->set_flashdata('error','Empty Password Fields');
			redirect('Client_profile/change_password');
		}
		else
		{
			$res = $this->Client->save_client_info($id, $data);
			if($res)
			{
				$this->session->set_flashdata('message','Password Changed Successfully');
				redirect('Client_profile/change_password');
			}
			else
			{
				$this->session->set_flashdata('error','Password Change Failed');
				redirect('Client_profile/change_password');
			}
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */