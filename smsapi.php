<?php
class smsapi
{
 	private $api_url;
 	private $apikey;
 	private $senderid;

 	private $api = "http://springedge.com/developers.html";

	function __construct($apikey,$senderid)
	{	
		$this->apikey = $apikey;
		$this->senderid = $senderid;
		$this->api_url = 'http://instantalerts.co/api/';
	}

	/**
	 * function to send sms
	 * 
	 */
	function send_sms($to, $message)
	{
		$type="xml";
		$message = urlencode($message);
		$params = "web/send/?apikey=$this->apikey&sender=$this->senderid&to=$to&message=$message";
		
		return $this->execute($params);
	}
	
	
	/**
	 * function to process API request
	 */
	function execute($params)
	{
		$eurl = $this->api_url.$params;		
	        $output = file_get_contents($eurl);
		return $output;
	}    
}
?>
 
