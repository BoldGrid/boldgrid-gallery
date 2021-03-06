<?php
// Prevent direct calls
if ( ! defined( 'WPINC' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}
?>
<script type="text/html" id="tmpl-editor-gallery-boldgrid-slider">
 		<# if ( data.attachments ) { #>
			<div class="gallery gallery-columns-{{ data.columns }}">
				<# _.each( data.attachments, function( attachment, index ) { #>
					<# if ( index == 0 ) { #>
						<dl class="gallery-item single-image-imhwpb">
							<dt class="gallery-icon">
								<# if ( attachment.thumbnail ) { #>
									<img src="{{ attachment.thumbnail.url }}" width="{{ attachment.thumbnail.width }}" height="{{ attachment.thumbnail.height }}" />
								<# } else { #>
									<img src="{{ attachment.url }}" />
								<# } #>
							</dt>
						</dl>
					<# } #>
				<# } ); #>
			</div>
		<# } else { #>
			<div class="wpview-error">
				<div class="dashicons dashicons-format-gallery"></div><p><?php _e( 'No items found.' ); ?></p>
			</div>
		<# } #>
</script>
