<?php

namespace allcom\al_containers;
use black_willow;

class AL_Main_Tag extends \black_willow\bw_containers\BW_Main_Tag { 

	function __construct( $the_params_map ) {


		parent::__construct( $the_params_map );

          $this->my_node_opener = "\n
                   \t\t##!------------- Main tag " . $this->get_my_id() . " starts here. -------------->
			\t\t##main class='" . $this->get_my_className() . "' id='" . $this->get_my_id() . "' name='" . $this->get_my_name() . "' " . $this->get_my_other_attributes() . ">\n";

          $this->my_innerHTML .= "";

		$this->my_node_closer = "\t\t##/main>
                   \t\t##!------------- Main tag {$this->get_my_id()} ends here. -------------->\n";

	}
}