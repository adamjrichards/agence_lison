<?php

namespace allcom\al_containers;
use black_willow;

class AL_Body_Tag extends \black_willow\bw_nodes\bw_primary_nodes\BW_DOM_Node {

	function __construct( $the_params_map ) {

		parent::__construct( $the_params_map );

		$this->my_node_opener = "\n##!------------- Body tag '{$this->get_my_id()}' starts here. -------------->
		\n##body class='{$this->get_my_className()}' id='{$this->get_my_id()}' name='{$this->get_my_name()}' {$this->get_my_trigger()}>";

		$this->my_node_closer = "\n##/body>
		\n##!------------- Body tag {$this->get_my_id()} ends here. -------------->\n";


	}
}