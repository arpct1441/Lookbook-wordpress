<?php
/**
 * Team Member main template
 */
$cover_hint = $this->get_settings( 'cover_like_hint' );
$hint_corner = $this->get_settings( 'use_hint_corner' );
$show_on_hover = $this->get_settings( 'show_on_hover' );

$classes_list[] = 'jw-team-member';

if ( filter_var( $cover_hint, FILTER_VALIDATE_BOOLEAN ) ) {
	$classes_list[] = 'jw-team-member--cover-hint';
}

if ( filter_var( $hint_corner, FILTER_VALIDATE_BOOLEAN ) ) {
	$classes_list[] = 'jw-team-member--hint-corner';
}

if ( filter_var( $show_on_hover, FILTER_VALIDATE_BOOLEAN ) ) {
	$classes_list[] = 'jw-team-member--cover-hover';
}

$classes = implode( ' ', $classes_list );

?>
<div class="<?php echo esc_attr( $classes ); ?>">
	<div class="jw-team-member__inner">
		<div class="jw-team-member__image">
			<div class="jw-team-member__cover"><?php
				echo wp_kses_post( $this->__generate_name( true ) );
				echo wp_kses_post( $this->__generate_position( true ) );
				echo wp_kses_post( $this->__generate_description( true ) );
				echo wp_kses_post( $this->__generate_social_icon_list( true ) );
				echo wp_kses_post( $this->__generate_action_button( true ) ); ?></div>
			<?php echo wp_kses_post( $this->__get_member_image() ); ?>
		</div>
		<div class="jw-team-member__content"><?php
			echo wp_kses_post( $this->__generate_name() );
			echo wp_kses_post( $this->__generate_position() );
			echo wp_kses_post( $this->__generate_description() );
			echo wp_kses_post( $this->__generate_social_icon_list() );
			echo wp_kses_post( $this->__generate_action_button() ); ?></div>
	</div>
</div>
