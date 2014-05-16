<?php

namespace HugoFirth\Mailchimp\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class MailchimpWrapper
 * Valid method/property list as of version Mailchimp API 2.0.4
 * @method static \Mailchimp_Folders folders() accesses the $folders property
 * @method static \Mailchimp_Templates templates() accesses the $templates property
 * @method static \Mailchimp_Users users() accesses the $users property
 * @method static \Mailchimp_Helper helper() accesses the $helper property
 * @method static \Mailchimp_Mobile mobile() accesses the $mobile property
 * @method static \Mailchimp_Ecomm ecomm() accesses the $ecomm property
 * @method static \Mailchimp_Neapolitan neapolitan() accesses the $neapolitan property
 * @method static \Mailchimp_Lists lists() accesses the $lists property
 * @method static \Mailchimp_Campaigns campaigns() accesses the $campaigns property
 * @method static \Mailchimp_Vip vip() accesses the $vip property
 * @method static \Mailchimp_Reports reports() accesses the $reports property
 * @method static \Mailchimp_Gallery gallery() accesses the $gallery property
 * @method static bool ssl_verifypeer() accesses the $ssl_verifypeer property
 * @method static bool ssl_verifyhost() accesses the $ssl_verifyhost property
 * @method static string ssl_cainfo() accesses the $ssl_cainfo property
 * @method static string apikey() accesses the $apikey property
 * @method static bool debug() accesses the $debug property
 * @method static array call($url, $params) accesses the call method
 * @method static mixed readConfigs() accesses the readConfigs method
 * @method static mixed caseError($result) accesses the castError method
 * @method static void log($msg) accesses the log method
 */
class MailchimpWrapper extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'mailchimp_wrapper';
	}
}
