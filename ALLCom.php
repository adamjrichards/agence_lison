<?php

namespace allcom;
use black_willow;

class ALLCom extends black_willow\Black_Willow {

	function __construct( ...$the_additional_setup_functions ) {

		if ( ! \function_exists( "scan_the_directory" ) ) {
			function scan_the_directory( $with_this_path ) {
				$filter_it = function( $the_value ) {
					return \strpos( $the_value, "." ) !== 0;
				};
				return \array_filter( \scandir( $with_this_path, SCANDIR_SORT_NONE ), $filter_it );
			}
		}
		print  __LINE__;
		parent::__construct( ...$the_additional_setup_functions );

		// load the al_error files
		$the_project_errex = scan_the_directory( $_SERVER[ "MY_PROJECT_ERREX" ] );
		foreach ( $the_project_errex as $the_project_error_file ) {
			if ( \is_file( "{$_SERVER[ "MY_PROJECT_ERREX" ]}/$the_project_error_file" ) ) {
				include "{$_SERVER[ "MY_PROJECT_ERREX" ]}/$the_project_error_file";
			}
		}

		// load the factories
		$the_project_factories = scan_the_directory( $_SERVER[ "MY_PROJECT_FACTORIES" ] );
		foreach ( $the_project_factories as $the_project_factory_file ) {
			if ( \is_file( "{$_SERVER[ "MY_PROJECT_FACTORIES" ]}/$the_project_factory_file" ) ) {
				include "{$_SERVER[ "MY_PROJECT_FACTORIES" ]}/$the_project_factory_file";
			}
		}

		// add to an existing global basket for multiple projects running simultaneously
		if ( isset( $_SERVER[ "MY_BLACK_WILLOWS" ] ) ) {
			$_SERVER[ "MY_BLACK_WILLOWS" ][] = $this;
		}
	}
}