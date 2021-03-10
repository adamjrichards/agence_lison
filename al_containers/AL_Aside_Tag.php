<?php

namespace allcom\al_containers;
use black_willow;

class AL_Aside_Tag extends \black_willow\bw_containers\BW_Aside_Tag {

	function __construct( $the_params_map ) {
		parent::__construct( $the_params_map );

		$this->my_node_opener = "
			{$the_params_map->get( "my_node_opener" )}

		\n##!-------------  " . $this->get_my_id() . " starts here -------------->\n
			##aside class='" . $this->get_my_className() . "' id='" . $this->get_my_ID() . "' name='" . $this->get_my_name() . "' " . $this->get_my_other_attributes() . ">";


		$this->my_node_closer = "##/aside>
		\n##!-------------  " . $this->get_my_id() . " ends here -------------->\n
			{$the_params_map->get( "my_node_closer" )}";
	}
}