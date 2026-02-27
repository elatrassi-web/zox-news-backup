<div id="mvp-side-wrap" class="left relative theiaStickySidebar">
	
	<div class="pub left center relative w100">
		<div id="div-gpt-ad-mpu_haut">
            
		</div>
	</div>
	
	<?php if ( is_single() || is_page() ) { ?>
		<?php if ( is_active_sidebar( 'mvp-sidebar-widget-post' ) ) { ?>
			<?php dynamic_sidebar( 'mvp-sidebar-widget-post' ); ?>
		<?php } ?>
	<?php } else { ?>
		<?php if ( is_active_sidebar( 'mvp-sidebar-widget' ) ) { ?>
			<?php dynamic_sidebar( 'mvp-sidebar-widget' ); ?>
		<?php } ?>
	<?php } ?>

	<div class="pub left center relative w100">
		<div id="div-gpt-ad-8" class="lazyload-rwad" data-position-desktop="8" data-position-mobile="108"></div>
	</div>

</div><!--mvp-side-wrap-->