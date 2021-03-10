<?php

namespace allcom\al_containers;
use black_willow;

class AL_HTML_Tag extends \black_willow\bw_containers\BW_HTML_Tag {

	function __construct( $the_params_map ) {

		parent::__construct( $the_params_map );
		$the_attributes = $this->get_my_other_attributes();
		if ( $the_attributes !== "default" ) ;
		if ( \is_string( $the_attributes ) ) {
			$the_attributes = " " . $the_attributes;
		}
		$this->my_node_opener = "\n
			##!DOCTYPE html>\n
			##html$the_attributes>\n";
		$this->my_node_closer = "\t##/html>\n";
	}
}