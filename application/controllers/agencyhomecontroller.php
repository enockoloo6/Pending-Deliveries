<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AgencyHomeController extends CI_Controller 
{

	function __construct()
    {
       parent::__construct();

       $this->load->library('form_validation');
       $this->load->model('agenciesmodel');
     
    }

	public function index()
	{
		$this->load->view('deliveries_default_view');	

	}



	/*****************************************************************************************************
    *                             Supply Chain Agency Functions                                          *
    *                                                                                                    *
    *****************************************************************************************************/


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

        // $this->index();
		$this->load->view('deliveries_default_view', $data);
	}



public function showcounties(){
		$query = $this->agenciesmodel->getCounty();
        
        $data['SUPPLY_AGENCIES'] = "";
		if($query){
			$data['SUPPLY_AGENCIES'] =  $query;
		}

		$this->load->view('counties_view.php', $data);
	}




	/*****************************************************************************************************
    *                         Funding Agency Functions                                                   *
    *                                                                                                    *
    *****************************************************************************************************/

		public function saveFundingAgency(){
		$agency_name= ($this->input->post('funding_agency_name'));
		$fdescription= ($this->input->post('funding_agency_description'));


		$fagency = array(
			'funding_agency_name' => $agency_name,
				'comment' => $fdescription
		);
       
		$fundingagencyId = $this->agenciesmodel->addfundingagency($fagency);
		$fdata['funding_agency_message'] =  "";
		if($fundingagencyId){
			$fdata['funding_agency_message'] =  "Funding Agency Saved Successfully!..";
		}


		$query = $this->agenciesmodel->getfundigAgency();

		if($query){
			$fdata['funding_AGENCIES'] =  $query;
		}
		//$this->load->view('result.php', $data);
		$this->load->view('deliveries_default_view', $fdata);
	}

    /*****************************************************************************************************
    *                         Static Parameters Functions                                                *
    *                                                                                                    *
    *****************************************************************************************************/
	public function saveStaticParams(){
		$prd= ($this->input->post('period'));
		$cn= ($this->input->post('commodity_name'));
		$ps= ($this->input->post('pack_size'));
		$pmc= ($this->input->post('projected_monthly_consumption'));
		$amc= ($this->input->post('average_monthly_consumption'));



		$staticparams = array(

			'period'=>$prd,
			'commodity_name'=>$cn,
			'pack_size'=>$ps,
			'projected_monthly_consumption'=>$pmc,
			'average_monthly_consumption'=>$amc
			);
       
		$psId = $this->agenciesmodel->addstaticparam($staticparams);
		$data['message'] =  "";
		if($psId){
			$data['message'] =  "Agency Saved Successfully!..";
		}


		$query = $this->agenciesmodel->getAgency();

		if($query){
			$data['STATICPARAMS'] =  $query;
		}
		//$this->load->view('result.php', $data);
		$this->load->view('deliveries_default_view', $data);
	}

    /*****************************************************************************************************
    *                         Pending Delivery Functions                                                 *
    *                                                                                                    *
    *****************************************************************************************************/
	public function savePendingDeliveries(){
        $commodity_name= ($this->input->post('commodity_name'));
		$pack_size= ($this->input->post('pack_size'));
		$funding_agency= ($this->input->post('funding_agency'));
		$pending_deliveries= ($this->input->post('pending_deliveries'));
		$expected_date_delivery= ($this->input->post('expected_date_delivery'));
		$pddescription=($this->input->post('pddescription'));

		$pendingStock = array(
			'commodity_name'=>$commodity_name,
			'pack_size'=>$pack_size,
			'funding_agency'=>$funding_agency,
			'pending_deliveries'=>$pending_deliveries,
			'comments'=>$pddescription,
			'expected_date_delivery'=>$expected_date_delivery			
			);
       
		$psId = $this->agenciesmodel->addPendingStock($pendingStock);
		$data['message'] =  "";
		if($psId){
			$data['message'] =  "Agency Saved Successfully!..";
		}


		$query = $this->agenciesmodel->getPendingStock();

		if($query){
			$data['STATICPARAMS'] =  $query;
		}
		$this->load->view('deliveries_default_view', $data);
	}




}