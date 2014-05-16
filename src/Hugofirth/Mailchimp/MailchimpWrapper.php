<?php namespace Hugofirth\Mailchimp;

use Mailchimp;

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
