<?php

namespace sms\smscom;

/**
 * This is just an example.
 */
class AutoloadExample 
{
    public function sms()
    {
	// Account details
	$apiKey = urlencode('sErmxDhmiqw-1r6vTepsEoDLKjsvJLUL6Bc2uQCauF	');
	
	// Message details
	$numbers = array(917893376961, 918019980179);
	$sender = urlencode('TXTLCL');
	$message = rawurlencode('This is your message');
 
	$numbers = implode(',', $numbers);
 
	// Prepare data for POST request
	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
	// Send the POST request with cURL
	$ch = curl_init('https://api.textlocal.in/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	
	// Process your response here
	return $response;

    }
}
