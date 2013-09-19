Mailchimp API w. support for Laravel
---

The package supports use with the [Laravel framework][2] (v4) providing a `MailchimpWrapper` facade. 

----

###Setup:

In order to install add the following to your `composer.json` file within the `require` block:

	"require": {
		…
		"hugofirth/mailchimp": "2.0.*",
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
		'MailchimpWrapper'       => 'Hugofirth\Mailchimp\Facades\MailchimpWrapper',
		…
	),
	
Publish the configuration

	$ php artisan config:publish hugofirth/mailchimp

Lastly, run the command `composer update`.

_\* The subsequent steps should be repeated for any file `app.php` created for additional environments._ 

----

###Usage:

Your unique MailChimp API key should be set in the package's config found in `app/config/packages/hugofirth/mailchimp/config.php`

Methods of the MailChimp api class work as described by the MailChimp API docs found [Here][3]. Examples of actual usage can be found [Here][4] (**Warning**: Examples use CakePHP). Thanks to Laravel's use of the "Facade" design pattern, all methods may be called in the following manner:

	…
	//Retrieve an array of lists for your account
	$lists = MailchimpWrapper::lists()->getList()['data'];
	…
	//Subscribe a user, with email: $email_address, to a list with id: $list_id
	MailchimpWrapper::lists()->subscribe($list_id, array('email'=>$email_address));

Enjoy!

[1]: http://apidocs.mailchimp.com/api/downloads/#php
[2]: http://laravel.com/
[3]: http://apidocs.mailchimp.com/api/1.3/
[4]: https://github.com/mailchimp/mcapi2-php-examples
