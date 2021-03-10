<?php

namespace allcom\al_containers;
use black_willow;

class AL_Div_Tag extends \black_willow\bw_containers\BW_Div_Tag {

	function __construct( $the_params_map ) {
		parent::__construct( $the_params_map );
		$this->my_node_opener = "\n##div class='" . $this->get_my_className() . "' id='" . $this->get_my_ID() .
		"' name='" . $this->get_my_name() . "' " . $this->get_my_other_attributes() . ">\n";


		$this->my_node_closer = "\n##/div>";

	}
}