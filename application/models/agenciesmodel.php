<?php
class agenciesmodel extends CI_Model {

	
	function __construct()
    {
       parent::__construct();
        
    }

	
	
	function getEmployee(){	
		$this->db->select("EMPLOYEE_ID,FIRST_NAME,LAST_NAME,EMAIL");
		$this->db->order_by("EMPLOYEE_ID", "asc");
		$this->db->from('trn_employee');				
		$query = $this->db->get();		
		return $query->result();			
	}
	
	function addAgency($agency=NULL){		
		$this->db->insert('supply_chain_agency', $agency);
		return $this->db->insert_id();						
	}


	function getAll() {
		$q = $this->db->get('members');
		 
		if($q->num_rows() > 0){
			foreach ($q->result() as $row){
				$data[] = $row;
			}

			return $data;
		}		
	}


















































}
?>