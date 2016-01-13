
<?php get_header(); ?>


<?php if(is_single() ): ?>
	<!-- シングルページには何も表示しません -->
<?php else: ?>
		<h2 id="h2title"><span><?php the_title(); ?></span></h2>
		<p class="hitokoto">eigo de comment please ! nice comment</p>
<?php endif; ?>
	<div class="clear"></div>
		<article class="kotei_article">
			<?php if(have_posts() ): ?>
				<?php while(have_posts()): the_post(); ?>
				<div class="report"><?php the_content(); ?></div>
			<?php endwhile; endif; ?>
		</article>

<div class="clear"></div>




































<?php get_footer(); ?>
