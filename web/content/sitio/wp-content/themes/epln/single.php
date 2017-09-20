<?php get_header(); ?>

<div id="left">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="entry">
<div class="post" id="post-<?php the_ID(); ?>">
<h2><a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>
<p><?php the_time('F jS, Y') ?> <?php the_author() ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>

<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
<?php if ( function_exists('the_tags') ) { the_tags('<p>Tags: ', ', ', '</p>'); } ?>
</div></div>

<div class="entry">
	<?php comments_template(); ?>
</div>
	<?php endwhile; else: ?>
<div class="entry">
		<p>Sorry, no posts matched your criteria.</p>
</div>
<?php endif; ?>

	</div>
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>
