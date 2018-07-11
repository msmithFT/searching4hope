			</div>
		</div>
	</div>
	<!-- CONTENT - END -->
  
  <!-- FOOTER - BEGIN -->
  <div id="footer">
    <div class="container">
	  <div class="col-sm-12">
	    <div class="row logo-bottom animate-100">
		  <a href="#"><img src="<?php echo esc_url(get_theme_mod('footer_logo', get_template_directory_uri() . '/assets/images/logo.png')); ?>" border="0"></a>
		</div>
	    <div class="row">
		  <ul class="footer-social">
		    <li class="fb"><a href="<?php echo esc_url(get_theme_mod('footer_fb')); ?>">&#xf09a;</a></li>
		    <li><a href="<?php echo esc_url(get_theme_mod('footer_twitter')); ?>">&#xf099;</a></li>
		    <li><a href="<?php echo esc_url(get_theme_mod('footer_dribble')); ?>">&#xf17d;</a></li>
		    <li><a href="<?php echo esc_url(get_theme_mod('footer_google')); ?>">&#xf1a0;</a></li>
		  </ul>
		</div>
		</div>
	    <div class="row">
		  <p><?php echo esc_html__( 'Theme Harvestly by Theme Scratch', 'harvestly' ); ?></p>
		</div>
	</div>
  </div>
  </div>
  <!-- FOOTER - END -->

</div>

<?php wp_footer(); ?>
</body>
</html>