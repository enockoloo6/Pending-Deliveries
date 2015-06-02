<?php
class Update_ctrl extends CI_Controller{

function __construct(){
parent::__construct();
$this->load->model('agenciesmodel');
}


	public function index()
	{
		$this->load->view('update_view');	

	}



public function show_agency_id() {
$id = $this->uri->segment(3);//get id from the url
$data['agencies'] = $this->agenciesmodel->show_students();
$data['single_agency'] = $this->agenciesmodel->show_student_id($id);


$this->load->view('update_view',$data);	

}

function update_agency_id1() {
$id= $this->input->post('supply_agency_id');
$data = array(
'SUPPLY_CHAIN_AGENCY' => $this->input->post('supply_agency_name'),
'CONTACT_PERSON' => $this->input->post('contact_person'),
'CONTACT_PHONE' => $this->input->post('contact_phone'),
'COMMENT' => $this->input->post('supply_agency_description'),

);
$this->agenciesmodel->update_student_id1($id,$data);
$this->show_agency_id();
     
 }

//delete employee record
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

}

?>