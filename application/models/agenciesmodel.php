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
*		SUPPLY CHAIN AGENCY FUNCTIONS                                                                          *
*
***************************************************************************************************************/
    


		// Function To Fetch All Supply chain Agency Record
	function show_supply_chain_agencies(){
	$query = $this->db->get('supply_chain_agency');
	$query_result = $query->result();
	return $query_result;
	}
	// Function To Fetch Selected Supply Chain Agency Record
	function show_supply_chain_agency_id($data){
	$this->db->select('*');
	$this->db->from('supply_chain_agency');
	$this->db->where('supply_chain_agency_id', $data);
	$query = $this->db->get();
	$result = $query->result();
	return $result;
	}
// Update Query For Selected Student
	function update_supply_chain_agency_id1($id,$data){
	    $this->db->where('supply_chain_agency_id', $id);
	    $this->db->update('supply_chain_agency', $data);
	}


	// GET THE SUPPLY AGENCY WITH NAME SAME AS THE NAME IN COMMODITY
	function get_sagency_id_with_the_given_name($datas){
	$this->db->select('supply_chain_agency_id');
	$this->db->from('supply_chain_agency');
	$this->db->where('supply_chain_agency', $datas);
	$query = $this->db->get();
	$result = $query->row()->supply_chain_agency_id;
	return $result;
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
	$this->db->from('funding_agencies');				
	$query = $this->db->get();		
	return $query->result();			
    }


		function update_funding_agency($fid,$fdata){
	    $this->db->where('funding_agency_id', $fid);
	    $this->db->update('funding_agencies', $fdata);
	}
	// GET THE FUNDING AGENCY WITH NAME SAME AS THE NAME IN COMMODITY

	function getfundingagencyid($dataf){
	$this->db->select('funding_agency_id');
	$this->db->from('funding_agencies');
	$this->db->where('funding_agency_name', $dataf);
	$query = $this->db->get();
	$result = $query->row()->funding_agency_id;
	return $result;
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


    function getStaticParams(){	
	$this->db->select('*');
	$this->db->from('static_parameters');				
	$query = $this->db->get();		
	return $query->result();			
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

	/*****************************************************************************************************
	*                        Central level Stock Functions                                               *
	*                                                                                                    *
	*****************************************************************************************************/
		function update_central_data($cdid,$cdData){
	$this->db->where('central_level_stock_id', $cdid);
	$this->db->update('central_level_soh', $cdData);
	}

	function addCentralStock($central_data=NULL){	
	$this->db->insert('central_level_soh', $central_data);
	return $this->db->insert_id();						
	}


	function getCentralStock(){	
	$this->db->select('*');
	$this->db->from('central_level_soh');				
	$query = $this->db->get();		
	return $query->result();			
	}



	function showCentralStock(){
	$query = $this->db->get('central_level_soh');
	$query_result = $query->result();
	return $query_result;

	}
	function showCentralStock_id($psdata){
	$this->db->select('*');
	$this->db->from('central_level_soh');
	$this->db->where('central_level_stock_id', $psdata);
	$query = $this->db->get();
	$result = $query->result();
	return $result;
	}



	/*****************************************************************************************************
	*                                 Commodities Functions                                              *
	*                                                                                                    *
	*****************************************************************************************************/

	// GET THE COMMODITY WITH NAME SAME AS THE NAME IN CENTRAL DATA
	function get_commodity_id_with_the_given_name($comm_name){
	$this->db->select('commodity_id');
	$this->db->from('commodities');
	$this->db->where('commodity_name', $comm_name);
	$query = $this->db->get();
	$result = $query->row()->commodity_id;
	return $result;
	}

	// Function To Fetch All Commodies Record
	function show_commodities(){
	$query = $this->db->get('commodities');
	$query_result = $query->result();
	return $query_result;
	}
	// Function To Fetch Selected Student Record
	function show_commodities_id($data){
	$this->db->select('*');
	$this->db->from('commodities');
	$this->db->where('commodity_id', $data);
	$query = $this->db->get();
	$result = $query->result();
	return $result;
	}

	// Update Query For Selected Student
	function update_commodity_id($id,$data){
	    $this->db->where('commodity_id', $id);
	    $this->db->update('commodities', $data);
	}


	function addcommodity($commodity=NULL){		
	$this->db->insert('commodities', $commodity);
	return $this->db->insert_id();						
	}

	function getCommodity(){	
		$this->db->select('*');
		$this->db->from('commodities');				
		$query = $this->db->get();		
		return $query->result();			
	}


	/*****************************************************************************************************
	*                                 REPORTS    FUNCTIONS                                               *
	*                                                                                                    *
	*****************************************************************************************************/

	public function getPendingStockTotals(){
	$this->db->select('*,SUM(pending_deliveries) AS PendingTotal');
	$this->db->group_by('commodity_id');
	$this->db->order_by('PendingTotal', 'desc'); 
	$query=$this->db->get('central_level_pending_stock',10);
	/*return $query->result();*/
	return $query->result();

  }

}
?>