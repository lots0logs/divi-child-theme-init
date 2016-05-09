<?php

class My_ET_Tweak {
	public $builder_module_tweak = false;
	public $builder_module_class = '';

	public function __construct() {
		if ( false === $this->builder_module_tweak ) {
			$this->apply_tweak();
		} else if ( true === $this->builder_module_tweak ) {
			$this->apply_builder_module_tweak();
		}
	}
	
	public function apply_tweak() {}
	
	public function apply_builder_module_tweak() {}
	
}

new My_ET_Tweak();

?>
		
