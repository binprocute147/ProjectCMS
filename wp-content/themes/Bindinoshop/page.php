<?php get_header(); ?>
<div id="content">
	<div class="product-box page-category">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 ">
					<?php if (have_posts()): ?>
						<?php while (have_posts()): the_post(); ?>
							<?php setpostview(get_the_ID()); ?>
							<h1 class="single-title" style="font-size: 25px;color: #2196f3; font-weight: 500;line-height: 30px;"><?php the_title(); ?></h1>

							<div class="single-content">
								<?php the_content(); ?>
							</div>
						<?php endwhile;
					else: ?>
						<p>Chưa có bài viết nào</p>
					<?php endif; ?>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 ">
					<div class="sidebar">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php get_footer(); ?>