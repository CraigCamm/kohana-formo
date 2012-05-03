<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Formo_Driver_Button_Core class.
 * 
 * @package   Formo
 * @category  Drivers
 */
class Formo_Core_Driver_Div extends Formo_Driver {

	protected $_view_file = 'div';
	
	public function html()
	{
		$this->_view
			->set_var('tag', 'div')
			->attr('id', $this->name());
	}

}
