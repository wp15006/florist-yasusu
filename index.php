
<?php get_header(); ?>

<div class="clear"></div>
	<div class="container" id="content">
<?php if(is_single() ): ?>
	<!-- シングルページには何も表示しません -->
<?php else: ?>
		<h2><span>weblog</span></h2>
		<p class="hitokoto">eigo de comment please ! nice comment</p>
<?php endif; ?>
	<div class="clear"></div>

		<article>
			<?php if(is_single() ): ?>
					<!-- シングルページには何も表示しません -->
			<?php else: ?>
				<div class="pagenav">
					<span class="back"><?php next_posts_link('<i class="fa fa-angle-double-left"></i>  back'); ?></span>
					<span class="next"><?php previous_posts_link('next  <i class="fa fa-angle-double-right"></i>'); ?></span>
				</div>
				<div class="clear"></div>
			<?php endif; ?>

			<?php if(have_posts() ): ?>
				<?php while(have_posts()): the_post(); ?>
				<section class="content2">
				<?php if(is_single() ): ?>
				<h3>
					<i class="fa fa-heart"></i><?php the_title(); ?>
				</h3>
				<?php else: ?>
				<h3>
					<a href="<?php the_permalink(); ?>"><i class="fa fa-heart"></i><?php the_title(); ?></a>
				</h3>
				<?php endif; ?>
				<p><?php echo get_the_date('Y / n / d'); ?><!-- 日付表示 -->
				<?php the_time(); ?></p><!-- 時間表示 -->
				<div class="report"><?php the_content(); ?></div>
				<p>
					コメント: <?php comments_number(); ?><br>
					カテゴリ: <?php the_category(' , '); ?>
				</p>
				</section>

			<?php endwhile; endif; ?>

			<?php if(is_single() ): ?>
				<div class="pagenav">
					<span class="back"><?php next_post_link('%link','<i class="fa fa-angle-double-left"></i> %title'); ?></span>
					<span class="next"><?php previous_post_link('%link','%title <i class="fa fa-angle-double-right"></i>'); ?></span>
				</div>

				<?php comments_template('format=html5&title_reply=コメント&label_submit=送信'); ?>
			<?php else: ?>
				<div class="pagenav">
					<span class="back"><?php next_posts_link('<i class="fa fa-angle-double-left"></i>  back'); ?></span>
					<span class="next"><?php previous_posts_link('next  <i class="fa fa-angle-double-right"></i>'); ?></span>
				</div>
				<div class="clear"></div>
			<?php endif; ?>
		</article>

		<aside>
			<ul>
				<?php dynamic_sidebar(); ?>
			</ul>
		</aside>

<div class="clear"></div>

	</div><!-- container -->

<div class="clear"></div>


















































































<?php get_footer(); ?>
