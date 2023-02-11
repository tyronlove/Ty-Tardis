<?php get_header(); ?>
<div class="ten columns"><a href="/" style="text-decoration:none!important;"><h1 class="title">Tyronlove.com</h1></a><hr></div>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="ten columns">
		<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

		<?php the_content('&raquo; More &raquo;'); ?>
<div class="all_posts"><a href="/archive/" style="
    font-size: 20px;">See all posts »</a></div>
</div> <!-- /end .post -->  

		<?php endwhile; ?>
		<?php else : ?>
		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php endif; ?>

<?php get_footer(); ?>
