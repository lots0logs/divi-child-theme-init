<?php

class My_ET_Tweak {
	public $builder_module_tweak = false;
	public $builder_module_class = '';
	public $builder_module = null;

	public function __construct() {
		if ( false === $this->builder_module_tweak ) {
			$this->apply_tweak();
		} else if ( true === $this->builder_module_tweak ) {
			$this->apply_builder_module_tweak();
		}
	}
	
	public function apply_tweak() {}
	
	public function apply_builder_module_tweak() {
		if ( class_exists( $this->builder_module_class ) ) {
			$builder_module = 'My_' . $this->builder_module_class;
			$this->builder_module = new $builder_module;
			
			remove_shortcode( $this->builder_module->slug );
			add_shortcode( $this->builder_module->slug, array( $this->builder_module, '_shortcode_callback' );
		}
	}
	
}

?>
		
