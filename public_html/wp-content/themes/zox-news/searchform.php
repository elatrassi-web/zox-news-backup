<form method="get" id="searchform" action="<?php echo esc_url( home_url( '' ) ); ?>/">
	<input type="text" name="s" id="s" value="<?php esc_html_e( 'Rechercher', 'zox-news' ); ?>" onfocus='if (this.value == "<?php esc_html_e( 'Rechercher', 'zox-news' ); ?>") { this.value = ""; }' onblur='if (this.value == "") { this.value = "<?php esc_html_e( 'Rechercher', 'zox-news' ); ?>"; }' />
	<input type="hidden" id="searchsubmit" value="<?php esc_html_e( 'Rechercher', 'zox-news' ); ?>" />
</form>