<?php


	$challenge = $_REQUEST['hub_challenge'];
	$verify_token = $_REQUEST['hub_verify_token'];
	// Set this Verify Token Value on your Facebook App 
	if ($verify_token === 'chatbottoken') {
	  echo $challenge;
	}
	$input = json_decode(file_get_contents('php://input'), true);
	// Get the Senders Graph ID
	$sender = $input['entry'][0]['messaging'][0]['sender']['id'];
	// Get the returned message
	$message = $input['entry'][0]['messaging'][0]['message']['text'];
	//API Url and Access Token, generate this token value on your Facebook App Page
	$url = 'https://graph.facebook.com/v2.6/me/messages?access_token=EAAMo0pOX7e0BADTfWurZAECGYaWS94JHmyB5gul0N0LV6z0KaDeqDPMv9udRmIYgLRt4cFhFIvLXnmdZAgi5DG6XcUr0ZCZBc7c1Fdxz6ZCEYxrKFzezZAt8rfOqrSudZCXmUzWZBBehuC6b73Fak3ySzA5IRiOjjuqXQa1SsnxkvgZDZD';
	//Initiate cURL.
	$ch = curl_init($url);
	//The JSON data.
	$jsonData = '{
		"recipient":{
			"id":"' . $sender . '"
		}, 
		"message":{
			"text":"The message you want to return"
		}
	}';
	//Tell cURL that we want to send a POST request.
	curl_setopt($ch, CURLOPT_POST, 1);
	//Attach our encoded JSON string to the POST fields.
	curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
	//Set the content type to application/json
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
	//Execute the request but first check if the message is not empty.
	if(!empty($input['entry'][0]['messaging'][0]['message'])){
	  $result = curl_exec($ch);
	}
	
	use Mpociot\BotMan\BotManFactory;
	use Mpociot\BotMan\BotMan;
	use BotMan\BotMan\Drivers\DriverManager;

	$config = [
		'facebook' => [
		'token' => 'EAAMo0pOX7e0BAMzEG1LrKHRkb1LWPo2pO7wuB4lfyE1mNAKUzWhEMyHwGHCbeBSnaqIMjuxKJKlNGyoWWBcBEmaNqH0TT2PGJVprirJZCfUOSqjPRcHstqml5vS05jRTeFEM0WAp4RmBHJ6NvWVHemarIeGG6PcdMf8iZAjgZDZD',
		'app_secret' => '48c0417c72d6ff6aa0ea81067b366a9f',
		'verification'=>'MY_SECRET_VERIFICATION_TOKEN',
		]
	];

	// Load the driver(s) you want to use
	DriverManager::loadDriver(\BotMan\Drivers\Telegram\TelegramDriver::class);

	// Create an instance
	$botman = BotManFactory::create($config);

	// Give the bot something to listen for.
	$botman->hears('hello', function (BotMan $bot) {
		$bot->reply('Hello yourself.');
	});

	// Start listening
	$botman->listen();
	

);
	
?>


