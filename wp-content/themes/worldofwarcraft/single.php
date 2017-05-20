<?php get_header(); ?>

<div class="column mid">

	<?php include (TEMPLATEPATH . "/sidebar_left.php"); ?>
<div class="column content_column content prepend-1">

    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="post">
        <h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>	
	      <?php the_content('continue reading &#187;'); ?>	
	      <p class="posted"><?php the_time('F d Y h:i a'); ?>	| <?php the_category(' and ');?> <?php edit_post_link(' | edit this'); ?></p>
        <?php comments_template(); // Get wp-comments.php template ?>
      </div>
    <?php endwhile; ?>
    <p align="center">
      <?php posts_nav_link(' - ','&#171; Prev','Next &#187;') ?>
    </p>
    <?php else : ?>
    <h2 class="center">Not Found</h2>
    <p class="center">Sorry, but you are looking for something that isn't here.</p>
    <?php endif; ?>
</div>



	<?php get_sidebar(); ?>
	
</div>

<?php get_footer(); ?>
