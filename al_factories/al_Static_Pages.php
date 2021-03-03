<?php

namespace allcom\al_factories;
use \black_willow\bw_static_pages as bstat;

abstract class al_Static_Pages {

	/*public static function get_me_a_new_al_( $with_this_handle, $with_this_value ) {
	$GLOBALS[ $with_this_handle ] = new bstat\al_( $with_this_value );
	return $GLOBALS[ $with_this_handle ];
	}*/

	public static function get_me_a_new_al_about_me( $with_this_handle, $with_this_value ) {
		$GLOBALS[ $with_this_handle ] = new bstat\BW_About_Me( $with_this_value );
		return $GLOBALS[ $with_this_handle ];
	}

	public static function get_me_a_new_al_contact_me( $with_this_handle, $with_this_value ) {
		$GLOBALS[ $with_this_handle ] = new bstat\BW_Contact_Me( $with_this_value );
		return $GLOBALS[ $with_this_handle ];
	}

	public static function get_me_a_new_al_copyright( $with_this_handle, $with_this_value ) {
		$GLOBALS[ $with_this_handle ] = new bstat\BW_Copyright( $with_this_value );
		return $GLOBALS[ $with_this_handle ];
	}

	public static function get_me_a_new_al_meta( $with_this_handle, $with_this_value ) {
          $GLOBALS[ $with_this_handle ] = new bstat\BW_Meta( $with_this_value );
		return $GLOBALS[ $with_this_handle ];
	}

	public static function get_me_a_new_al_search( $with_this_handle, $with_this_value ) {
		$GLOBALS[ $with_this_handle ] = new bstat\BW_Search( $with_this_value );
		return $GLOBALS[ $with_this_handle ];
	}

	public static function get_me_a_new_al_site_map[( $with_this_handle, $with_this_value ) {
		$GLOBALS[ $with_this_handle ] = new bstat\BW_Site_Map( $with_this_value );
		return $GLOBALS[ $with_this_handle ];
	}

	public static function get_me_a_new_al_smallprint( $with_this_handle, $with_this_value ) {
          $GLOBALS[ $with_this_handle ] = new bstat\BW_Smallprint( $with_this_value );
		return $GLOBALS[ $with_this_handle ];
	}

	public static function get_me_a_new_al_generic_static_page( $with_this_handle, $with_this_value ) {
		$GLOBALS[ $with_this_handle ] = new bstat\BW_Generic_Static_Page( $with_this_value );
		return $GLOBALS[ $with_this_handle ];
	}
}