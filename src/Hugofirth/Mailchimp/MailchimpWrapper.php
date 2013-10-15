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

	//Accessors for public member objects beyond this point

	/**
	 * Get Mailchimp_Folders object
	 *
	 * @return Mailchimp_Folders
	 */
	public function folders()
	{
		return $this->mc->folders;
	}

	/**
	 * Get Mailchimp_Templates object
	 *
	 * @return Mailchimp_Templates
	 */
	public function templates()
	{
		return $this->mc->templates;
	}

	/**
	 * Get Mailchimp_Users object
	 *
	 * @return Mailchimp_Users
	 */
	public function users()
	{
		return $this->mc->users;
	}

	/**
	 * Get Mailchimp_Helper object
	 *
	 * @return Mailchimp_Helper
	 */
	public function helper()
	{
		return $this->mc->helper;
	}

	/**
	 * Get Mailchimp_Mobile object
	 *
	 * @return Mailchimp_Mobile
	 */
	public function mobile()
	{
		return $this->mc->mobile;
	}

	/**
	 * Get Mailchimp_Ecomm object
	 *
	 * @return Mailchimp_Ecomm
	 */
	public function ecomm()
	{
		return $this->mc->ecomm;
	}

	/**
	 * Get Mailchimp_Neapolitan object
	 *
	 * @return Mailchimp_Neapolitan
	 */
	public function neapolitan()
	{
		return $this->mc->neapolitan;
	}

	/**
	 * Get Mailchimp_Lists object
	 *
	 * @return Mailchimp_Lists
	 */
	public function lists()
	{
		return $this->mc->lists;
	}

	/**
	 * Get Mailchimp_Campaigns object
	 *
	 * @return Mailchimp_Campaigns
	 */
	public function campaigns()
	{
		return $this->mc->campaigns;
	}

	/**
	 * Get Mailchimp_Vip object
	 *
	 * @return Mailchimp_Vip
	 */
	public function vip()
	{
		return $this->mc->vip;
	}

	/**
	 * Get Mailchimp_Reports object
	 *
	 * @return Mailchimp_Reports
	 */
	public function reports()
	{
		return $this->mc->reports;
	}

	/**
	 * Get Mailchimp_Gallery object
	 *
	 * @return Mailchimp_Gallery
	 */
	public function gallery()
	{
		return $this->mc->gallery;
	}

}
