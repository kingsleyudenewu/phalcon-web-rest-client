<?php 

class Apicalls {
    
    private static $api = array(
            'url' => "http://phalcon.paxnotdead.com/",
            'username' => "paxpelus",
            'password' => 'paxpelus'
        );
    
	public static function post($url, $data = [], $auth = true)
	{
	    $api = self::$api;
		$response = \Httpful\Request::post($api->url . $url);  // Will parse based on Content-Type
		
		if ($auth) {
			$response->authenticateWith($api->username, $api->password);
		}

		 $response = $response->sendsJson()->body(json_encode($data))->send();
		
		return (array)$response->body;
	}

	public static function get($url, $data = [], $auth = false)
	{
	    $api = self::$api;
		$response = \Httpful\Request::get($api['url'] . $url);  // Will parse based on Content-Type
		
		if ($auth) {
			$response->authenticateWith($api['username'], $api['password']);
		}

		$response = $response->sendsJson()->body(json_encode($data))->send();
		
		
		return (array)$response->body;
	}

	public static function delete($url, $data = [], $auth = true)
	{
	    $api = self::$api;
		$response = \Httpful\Request::delete($api->url . $url);  // Will parse based on Content-Type
		
		if ($auth) {
			$response->authenticateWith($api->username, $api->password);
		}

		 $response = $response->sendsJson()->body(json_encode($data))->send();
		
		
		return (array)$response->body;
	}
	
}