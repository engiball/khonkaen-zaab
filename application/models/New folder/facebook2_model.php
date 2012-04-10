<?
class facebook2_model extends CI_Model{

		public function adduser($data){
		$this->load->database();
		if($this->check_user($data['fb_id'])<1){
		
		$this->db->insert('member', $data); 
		}
		return true;
			 
			}
			
			
			
		public function check_user($data){
		$this->load->database();
		$this->db->select("*");
		$this->db->from("member");
		//$this->db->where("product_status = "."'1'");	
	
			$this->db->where('fb_id',$data);				
	
       return $this->db->count_all_results();
			 
			}
			
			
		
}


?>
