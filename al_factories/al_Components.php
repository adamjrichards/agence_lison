<?php

namespace allcom\al_factories;
use \black_willow;

abstract class al_Components {

	public static function get_me_a_new_al_menu( $with_this_handle, $with_this_value ) {
		try {
			$GLOBALS[ $with_this_handle ] = new \allcom\al_components\al_menu\AL_Menu( $with_this_value );
		} catch ( Exception $e ) {
			$GLOBALS[ $with_this_handle ] = false;
		} finally {
			return $GLOBALS[ $with_this_handle ];
		}
	 }
	public static function get_me_a_new_al_bwt_menu( $with_this_handle, $with_this_value ) {
		try {
			$GLOBALS[ $with_this_handle ] = new \allcom\al_components\al_menu\AL_BWT_Menu( $with_this_value );
		} catch ( Exception $e ) {
			$GLOBALS[ $with_this_handle ] = false;
		} finally {
			return $GLOBALS[ $with_this_handle ];
		}
	}
	public static function get_me_a_new_bw_menu( $with_this_handle, $with_this_value ) {
		try {
			$GLOBALS[ $with_this_handle ] = new \black_willow\bw_components\bw_menu\BW_Menu( $with_this_value );
		} catch ( Exception $e ) {
			$GLOBALS[ $with_this_handle ] = false;
		} finally {
			return $GLOBALS[ $with_this_handle ];
		}
	}

	public static function get_me_a_new_al_image_set( $with_this_handle, $with_this_value ) {
		try {
			$GLOBALS[ $with_this_handle ] = new \allcom\al_components\al_image_set\AL_Image_Set( $with_this_value );
		} catch ( Exception $e ) {
			$GLOBALS[ $with_this_handle ] = false;
		} finally {
			  return $GLOBALS[ $with_this_handle ];
		}
	}
	public static function get_me_a_new_al_bwt_image_set( $with_this_handle, $with_this_value ) {
		try {
			$GLOBALS[ $with_this_handle ] = new \allcom\al_components\al_image_set\AL_BWT_Image_Set( $with_this_value );
		} catch ( Exception $e ) {
			$GLOBALS[ $with_this_handle ] = false;
		} finally {
			  return $GLOBALS[ $with_this_handle ];
		}
	}
	public static function get_me_a_new_bw_image_set( $with_this_handle, $with_this_value ) {
		try {
			$GLOBALS[ $with_this_handle ] = new \black_willow\bw_components\bw_image_set\BW_Image_Set( $with_this_value );
		} catch ( Exception $e ) {
			$GLOBALS[ $with_this_handle ] = false;
		} finally {
			  return $GLOBALS[ $with_this_handle ];
		}
	}

	public static function get_me_a_new_al_sidebar( $with_this_handle, $with_this_value ) {
		try {
			$GLOBALS[ $with_this_handle ] = new \allcom\al_components\al_sidebar\AL_Sidebar( $with_this_value );
		} catch ( Exception $e ) {
			$GLOBALS[ $with_this_handle ] = false;
		} finally {
			  return $GLOBALS[ $with_this_handle ];
		}
	}
	public static function get_me_a_new_al_bwt_sidebar( $with_this_handle, $with_this_value ) {
		try {
			$GLOBALS[ $with_this_handle ] = new \allcom\al_components\al_sidebar\AL_BWT_Sidebar( $with_this_value );
		} catch ( Exception $e ) {
			$GLOBALS[ $with_this_handle ] = false;
		} finally {
			  return $GLOBALS[ $with_this_handle ];
		}
	}
	public static function get_me_a_new_bw_sidebar( $with_this_handle, $with_this_value ) {
		try {
			$GLOBALS[ $with_this_handle ] = new \black_willow\bw_components\bw_sidebar\BW_Sidebar( $with_this_value );
		} catch ( Exception $e ) {
			$GLOBALS[ $with_this_handle ] = false;
		} finally {
			  return $GLOBALS[ $with_this_handle ];
		}
	}

	public static function get_me_a_new_al_ornament( $with_this_handle, $with_this_value ) {
		try {
			$GLOBALS[ $with_this_handle ] = new \allcom\al_components\al_ornament\AL_Ornament( $with_this_value );
		} catch ( Exception $e ) {
			$GLOBALS[ $with_this_handle ] = false;
		} finally {
			  return $GLOBALS[ $with_this_handle ];
		}
	}
	public static function get_me_a_new_al_bwt_ornament( $with_this_handle, $with_this_value ) {
		try {
			$GLOBALS[ $with_this_handle ] = new \allcom\al_components\al_ornament\AL_BWT_Ornament( $with_this_value );
		} catch ( Exception $e ) {
			$GLOBALS[ $with_this_handle ] = false;
		} finally {
			  return $GLOBALS[ $with_this_handle ];
		}
	}
	public static function get_me_a_new_bw_ornament( $with_this_handle, $with_this_value ) {
		try {
			$GLOBALS[ $with_this_handle ] = new \black_willow\bw_components\bw_ornament\BW_Ornament( $with_this_value );
		} catch ( Exception $e ) {
			$GLOBALS[ $with_this_handle ] = false;
		} finally {
			  return $GLOBALS[ $with_this_handle ];
		}
	}
}
