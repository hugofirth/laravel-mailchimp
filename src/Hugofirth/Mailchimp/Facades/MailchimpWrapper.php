<?php

namespace HugoFirth\Mailchimp\Facades;

use Illuminate\Support\Facades\Facade;

class MailchimpWrapper extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'mailchimp_wrapper';
	}
}
