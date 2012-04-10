<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class register extends CI_Controller {

	public $data;
	public $profile;


	public function __construct()
	{
		parent::__construct();
		$this->load->library('parser');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('session');
 	
	}

 public function index(){
 
 
 }

	 
	public function re1()
	{
		 
 		// เมื่อ ต้องการสั่งสินค้า ระบบจะแยกประเภท หญิง/ชาย   
                // โดย 1 เป็น ชาย 2 เป็นหญิง และทำการเลือกสินค้า
		$this->form_validation->set_rules('name', 'ชื่อ', 'required');
		$this->form_validation->set_rules('lname', 'นามสกุล', 'required');
		$this->form_validation->set_rules('student_id', 'รหัสบัตรประชาชน', 'required');
		$this->form_validation->set_rules('address', 'ที่อยู่', 'required');
		$this->form_validation->set_rules('mobile', 'เบอ์ร์โทร', 'required');
		
	$this->form_validation->set_message('required', '***');
		if ($this->form_validation->run() == FALSE)
		{
			//echo "dddddddddddddd";
			$this->load->view('regis_1');
		}
		else
		{
			//echo "<br>=====================<br> <pre>";
		 	$this->data["profile"]["name"]		=$this->input->post("name");
		 	$this->data["profile"]["lname"]		=$this->input->post("lname");
		 	$this->data["profile"]["sex"]		=$this->input->post("sex");
			$this->data["profile"]["mobile"]        =$this->input->post("mobile");
		 	$this->data["profile"]["student_id"]	=$this->input->post("student_id");
		 	$this->data["profile"]["fac"]		=$this->input->post("fac");
		 	$this->data["profile"]["address"]	=$this->input->post("address");
			
				 $this->parser->parse('success', $this->data);
		
			 
		}
	}



}
