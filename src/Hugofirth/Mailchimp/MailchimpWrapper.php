<?php namespace Hugofirth\Mailchimp;

use Mailchimp;

/**
 * Class MailchimpWrapper
 * Valid method/property list as of version Mailchimp API 2.0.4
 * @method \Mailchimp_Folders folders() accesses the $folders property
 * @method \Mailchimp_Templates templates() accesses the $templates property
 * @method \Mailchimp_Users users() accesses the $users property
 * @method \Mailchimp_Helper helper() accesses the $helper property
 * @method \Mailchimp_Mobile mobile() accesses the $mobile property
 * @method \Mailchimp_Ecomm ecomm() accesses the $ecomm property
 * @method \Mailchimp_Neapolitan neapolitan() accesses the $neapolitan property
 * @method \Mailchimp_Lists lists() accesses the $lists property
 * @method \Mailchimp_Campaigns campaigns() accesses the $campaigns property
 * @method \Mailchimp_Vip vip() accesses the $vip property
 * @method \Mailchimp_Reports reports() accesses the $reports property
 * @method \Mailchimp_Gallery gallery() accesses the $gallery property
 * @method bool ssl_verifypeer() accesses the $ssl_verifypeer property
 * @method bool ssl_verifyhost() accesses the $ssl_verifyhost property
 * @method string ssl_cainfo() accesses the $ssl_cainfo property
 * @method string apikey() accesses the $apikey property
 * @method bool debug() accesses the $debug property
 * @method array call($url, $params) accesses the call method
 * @method mixed readConfigs() accesses the readConfigs method
 * @method mixed caseError($result) accesses the castError method
 * @method void log($msg) accesses the log method
 */
class MailchimpWrapper {

	/**
	 * Field is instance of class Mailchimp
	 *
	 * @var mc
	 */
	protected $mc;

	/**
	 * Constructor
	 *
	 * @param Mailchimp $mc
	 * @return void
	 */
	public function __construct(Mailchimp $mc)
	{
		$this->mc = $mc;
	}

	/**
	 * Proxies call to the underlying MailChimp API
	 *
	 * @param $method
	 * @param array $args
	 * @return mixed
	 */
	public function __call($method, array $args)
	{
		//If it's a method, call it
		if(method_exists($this->mc, $method))
		{
			return call_user_func_array(array($this->mc, $method), $args);
		}

		//Otherwise, treat it as a property
		return $this->mc->{$method};
	}

}
