</div><!--mvp-main-body-wrap-->
			<footer id="mvp-foot-wrap" class="left relative">
				<!-- Quantcast Tag -->
<script type="text/javascript">
var _qevents = _qevents || [];

(function() {
var elem = document.createElement('script');
elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";
elem.async = true;
elem.type = "text/javascript";
var scpt = document.getElementsByTagName('script')[0];
scpt.parentNode.insertBefore(elem, scpt);
})();

_qevents.push({
qacct:"p-a7H8LtgbmOagA",
uid:"__INSERT_EMAIL_HERE__"
});
</script>

<noscript>
<div style="display:none;">
<img src="//pixel.quantserve.com/pixel/p-a7H8LtgbmOagA.gif" border="0" height="1" width="1" alt="Quantcast"/>
</div>
</noscript>
<!-- End Quantcast tag -->
				<div style="text-align: center;padding: 10px;">
					<?php echo adrotate_group(2); ?>
				</div>
					<div id="mvp-foot-top" class="left relative">
					<div class="mvp-main-box">
						<div id="mvp-foot-logo" class="left relative">
							<?php if(get_option('mvp_logo_foot')) { ?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(get_option('mvp_logo_foot')); ?>" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /></a>
							<?php } else { ?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-large.png" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /></a>
							<?php } ?>
						</div><!--mvp-foot-logo-->
						<div id="mvp-foot-soc" class="left relative">
							<ul class="mvp-foot-soc-list left relative">
								<?php if(get_option('mvp_facebook')) { ?>
									<li><a href="<?php echo esc_url(get_option('mvp_facebook')); ?>" target="_blank" class="fa fa-facebook fa-2"></a></li>
								<?php } ?>
								<?php if(get_option('mvp_twitter')) { ?>
									<li><a href="<?php echo esc_url(get_option('mvp_twitter')); ?>" target="_blank" class="fa fa-twitter fa-2"></a></li>
								<?php } ?>
								<?php if(get_option('mvp_pinterest')) { ?>
									<li><a href="<?php echo esc_url(get_option('mvp_pinterest')); ?>" target="_blank" class="fa fa-pinterest-p fa-2"></a></li>
								<?php } ?>
								<?php if(get_option('mvp_instagram')) { ?>
									<li><a href="<?php echo esc_url(get_option('mvp_instagram')); ?>" target="_blank" class="fa fa-instagram fa-2"></a></li>
								<?php } ?>
								<?php if(get_option('mvp_google')) { ?>
									<li><a href="<?php echo esc_url(get_option('mvp_google')); ?>" target="_blank" class="fa fa-google-plus fa-2"></a></li>
								<?php } ?>
								<?php if(get_option('mvp_youtube')) { ?>
									<li><a href="<?php echo esc_url(get_option('mvp_youtube')); ?>" target="_blank" class="fa fa-youtube-play fa-2"></a></li>
								<?php } ?>
								<?php if(get_option('mvp_linkedin')) { ?>
									<li><a href="<?php echo esc_url(get_option('mvp_linkedin')); ?>" target="_blank" class="fa fa-linkedin fa-2"></a></li>
								<?php } ?>
								<?php if(get_option('mvp_tumblr')) { ?>
									<li><a href="<?php echo esc_url(get_option('mvp_tumblr')); ?>" target="_blank" class="fa fa-tumblr fa-2"></a></li>
								<?php } ?>
							</ul>
						</div><!--mvp-foot-soc-->
						<div id="mvp-foot-menu-wrap" class="left relative">
							<div id="mvp-foot-menu" class="left relative">
								<?php wp_nav_menu(array('theme_location' => 'footer-menu', 'fallback_cb' => 'false')); ?>
								<p id="back-top" style="display: block;"><a href="#top"><span></span></a></p>
							</div><!--mvp-foot-menu-->
						</div><!--mvp-foot-menu-wrap-->
					</div><!--mvp-main-box-->
				</div><!--mvp-foot-top-->
				<div id="mvp-foot-bot" class="left relative">
					<div class="mvp-main-box">
						<div id="mvp-foot-copy" class="left relative">
							<p><?php echo wp_kses_post(get_option('mvp_copyright')); ?></p>
						</div><!--mvp-foot-copy-->
					</div><!--mvp-main-box-->
				</div><!--mvp-foot-bot-->
			</footer>
		</div><!--mvp-site-main-->
	</div><!--mvp-site-wall-->
</div><!--mvp-site-->
<div class="mvp-fly-top back-to-top">
	<i class="fa fa-angle-up fa-3"></i>
</div><!--mvp-fly-top-->
<div class="mvp-fly-fade mvp-fly-but-click">
</div><!--mvp-fly-fade-->
<?php wp_footer(); ?>
</body>
</html>