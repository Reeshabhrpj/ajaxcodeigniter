<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signupform extends CI_Controller {



	public function __construct()
	{
	parent::__construct();
	
	$this->load->database();
	$this->load->model("Usermodel"); 
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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('userform');
		// $this->load->view('userinfo');
	}

	function register()
	 		{

				$name = $this->input->post('name'); 
				$email = $this->input->post('email'); 
				$contact = $this->input->post('contact');
				$message = $this->input->post('message'); 
			

				$data = array(
						'name' => $name,
						'email' => $email,
						'contact' => $contact,
						'message' => $message
						);
						
						
				// $this->db->insert('signupform',$data);
				$id=$this->input->get('id');
				$response['data'] =$this->Usermodel->insertuser($data);
				echo json_encode($data);
				redirect("signupform/userlisting");
				//  redirect(base_url().'signupform/userlisting');

			}
			function userlisting()
			{	
				 $users=$this->Usermodel->fetchdata();
				 $data['getUserList'] = $users;
				 $this->load->view('userinfo', $data);
				//  echo json_encode($data);
				
			}	


			public function updatedata()
			{
				
				$id=$this->input->get('id');
				$result['data']=$this->Usermodel->updaterecords($id);
				$this->load->view('editdata',$result);

				// echo json_encode($result);
				// exit;
				// $this->load->view('editdata',$result);
				
				$id= $this->input->post('id');
				   if($this->input->post('update')){
				$data = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'contact' => $this->input->post('contact'),
				'message' => $this->input->post('message')
				);
			//    $response = $this->Usermodel->update_records($id,$data);
			//    echo json_encode($response);
				$this->Usermodel->update_records($id,$data);
				//echo json_encode($result);
				//  redirect(base_url().'signupform/userlisting');
				}
					// $this->load->view('editdata',$result);
				
			}

			public function updateuser(){
				$id= $this->input->post('id');
				if($this->input->post('update')){
				$data = array(
					'name' => $this->input->post('name'),
					'email' => $this->input->post('email'),
					'contact' => $this->input->post('contact'),
					'message' => $this->input->post('message')
				);
				 print_r($data);
				 exit;
				$this->Usermodel->update_records($id,$data);
			}
					
		}
		
				public function deletedata()
				{
					$id=$this->input->get('id');
					$result['data']=$this->Usermodel->deleterecords($id);
				    $this->load->view('deletedata',$result);
					
					$id= $this->input->post('id');
						if($this->input->post('delete')){
					$data = array(
					'name' => $this->input->post('name'),
					'email' => $this->input->post('email'),
					'contact' => $this->input->post('contact'),
					'message' => $this->input->post('message')
					);
					$this->Usermodel->delete_records($id,$data);
					echo json_encode($data);
					redirect(base_url().'signupform/userlisting');
				}
					
				}
						
}

	