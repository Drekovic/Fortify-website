<?php get_header(); ?>


<div class="column mid">
<?php include (TEMPLATEPATH . "/sidebar_left.php"); ?>
<div class="column content_column content prepend-1">
	
    <?php if (have_posts()) : ?>
    <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

    <?php /* If this is a category archive */ if (is_category()) { ?>
    <h2 class="pagetitle">
      Archive for the '<?php echo single_cat_title(); ?>' Category
    </h2>

    <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
    <h2 class="pagetitle">
      Archive for <?php the_time('F jS, Y'); ?>
    </h2>

    <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
    <h2 class="pagetitle">
      Archive for <?php the_time('F, Y'); ?>
    </h2>

    <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
    <h2 class="pagetitle">
      Archive for <?php the_time('Y'); ?>
    </h2>

    <?php /* If this is a search */ } elseif (is_search()) { ?>
    <h2 class="pagetitle">Search Results</h2>

    <?php /* If this is an author archive */ } elseif (is_author()) { ?>
    <h2 class="pagetitle">Author Archive</h2>

    <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
    <h2 class="pagetitle">Blog Archives</h2>

    <?php } ?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="post">
        <h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>  <small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --> -- Posted in <?php the_category(', ') ?> | <span class="edit"><?php edit_post_link('Edit', '', ' | '); ?> </span> <span class="comment"> <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></span></small>	
	      <?php the_content('continue reading &#187;'); ?>	
	   
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

