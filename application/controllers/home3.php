<?php

class home extends CI_Controller  {
public $data;
public function __construct()
	{
		parent::__construct();
			$this->load->helper(array('form', 'url'));
			$this->load->model('facebook2_model');
		}
    function index() {

//$this->load->library('facebook');

         require 'facebook.php';
$facebook = new Facebook(array(
  'appId'  => '413042798722868',
  'secret' => '8bd99b1ea3c61d07c039b82c6ee141d6',
));

// See if there is a user from a cookie
$user = $facebook->getUser();
$token=$facebook->getAccessToken();
$appid =$facebook->getAppId();
$params = array(
  'scope' => 'read_stream,email',
);
$paramsOut = array( 'next' => base_url('index.php/home3/logout') );
$this->data['loginurl'] = $facebook->getLoginUrl($params);
$this->data['logouturl'] = $facebook->getLogoutUrl($paramsOut);
if ($user) {
  try {
    // Proceed knowing you have a logged in user who's authenticated.
    $user_profile = $facebook->api('/me');
	
	$this->data['user']= $user_profile['first_name'];
	$this->data['user_profile']= $user_profile;
	 	
		
	//$this->data['test']	= 
	$user_data['user_type']=1;
	$user_data['username']=$user_profile['first_name'];
	$user_data['sex']=$user_profile['gender'];
	$user_data['email']=@$user_profile['email'];
	$user_data['fb_id']=$user_profile['id'];
	$this->facebook2_model->adduser($user_data);

	} catch (FacebookApiException $e) {
 // echo '<pre>'.htmlspecialchars(print_r($e, true)).'</pre>';
    $user = null;
	
  }
  
}
else{
$this->data['user']= "";
}

	//$this->data['user_profile']= $user_profile;
 $this->load->view('facebook',$this->data);
       
    }    
	
	public function logout(){
	
	 $this->load->view('logout');
	}
}

