<?php
	require_once( 'constants.php' );

	$page_title = get_the_title( $ID ) . ' | ' . SITE_NAME;

	$scrollpoint = 349;

	$banner = null;

	switch ( get_the_ID() ) {
		case 18:	$banner = " the_disease_banner";
					break;

		case 20:	$banner = " the_treatment_banner";
					break;

		case 22:	$banner = " public_policy_banner";
					break;

		case 24:	$banner = " biology_basics_banner";
					break;

		default:	$banner = " header_bg";
					break;
	}
?>