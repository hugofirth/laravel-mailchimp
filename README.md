Mailchimp API w. support for Laravel
---

This package acts as an alternative mirror for the PHP class, for use with the MailChimp API, provided by MailChimp® [Here][1].

The package supports use with the [Laravel framework][2] (v4) providing a `Mailchimp` facade. 

----

###Setup:

In order to install add the following to your `composer.json` file within the `require` block:

	"require": {
		…
		"hugofirth/mailchimp": "dev-master",
		…	
	}

Within Laravel, locate the file `..app/config/app.php` *.

Add the following to the `providers` array:

	'providers' => array(
		…
		'Hugofirth\Mailchimp\MailchimpServiceProvider',
		…
	),

Furthermore, add the following the the `aliases` array:

	'aliases' => array(
		…
		'Mailchimp'       => 'Hugofirth\Mailchimp\Facades\Mailchimp',
		…
	),
	
Publish the configuration

	$ php artisan config:publish hugofirth/mailchimp

Lastly, run the command `composer update`.

_\* The subsequent steps should be repeated for any file `app.php` created for additional environments._ 

----

###Usage:

Your unique MailChimp API key should be set in the package's config found in `app/config/packages/hugofirth/mailchimp/config.php`

Methods of the MailChimp api class work as described by the MailChimp API docs found [Here][3]. Thanks to Laravel's use of the "Facade" design pattern, all methods may be called in the following manner:

	…
	//Retrieve an array of lists for your account
	$lists = Mailchimp::lists();
	…
	//Subscribe a user, with email: $email_address, to a list with id: $list_id
	Mailchimp::listSubscribe($list_id, $email_address);

Enjoy!

[1]: http://apidocs.mailchimp.com/api/downloads/#php
[2]: http://laravel.com/
[3]: http://apidocs.mailchimp.com/api/1.3/
