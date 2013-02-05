<?php

class VP_Control_Field_NoteBox extends VP_Control_Field
{

	public function __construct() {}

	public static function withArray($arr)
	{
		$instance = new self();
		$instance->_basic_make($arr);
		return $instance;
	}

	public function render()
	{
		// Setup Data
		$this->_setup_data();
		return VP_View::get_instance()->load('control/notebox', $this->get_data());
	}

}

/**
 * EOF
 */