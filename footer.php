			</div>
		</div>
		<footer>
			<?php 
			$options = get_option('mcw_theme_options');
			if($sTweet = getLastQuoteFromTwitter($options['twitter_id'])): ?>
				<div id="tweet">
					<div class="centerWrapper">
						<q cite="http://twitter.com/#!/<?php echo $options['twitter_id']; ?>"><?php echo $sTweet; ?></q>
					</div>
				</div>
			<?php endif; ?>
			<div id="info">
				<div class="centerWrapper">
					<a href="http://www.wordpress.org/" target="_blank">WordPress</a> | Theme: <a href="https://github.com/MadCatme/mcw-blue" target="_blank">mcw[blue]</a>
				</div>
			</div>
		</footer>
		<?php wp_footer(); ?>
		<script src="<?php echo bloginfo('template_url'); ?>/js/production/libs/require/require.js" data-main="<?php echo bloginfo('template_url'); ?>/js/production/mcw"></script>
		<?php echo $options['custom_footer']; ?>
		<div data-module="modules/mcw/lightbox" data-module-parameters="<?php echo bloginfo('template_url'); ?>/images/"></div>
	</body>
</html>