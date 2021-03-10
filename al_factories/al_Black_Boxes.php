<?php

namespace allcom\al_factories;
use black_willow;

abstract class al_Black_Boxes {

	public static function get_me_a_new_al_banner( $with_this_handle, $with_this_value ) {
		try {
			$GLOBALS[ $with_this_handle ] = new \allcom\al_black_boxes\al_banner\AL_Banner( $with_this_value );
		} catch ( \ErrorException $e ) {
			$GLOBALS[ $with_this_handle ] = false;
		} finally {
			return $GLOBALS[ $with_this_handle ];
		}
	 }
	public static function get_me_a_new_al_bwt_banner( $with_this_handle, $with_this_value ) {
		try {
			$GLOBALS[ $with_this_handle ] = new \allcom\al_black_boxes\al_banner\AL_BWT_Banner( $with_this_value );
		}
		catch ( \ErrorException $e ) {
			$GLOBALS[ $with_this_handle ] = false;
		} finally {
			return $GLOBALS[ $with_this_handle ];
		}
	}
	public static function get_me_a_new_bw_banner( $with_this_handle, $with_this_value ) {
		try {
			$GLOBALS[ $with_this_handle ] = new \black_willow\bw_black_boxes\bw_banner\BW_Banner( $with_this_value );
		}
		catch ( \ErrorException $e ) {
			$GLOBALS[ $with_this_handle ] = false;
		} finally {
			return $GLOBALS[ $with_this_handle ];
		}
	}

	public static function get_me_a_new_al_hub( $with_this_handle, $with_this_value ) {
		try {
			$GLOBALS[ $with_this_handle ] = new \allcom\al_black_boxes\al_hub\AL_Hub( $with_this_value );
		}
		catch ( \ErrorException $e ) {
			$GLOBALS[ $with_this_handle ] = false;
		} finally {
			  return $GLOBALS[ $with_this_handle ];
		}
	}
	public static function get_me_a_new_al_bwt_hub( $with_this_handle, $with_this_value ) {
		try {
			$GLOBALS[ $with_this_handle ] = new \allcom\al_black_boxes\al_hub\AL_BWT_Hub( $with_this_value );
		}
		catch ( \ErrorException $e ) {
			$GLOBALS[ $with_this_handle ] = false;
		} finally {
			  return $GLOBALS[ $with_this_handle ];
		}
	}
	public static function get_me_a_new_bw_hub( $with_this_handle, $with_this_value ) {
		try {
			$GLOBALS[ $with_this_handle ] = new \black_willow\bw_black_boxes\bw_hub\BW_Hub( $with_this_value );
		}
		catch ( \ErrorException $e ) {
			$GLOBALS[ $with_this_handle ] = false;
		} finally {
			  return $GLOBALS[ $with_this_handle ];
		}
	}

	public static function get_me_a_new_al_logo( $with_this_handle, $with_this_value ) {
		try {
			$GLOBALS[ $with_this_handle ] = new \allcom\al_black_boxes\al_logo\AL_Logo( $with_this_value );
		}
		catch ( \ErrorException $e ) {
			$GLOBALS[ $with_this_handle ] = false;
		} finally {
			  return $GLOBALS[ $with_this_handle ];
		}
	}
	public static function get_me_a_new_al_bwt_logo( $with_this_handle, $with_this_value ) {
		vump( $with_this_handle );
		var_dump( $with_this_value );
		try {
			$GLOBALS[ $with_this_handle ] = new \allcom\al_black_boxes\al_logo\AL_BWT_Logo( $with_this_value );
			echo $GLOBALS[ $with_this_handle ];
		}
		catch ( \ErrorException $e ) {
			$GLOBALS[ $with_this_handle ] = false;
		} finally {
			return $GLOBALS[ $with_this_handle ];
		}
	}
	public static function get_me_a_new_bw_logo( $with_this_handle, $with_this_value ) {
		try {
			$GLOBALS[ $with_this_handle ] = new \black_willow\bw_black_boxes\bw_logo\BW_Logo( $with_this_value );
		}
		catch ( \ErrorException $e ) {
			$GLOBALS[ $with_this_handle ] = false;
		} finally {
			  return $GLOBALS[ $with_this_handle ];
		}
	}

	public static function get_me_a_new_al_splash( $with_this_handle, $with_this_value ) {
		try {
			$GLOBALS[ $with_this_handle ] = new \allcom\al_black_boxes\al_splash\AL_Splash( $with_this_value );
		}
		catch ( \ErrorException $e ) {
			$GLOBALS[ $with_this_handle ] = false;
		} finally {
			  return $GLOBALS[ $with_this_handle ];
		}
	}
	public static function get_me_a_new_al_bwt_splash( $with_this_handle, $with_this_value ) {
		try {
			$GLOBALS[ $with_this_handle ] = new \allcom\al_black_boxes\al_splash\AL_BWT_Splash( $with_this_value );
		}
		catch ( \ErrorException $e ) {
			$GLOBALS[ $with_this_handle ] = false;
		} finally {
			  return $GLOBALS[ $with_this_handle ];
		}
	}
	public static function get_me_a_new_bw_splash( $with_this_handle, $with_this_value ) {
		try {
			$GLOBALS[ $with_this_handle ] = new \black_willow\bw_black_boxes\bw_splash\BW_Splash( $with_this_value );
		}
		catch ( \ErrorException $e ) {
			$GLOBALS[ $with_this_handle ] = false;
		} finally {
			  return $GLOBALS[ $with_this_handle ];
		}
	}

}