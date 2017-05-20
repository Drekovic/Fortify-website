<?php get_header(); ?>


<div class="column mid">

<?php include (TEMPLATEPATH . "/sidebar_left.php"); ?>

<div class="column content_column content prepend-1">
	
		<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<small> <!-- by <?php the_author() ?> -->| Category: <?php the_category(', ') ?> | <?php the_time('F jS, Y') ?></small>

				<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>

<span class="edit"><?php edit_post_link('Edit', '', ' | '); ?> </span> <span class="comment"> <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></span>

<?php /*?>
				<p class="postmetadata">Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p><?php */?>
				</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>

	</div>

	
	
	<?php get_sidebar(); ?>
	
</div>

<?php get_footer(); ?>
