<?php
	require __DIR__ . '/vendor/autoload.php';
	
	use Mpociot\BotMan\BotManFactory;
	use Mpociot\BotMan\BotMan;
	use BotMan\BotMan\Drivers\DriverManager;

	$config = [
		'hipchat_urls'=>[
			'YOUR-INTEGRATION-URL-1',
			'YOUR-INTEGRATION-URL-2',
		],
		'facebook_token' => 'EAAMo0pOX7e0BAMzEG1LrKHRkb1LWPo2pO7wuB4lfyE1mNAKUzWhEMyHwGHCbeBSnaqIMjuxKJKlNGyoWWBcBEmaNqH0TT2PGJVprirJZCfUOSqjPRcHstqml5vS05jRTeFEM0WAp4RmBHJ6NvWVHemarIeGG6PcdMf8iZAjgZDZD',
		'facebook_app_secret' => '48c0417c72d6ff6aa0ea81067b366a9f',	
	];

	// Create an instance
	$botman = BotManFactory::create($config);

	$botman -> verifyServices('skfgliwuehrqw342639o5345');
	
	// Give the bot something to listen for.
	$botman->hears('hello', function (BotMan $bot) {
		$bot->reply('Hello yourself.');
	});

	// Start listening
	$botman->listen();
	
?>


