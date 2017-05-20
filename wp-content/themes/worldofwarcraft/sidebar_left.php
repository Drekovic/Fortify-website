
<div class="column sidebar_left">

	<ul>

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : ?>


<?php /*?>
<li>
  <strong><?php _e('Search'); ?></strong>
	<form id="searchform" method="get" action="<?php bloginfo('siteurl')?>/">
		<input type="text" name="s" id="s" class="textbox" value="<?php echo wp_specialchars($s, 1); ?>" />
		<input id="btnSearch" type="submit" name="submit" value="<?php _e('Go'); ?>" />
	</form>
  </li><?php */?>
  
  <li>
    <h2>
      <?php _e('Categories'); ?>
    </h2>
    <ul>
      <?php wp_list_cats('optioncount=1&hierarchical=1');    ?>
	  
    </ul>
  </li>
  
  <li>
    <h2>
      <?php _e('Monthly'); ?>
    </h2>
    <ul>
      <?php wp_get_archives('type=monthly&show_post_count=true'); ?>
    </ul>
  </li>
  <li>
    <h2><?php _e('Pages'); ?></h2>
    <ul>
      <?php wp_list_pages('title_li=' ); ?>
    </ul>
  </li>	
<?php if(is_home()) {?>
  <?php get_links_list(); ?>    
  <li>
		<h2>Meta</h2>
		<ul>
			<?php wp_register(); ?>
			<li><?php wp_loginout(); ?></li>
			<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
			<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
			<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
<li><a href="http://www.wpthemesarchive.com/" title="WP Themes">Wordpress Themes</a></li>
			<?php wp_meta(); ?>
		</ul>			
   </li>
  <?php }?>
  <?php endif; ?>
</ul>


</div>


<div class="ad_lnk"><a href="http://www.books2help.com/books/biology-life-sciences/plants">download plants ebooks</a></div>