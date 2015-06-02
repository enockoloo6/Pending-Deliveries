<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AgencyHome extends CI_Controller 
{

	function __construct()
    {
       parent::__construct();
       $this->load->model('agenciesmodel');
     
    }

	public function index()
	{
		$this->load->view('deliveries_view');	

	}


	public function save(){
		$agency_name= ($this->input->post('supply_agency_name'));
		$person= ($this->input->post('contact_person'));
		$contact= ($this->input->post('contact_phone'));
		$phone= ($this->input->post('supply_chain_description'));


		$agency = array(
			'SUPPLY_CHAIN_AGENCY' => $agency_name,
			'CONTACT_PERSON' => $person,
			'CONTACT_PHONE' => $contact,
			'COMMENT' => $phone
		);
       
		$agencyId = $this->agenciesmodel->addagency($agency);
		$data['message'] =  "";
		if($agencyId){
			$data['message'] =  "Agency Saved Successfully!..";
		}


		$query = $this->agenciesmodel->getAgency();

		if($query){
			$data['SUPPLY_AGENCIES'] =  $query;
		}
		//$this->load->view('result.php', $data);
		$this->load->view('deliveries_view', $data);
	}

}
