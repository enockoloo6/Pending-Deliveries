
<?php
class Update_ctrl extends CI_Controller{

function __construct(){
	parent::__construct();
	$this->load->model('agenciesmodel');
}


	public function index()
	{
		//$this->load->view('controls_view');

	}

    /*****************************************************************************************************
    *                         Supply Chain Agency Functions                                              *
    *                                                                                                    *
    *****************************************************************************************************/

public function show_agency_id() {
	$id = $this->uri->segment(3);//get id from the url
	$data['agencies'] = $this->agenciesmodel->show_students();
	$data['single_agency'] = $this->agenciesmodel->show_student_id($id);


	$this->load->view('supply_chain_agency_view',$data);
}

function update_agency_id1() {
	$id= $this->input->post('supply_agency_id');
	$data = array(
	'SUPPLY_CHAIN_AGENCY' => $this->input->post('supply_agency_name'),
	'CONTACT_PERSON' => $this->input->post('contact_person'),
	'CONTACT_PHONE' => $this->input->post('contact_phone'),
	'COMMENT' => $this->input->post('supply_agency_description'),

	);
	$updaterecord=$this->agenciesmodel->update_student_id1($id,$data);

	     	$data['formupdate'] =  "";
		if($updaterecord){
			$data['formupdate'] =  "set";
		}


	$id = $this->uri->segment(3);//get id from the url
	$data['agencies'] = $this->agenciesmodel->show_students();
	$data['single_agency'] = $this->agenciesmodel->show_student_id($id);


	$this->load->view('supply_chain_agency_view',$data);



	
	// $this->show_agency_id(); 
}

function delete_agency()   {

	 $id= $this->input->post('supply_agency_id');     
     $this->db->where('supply_chain_agency_id', $id);
     $deleterecord=$this->db->delete('supply_chain_agency');
     		$data['status'] =  "";
		if($deleterecord){
			$data['status'] =  "Agency deleted Successfully!..";
		}
	
		$this->show_agency_id();
}

/*****************************************************************************************************
*                                 County Functions                                                   *
*                                                                                                    *
*****************************************************************************************************/
public function show_county_id() {
	$id = $this->uri->segment(3);//get id from the url
	$data['counties'] = $this->agenciesmodel->show_counties();
	$data['single_county'] = $this->agenciesmodel->show_county_id($id);
	$data['zones'] = $this->agenciesmodel->getZone();//get zones

	$this->load->view('counties_view',$data);
}


function update_county_id1() {
	  $id= $this->input->post('county_id');
	  $data = array(
	  'zone' => $this->input->post('zone_name'),
	  'comment' => $this->input->post('county_comment'),
	  );
	  $Updatecounty=$this->agenciesmodel->update_counties_id1($id,$data);
	  $data['status'] =  "";
	  if ($Updatecounty) {
	 	 $data['status'] =  "Agency updated Successfully!..";
	 }
	 $this->show_county_id();     
}



/*****************************************************************************************************
*                         Funding agency Functions                                                   *
*                                                                                                    *
*****************************************************************************************************/

public function showFundingAgency() {
	$fid = $this->uri->segment(3);//get id from the url
	$data2['fundingagencies'] = $this->agenciesmodel->show_fundingorgs();
	$data2['single_fundingagency'] = $this->agenciesmodel->show_fundingOrg_id($fid);


	$this->load->view('showfundingagencies',$data2);	

}
function updateFundingAgencyid() {
	$id= $this->input->post('funding_agency_id');
	$data = array(
	'funding_agency_name' => $this->input->post('funding_agency_name'),
	'comment' => $this->input->post('funding_agency_description'),
	
	);
	$this->agenciesmodel->update_funding_agency($id,$data);
	$this->showFundingAgency();	     
}

function deleteFundingAgency(){

	$id= $this->input->post('funding_agency_id');     
	$this->db->where('funding_agency_id', $id);
	$deleterecord=$this->db->delete('funding_agencies');
	$data['status'] =  "";
	 if($deleterecord){
		$data['status'] =  "Agency deleted Successfully!..";
		}
		$this->showFundingAgency();
}

/*****************************************************************************************************
*                         Static Parameters functions                                                *
*                                                                                                    *
*****************************************************************************************************/


public function showStaticParams() {
		$fid = $this->uri->segment(3);//get id from the url
		$data3['staticParams'] = $this->agenciesmodel->showStaticParams();
		$data3['single_staticparam'] = $this->agenciesmodel->show_staticparams_id($fid);

		$this->load->view('showstaticparams',$data3);
}


function updateStaticParamsid() {
	$id= $this->input->post('staticparams_id');
	$data = array(
	'period' => $this->input->post('period'),
	'commodity_name' => $this->input->post('commodity_name'),
	'pack_size' => $this->input->post('pack_size'),
	'projected_monthly_consumption' => $this->input->post('projected_monthly_consumption'),
	'average_monthly_consumption'=>$this->input->post('average_monthly_consumption'),

	);
	$this->agenciesmodel->update_static_id1($id,$data);
	$this->showStaticParams();
	     
}

public function deleteStaticParam(){
	 	$id= $this->input->post('staticparams_id');     
		     $this->db->where('staticparameterid', $id);
		     $deleterecord=$this->db->delete('static_parameters');
		     		$data['status'] =  "";
				if($deleterecord){
					$data['status'] =  "Parameter deleted Successfully!..";
				}
			$this->showStaticParams();
}

/*****************************************************************************************************
*                         Pending Stocks  Functions                                                  *
*                                                                                                    *
*****************************************************************************************************/
public function show_pending_stocks() {
	$psid = $this->uri->segment(3);//get id from the url
	$data2['PSTOCKS'] = $this->agenciesmodel->showPendingStock();
	$data2['single_PSTOCKS'] = $this->agenciesmodel->showPendingStock_id($psid);

	$this->load->view('showpendingstock',$data2);
}

public function updatePendingDeliveryid() {
	$id= $this->input->post('pendingstockid');
	$data = array(
	'commodity_name' => $this->input->post('commodity_name'),
	'pack_size' => $this->input->post('pack_size'),
	'funding_agency' => $this->input->post('funding_agency'),
	'pending_deliveries' => $this->input->post('pending_deliveries'),
	'expected_date_delivery'=>$this->input->post('expected_date_delivery'),
	'comments'=>$this->input->post('pddescription'),
	);
	$this->agenciesmodel->update_pending_delivery($id,$data);
	$this->show_pending_stocks();
	     
	 }
}

?>