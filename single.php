<?php get_header(); ?>

		<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

<div class="ten columns"><a href="/" style="text-decoration:none!important;"><h1 class="title">Tyronlove.com</h1></a><hr></div>
<div class="ten columns">
		<h2><?php the_title(); ?></h2>

		<?php the_content('&raquo; More &raquo;'); ?>
<div class="navigation">
<?php if (get_adjacent_post(false, '', true)): // if there are older posts ?>
<p><strong>Previous post</strong>: <?php previous_post_link('%link'); ?></p>
<?php endif; ?>

<?php if (get_adjacent_post(false, '', false)): // if there are newer posts ?>
<p><strong>Next post</strong>: <?php next_post_link('%link'); ?></p>
			<?php endif; ?>
</div> <!-- /end .navigation -->
	<!-- <div class="all_posts"><a href="/archives/">See all posts &raquo;</a></div> -->
                </div> <!-- /end .post -->
		<?php endwhile; ?>

		<?php else : ?>
</div>
		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>

		<?php endif; ?>

<?php get_footer(); ?>