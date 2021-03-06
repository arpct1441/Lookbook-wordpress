<?php
/**
 * Testimonials template
 */

$classes_list[] = 'jw-testimonials';
$equal_cols     = $this->get_settings( 'equal_height_cols' );

if ( 'true' === $equal_cols ) {
	$classes_list[] = 'jw-equal-cols';
}

$classes = implode( ' ', $classes_list );
?>

<div class="<?php echo esc_attr( $classes ); ?>">
	<?php $this->__get_global_looped_template( 'testimonials', 'item_list' ); ?>
</div>
