<?php

namespace allcom\al_factories;
use black_willow;

abstract class al_Components {

	public static function get_me_a_new_al_menu( $with_this_handle, $with_this_value ) {
		try {
			$GLOBALS[ $with_this_handle ] = new \black_willow\bw_components\BW_Menu( $with_this_value );
		} catch ( \ErrorException $e ) {
			$GLOBALS[ $with_this_handle ] = false;
		} finally {
			return $GLOBALS[ $with_this_handle ];
		}
	 }

	public static function get_me_a_new_al_image_set( $with_this_handle, $with_this_value ) {
		try {
			$GLOBALS[ $with_this_handle ] = new \black_willow\bw_components\BW_Image_Set( $with_this_value );
		} catch ( \ErrorException $e ) {
			$GLOBALS[ $with_this_handle ] = false;
		} finally {
			  return $GLOBALS[ $with_this_handle ];
		}
	}

	public static function get_me_a_new_al_sidebar( $with_this_handle, $with_this_value ) {
		try {
			$GLOBALS[ $with_this_handle ] = new \black_willow\bw_components\BW_Sidebar( $with_this_value );
		} catch ( \ErrorException $e ) {
			$GLOBALS[ $with_this_handle ] = false;
		} finally {
			  return $GLOBALS[ $with_this_handle ];
		}
	}

	public static function get_me_a_new_al_ornament( $with_this_handle, $with_this_value ) {
		try {
			$GLOBALS[ $with_this_handle ] = new \black_willow\bw_components\BW_Ornament( $with_this_value );
		} catch ( \ErrorException $e ) {
			$GLOBALS[ $with_this_handle ] = false;
		} finally {
			  return $GLOBALS[ $with_this_handle ];
		}
	}

	public static function get_me_a_new_al_site_map( $with_this_handle, $with_this_value ) {
		$GLOBALS[ $with_this_handle ] = new \black_willow\bw_components\BW_Site_Map( $with_this_value );
		return $GLOBALS[ $with_this_handle ];
	}
}
