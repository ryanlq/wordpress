<?php get_header(); ?>

<h1 id="post-<?php the_ID(); ?>"><?php the_title(); ?></h1>

<?php 	if (have_posts()) : the_post(); 
	the_content();
	endif; 
?>

<?php edit_post_link('Edit', '<p>', '</p>'); ?>

<?php include 'allposts.php'; ?>

<?php get_footer(); ?>
