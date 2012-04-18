<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Formo_Driver_Buttons_Core class.
 * 
 * @package   Formo
 * @category  Drivers
 */
class Formo_Core_Driver_Buttons extends Formo_Driver {

	protected $_view_file = 'buttons';
	
	public function html()
	{
	}
	
	public function option_name()
	{
		return $this->_field->name();
	}

}
