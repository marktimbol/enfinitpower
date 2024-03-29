<?php
/**
 * Recommended Plugins
 */

wp_enqueue_style( 'plugin-install' );
wp_enqueue_script( 'plugin-install' );
wp_enqueue_script( 'updates' );
add_thickbox();
$aglee_lite_recommended_plugins = array(
	'8-degree-coming-soon-page' => array( 'recommended' => false ),
	'nivo-slider-lite'           => array( 'recommended' => false ),
	'pirate-forms' => array( 'recommended' => false ),
	'wp-product-review' => array( 'recommended' => false ),
	'adblock-notify-by-bweb' => array( 'recommended' => false ),
	'8-degree-notification-bar' => array('recommended' => false)
	);
	?>
	<div class="feature-section recommended-plugins">
		<?php foreach ( $aglee_lite_recommended_plugins as $plugin => $prop ) { ?>
		<?php
		$info   = $this->call_plugin_api( $plugin );
		$icon   = $this->check_for_icon( $info->icons );
		$active = $this->check_active( $plugin );
		$url    = $this->create_action_link( $active['needs'], $plugin );
		$label  = '';

		switch ( $active['needs'] ) {
			case 'install':
			$class = 'install-now button';
			$label = __( 'Install', 'aglee-lite' );
			break;
			case 'activate':
			$class = 'activate-now button button-primary';
			$label = __( 'Activate', 'aglee-lite' );
			break;
			case 'deactivate':
			$class = 'deactivate-now button';
			$label = __( 'Deactivate', 'aglee-lite' );
			break;
		}

		if ( ! empty( $prop['tracking_url'] ) ) {
			$url   = $prop['tracking_url'];
			$class = 'button';
			$label = __( 'Install', 'aglee-lite' );
		}

		?>
		<div class="col plugin_box">
			<?php if ( $prop['recommended'] ): ?>
				<span class="recommended"><?php _e( 'Required', 'aglee-lite' ); ?></span>
			<?php endif; ?>
			<p><img src="<?php echo esc_attr( $icon ) ?>" alt="plugin box image"></p>
			<span class="author-name"><?php echo wp_kses_post( $info->author ) ?></span>
			<div class="action_bar <?php echo ( $active['needs'] !== 'install' && $active['status'] ) ? 'active' : '' ?>">
				<span class="plugin_name"><?php echo ( $active['needs'] !== 'install' && $active['status'] ) ? 'Active: ' : '' ?><?php echo esc_html( $info->name ); ?></span>
			</div>
			<div class="b-wrap">
			<span class="version"><?php echo __( 'Version:', 'aglee-lite' ); ?><?php echo esc_html( $info->version ) ?></span>
			<span class="plugin-card-<?php echo esc_attr( $plugin ) ?> action_button <?php echo ( $active['needs'] !== 'install' && $active['status'] ) ? 'active' : '' ?>">
				<a data-slug="<?php echo esc_attr( $plugin ) ?>" <?php echo ( ! empty( $prop['tracking_url'] ) ) ? ' target="_blank" ' : '' ?>
					class="<?php echo esc_attr( $class ); ?>"
					href="<?php echo esc_url( $url ) ?>"> <?php echo esc_attr( $label ) ?>
				</a>
			</span>
			</div>
		</div>
		<?php 
	} ?>
</div>