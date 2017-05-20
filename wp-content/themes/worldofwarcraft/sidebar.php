
<div class="column  sidebar_right prepend-1">

	
	<?php /*?>
						<div align="center">
<a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/rss.jpg" border="0" alt="rss"  /></a>
</div>	<br /><?php */?>

		<ul>		
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : ?>
			
			<li class="box">
				<ul><?php wp_list_pages('title_li=<h2>Pages</h2>'); ?></ul>
			</li>
				
			<li class="box">
			
			<h2>Archives</h2>
				<ul><?php wp_get_archives('type=monthly'); ?></ul>
				</li>
		

			<?php endif; ?>
	</ul>


</div>

<div class="ad_lnk"><a href="http://www.clone24.com">download wordpress themes</a></div>