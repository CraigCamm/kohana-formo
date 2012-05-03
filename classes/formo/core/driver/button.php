<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Formo_Driver_Button_Core class.
 * 
 * @package   Formo
 * @category  Drivers
 */
class Formo_Core_Driver_Button extends Formo_Driver {

	protected $_view_file = 'button';
	
	public function html()
	{
		$value = ($val = $this->_field->val())
			? $val
            : $this->_view->label();

		$this->_view
			->set_var('tag', 'input')
			->attr('class', 'btn')
			->attr('name', $this->name())
			->attr('value', $value);
	}

	public function sent()
	{
		return $this->_field->not_empty() !== FALSE;
	}

}
