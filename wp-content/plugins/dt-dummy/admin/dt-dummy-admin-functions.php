<?php
function dt_dummy_display_checkbox( $atts ) {
	$defaults = array(
		'name' => '',
		'value' => '1'
	);
	$atts = wp_parse_args( $atts, $defaults );
	$atts = array_map( 'esc_attr', $atts );

	$atts_combined = array();
	foreach ( $atts as $att=>$value ) {
		$atts_combined[] = sprintf( '%s="%s"', esc_html( $att ), $value );
	}

	echo '<input type="checkbox" ' . implode( ' ', $atts_combined ) . ' />';
}

function dt_dummy_get_content_nice_name( $dummy_id, $dummy ) {
	$default_nice_names = array(
		'all' => __( 'Full content', 'dt-dummy' ),
	);

	$nice_name = '';
	if ( empty( $dummy['nice_name'] ) && array_key_exists( $dummy_id, $default_nice_names ) ) {
		$nice_name = $default_nice_names[ $dummy_id ];
	} else if ( ! empty( $dummy['nice_name'] ) ) {
		$nice_name = $dummy['nice_name'];
	}

	return $nice_name;
}
