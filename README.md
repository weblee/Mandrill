# Mandrill

Simple Mandrill API wrapper for Laravel 5.

This packages gives you the ability to fully interact with Mandrill api ie, sending email via templates, getting user data, adding emails to blacklist...

## Requirements

Laravel 5 & PHP 5.3 and later.

## Documentation

[Full Mandrill API documentation can be found here.](https://mandrillapp.com/api/docs/index.php.html)

## Installation
Per usual, install Commander through Composer.

```
"require": {
	"weblee/mandrill": "dev-master"
}
```

Next, update `config/services.php` with your Mandrill API key. You are better off using Laravel env file to store you key.
```php
	'mandrill' => [
		'secret' => env('MANDRILL_KEY'),
	],
```

Now you are ready to register the service provider and facade if you wish `config/app.php`.
```php
	'providers' => [
		......
		'Weblee\Mandrill\MandrillServiceProvider'
	],
	
	'aliases' => [
		......
		'MandrillMail'  => 'Weblee\Mandrill\MandrillFacade'
	]
```

## Usage
Either inject the service into your construct or class method or use the supplied facade.

Examples: 
```php
<?php

namespace App;

use Weblee\Mandrill\Mail;

class SendMyMail{

	private $mandrill;
	
	/**
	* Via construct injection
	*
	*/
    public function __construct(Mail $mandrill)
    {
    	$this->mandrill = $mandrill;
    }
    
	public function sendTemplate($data)
	{
		$this->mandrill->messages()->sendTemplate($data)
	}
    
	// ----- OR  -------	

	/**
	* Via method injection
	*
	*/
	public function sendMail(Mail $mandrill, $data)
	{
		$mandrill->messages()->sendTemplate($data)
	}

	// ----- OR  -------

	/**
	* Via the Facade
	*
	*/
	public function sendMailByFacade($data)
	{
		\MandrillMail::messages()->sendTemplate($data);
	}
}
``` 

Just follow the Mandrill docs on what call's you can do and the data to provide.

