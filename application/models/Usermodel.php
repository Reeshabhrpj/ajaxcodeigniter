<?php

class Usermodel extends CI_Model {
    function insertuser($data)
    {
        $this->db->insert('signupform',$data);
    }

    function fetchdata()  
    {  
        $query = $this->db->get('signupform');  
        return $query->result();  
    }  

    function displayrecordsById($id)
	{
       
	$query=$this->db->query("select * from signupform where id=".$id."");
	return $query->result();
	}
	
	function updaterecords($id)
	{
        $this->db->select('*');
        $this->db->where('id', $id);
        $row = $this->db->get('signupform');
        return $row->row_array();
	// $query=$this->db->query("update signupform SET name='$name',email='$email',contact='$contact',message='$message' where id='".$id."'");
    // echo '1111';
    // exit;
	}	

    function update_records($id, $data)
	{
        $this->db->where('id', $id);
        $this->db->update('signupform',$data);
	}	


    // function update_records(){
    //     $id=$this->input->post('id');
	// 	$name=$this->input->post('name');
    //     $email=$this->input->post('email');
	// 	$contact=$this->input->post('contact');
	// 	$message=$this->input->post('message');
	// 	$this->db->set('name', $name);
	// 	$this->db->set('email', $email);
	// 	$this->db->set('contact', $contact);
	// 	$this->db->set('message', $message);
	// 	$this->db->where('id', $id);
	// 	$result=$this->db->update('signupform');
	// 	return $result;	
    // }


    function deleterecords($id)
	{
        $this->db->select('*');
        $this->db->where('id', $id);
        $row = $this->db->get('signupform');
        return $row->row_array();
	
	}	

    function delete_records($id, $data)
  {
    $this->db->where('id', $id);
    $this->db->delete('signupform',$data);
 
  }

    // function table_update($id, $result){

    //    $this->db->where('id', $id);
    //    $this->db->update('signupform',$result);
    // }
}
	