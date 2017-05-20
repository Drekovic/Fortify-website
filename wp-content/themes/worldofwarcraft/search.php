<?php get_header(); ?>

<div class="column mid">

	<?php include (TEMPLATEPATH . "/sidebar_left.php"); ?>
<div class="column content_column content prepend-1">

<div class="searc_results">

	<?php if (have_posts()) : ?>

		<h2 class="pagetitle">Search Results</h2>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>


		<?php while (have_posts()) : the_post(); ?>

			 <div class="post">
        <h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>	
	      <?php the_content('continue reading &#187;'); ?>	
	      <p class="posted"><?php the_time('F d Y'); ?>	| <?php the_category(' and ');?> | <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?><?php edit_post_link(' | edit this'); ?></p>
        <?php comments_template(); // Get wp-comments.php template ?>
      </div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">No posts found. Try a different search?</h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>
</div>
	</div>


	
	<?php get_sidebar(); ?>
	
</div>

<?php get_footer(); ?>
