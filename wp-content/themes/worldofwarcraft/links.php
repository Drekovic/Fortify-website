<?php
/*
Template Name: Links
*/
?>

<?php get_header(); ?>


<div class="column mid">

<?php include (TEMPLATEPATH . "/sidebar_left.php"); ?>

<div class="column content_column content ">

<h2>Links:</h2>
<ul>
<?php get_links_list(); ?>
</ul>

</div>
	<?php get_sidebar(); ?>
	
</div>

<?php get_footer(); ?>

