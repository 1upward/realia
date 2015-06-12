<?php if ( empty( $instance['hide_featured'] ) ) : ?>
	<div class="form-group checkbox">
		<input type="checkbox" name="filter-featured"
			<?php echo ! empty( $_GET['filter-featured'] ) ? 'checked' : ''; ?>
			   id="<?php echo esc_attr( $args['widget_id'] ); ?>_featured">

		<label for="<?php echo esc_attr( $args['widget_id'] ); ?>_featured"><?php echo __( 'Featured', 'realia' ); ?></label>
	</div><!-- /.form-group -->
<?php endif; ?>