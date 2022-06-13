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

	}	

    function update_records($id, $data)
	{   
        // echo '1111';
        // exit;
        $this->db->where('id', $id);
        $this->db->update('signupform',$data);
        // echo '1111';
        // exit;
	}	

    function deleterecords($id)
	{
        $this->db->select('*');
        $this->db->where('id', $id);
        $row = $this->db->get('signupform');
        return $row->row_array();
	
	}	

    function delete_records($id, $data)
  { 
    // echo 'hello';
    // exit;
    $this->db->where('id', $id);
    $this->db->delete('signupform', $data);
  }

}
	