<?php
/**
*
* @package Quick Link Subscriptions Extension
* @copyright (c) 2020 david63
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace david63\quicksubs\controller;

/**
* Main controller
*/
class main_controller
{
	/** @var string phpBB root path */
	protected $root_path;

	/** @var string phpBB extension */
	protected $php_ext;

	/**
	* Constructor for main controller
	*
	* @param string		$root_path		phpBB root path
	* @param string		$php_ext		phpBB extension
	*
	* @return \phpbb\quicksubs\controller\main_controller
	* @access public
	*/
	public function __construct(string $root_path, string $php_ext)
	{
		$this->root_path	= $root_path;
		$this->php_ext		= $php_ext;
	}

	/**
	* Display the UCP subscriptions
	*
	* @return null
	* @access public
	*/
	public function quick_subs()
	{
		return redirect(append_sid($this->root_path . 'ucp.' . $this->php_ext . '?i=ucp_main&mode=subscribed'));
	}
}
