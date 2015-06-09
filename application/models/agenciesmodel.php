<?php
class agenciesmodel extends CI_Model 
{

	
	function __construct()
    {
       parent::__construct();
        
    }

	
	
	function getZone(){	
		$this->db->select('*');		
		$this->db->from('zones');				
		$query = $this->db->get();		
		return $query->result();			
	}

	
	function addAgency($agency=NULL){		
		$this->db->insert('supply_chain_agency', $agency);
		return $this->db->insert_id();						
	}


	//update model functions
		/***************************************************************************************************************
		*	COUNTY RECORDS                                                                                             *
		*
		***************************************************************************************************************/



		// Function To Fetch All Students Record
	function show_students(){
	$query = $this->db->get('supply_chain_agency');
	$query_result = $query->result();
	return $query_result;
	}
	// Function To Fetch Selected Student Record
	function show_student_id($data){
	$this->db->select('*');
	$this->db->from('supply_chain_agency');
	$this->db->where('supply_chain_agency_id', $data);
	$query = $this->db->get();
	$result = $query->result();
	return $result;
	}
// Update Query For Selected Student
	function update_student_id1($id,$data){
	    $this->db->where('supply_chain_agency_id', $id);
	    $this->db->update('supply_chain_agency', $data);
	}


/***************************************************************************************************************
*	COUNTY RECORDS                                                                                             *
*
***************************************************************************************************************/

// Function To Fetch Selected County Record
	function show_county_id($data){
	$this->db->select('*');
	$this->db->from('counties');
	$this->db->where('county_id', $data);
	$query = $this->db->get();
	$result = $query->result();
	return $result;
	}

    // Function To Fetch All Counties Record
	function show_counties(){
	$query = $this->db->get('counties');
	$query_result = $query->result();
	return $query_result;
	}

	function update_counties_id1($id,$data){
	    $this->db->where('county_id', $id);
	    $this->db->update('counties', $data);
	}



	 /*****************************************************************************************************
    *                         Funding agency Functions                                                   *
    *                                                                                                    *
    *****************************************************************************************************/					


					function show_fundingorgs(){
					$query = $this->db->get('funding_agencies');
					$query_result = $query->result();
					return $query_result;
					}
					// Function To Fetch Selected Student Record
					function show_fundingOrg_id($dataf){
					$this->db->select('*');
					$this->db->from('funding_agencies');
					$this->db->where('funding_agency_id', $dataf);
					$query = $this->db->get();
					$result = $query->result();
					return $result;
					}

					function addfundingAgency($fagency=NULL){		
					$this->db->insert('funding_agencies', $fagency);
					return $this->db->insert_id();						
				    }

					function getfundigAgency(){	
					$this->db->select('*');
					//$this->db->order_by("SUPPLY_CHAIN_AGENCY_ID", "asc");
					$this->db->from('funding_agencies');				
					$query = $this->db->get();		
					return $query->result();			
				    }


						function update_funding_agency($fid,$fdata){
					    $this->db->where('funding_agency_id', $fid);
					    $this->db->update('funding_agencies', $fdata);
					}
    /*****************************************************************************************************
    *                         Static parameters Functions                                                *
    *                                                                                                    *
    *****************************************************************************************************/



					function showStaticParams(){
					$query = $this->db->get('static_parameters');
					$query_result = $query->result();
					return $query_result;
					}

					function show_staticparams_id($datasp){
					$this->db->select('*');
					$this->db->from('static_parameters');
					$this->db->where('staticparameterid', $datasp);
					$query = $this->db->get();
					$result = $query->result();
					return $result;
					}

			        function addstaticparam($sp=NULL){	
				    $this->db->insert('static_parameters', $sp);
				    return $this->db->insert_id();						
					}

					function update_static_id1($id,$data){
				    $this->db->where('staticparameterid', $id);
				    $this->db->update('static_parameters', $data);
				    }


    /*****************************************************************************************************
    *                        Pending Stocks Functions                                                    *
    *                                                                                                    *
    *****************************************************************************************************/

				function showPendingStock(){
				$query = $this->db->get('central_level_pending_stock');
				$query_result = $query->result();
				return $query_result;
				}
				function showPendingStock_id($psdata){
				$this->db->select('*');
				$this->db->from('central_level_pending_stock');
				$this->db->where('pendingstocksId', $psdata);
				$query = $this->db->get();
				$result = $query->result();
				return $result;
				}


				function update_pending_delivery($psid,$pendingdata){
				$this->db->where('pendingstocksId', $psid);
				$this->db->update('central_level_pending_stock', $pendingdata);
				}

				function addPendingStock($pending=NULL){	
				$this->db->insert('central_level_pending_stock', $pending);
				return $this->db->insert_id();	
				}					


				function getPendingStock(){	
				$this->db->select('*');
				$this->db->from('central_level_pending_stock');				
				$query = $this->db->get();		
				return $query->result();			
			    }







}
?>

















































