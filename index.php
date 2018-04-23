<?php

	
	use Mpociot\BotMan\BotManFactory;
	use Mpociot\BotMan\BotMan;
	use BotMan\BotMan\Drivers\DriverManager;

	$config = [
		"facebook" => [
		"token" => "EAAMo0pOX7e0BAMzEG1LrKHRkb1LWPo2pO7wuB4lfyE1mNAKUzWhEMyHwGHCbeBSnaqIMjuxKJKlNGyoWWBcBEmaNqH0TT2PGJVprirJZCfUOSqjPRcHstqml5vS05jRTeFEM0WAp4RmBHJ6NvWVHemarIeGG6PcdMf8iZAjgZDZD",
		"app_secret" => "48c0417c72d6ff6aa0ea81067b366a9f",
		"verification"=>"oihoigghu8768598gigfu5rfytfuyf",
		]
	];

	// Load the driver(s) you want to use
	DriverManager::loadDriver(\BotMan\Drivers\Facebook\FacebookDriver::class);

	// Create an instance
	$botman = BotManFactory::create($config);

	// Give the bot something to listen for.
	$botman->hears('hello', function (BotMan $bot) {
		$bot->reply('Hello yourself.');
	});

	// Start listening
	$botman->listen();
	
	
?>


