<?php get_header(); ?>
<div id="content">
    <div class="product-box page-category">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 ">
                    <?php if (have_posts()): ?>
                        <?php while (have_posts()): the_post(); ?>
                            <?php setpostview(get_the_ID()); ?>
                            <h1 class="single-title"><?php the_title(); ?></h1>
                            <div class="meta-single">
                                <span>Tác giả: <?php the_author(); ?></span>
                                <span>Chuyên mục: <?php the_category(', '); ?></span>
                                <span>Lượt xem: <?php echo getpostviews(get_the_ID()); ?></span>
                            </div>
                            <div class="single-content">
                                <?php the_content(); ?>
                            </div>
                            <div class="tag-single">
                                <?php the_tags(''); ?>
                            </div>
                            <br>
                            <div class="related-post">
                                <?php
                                $categories = get_the_category(get_the_ID());
                                if ($categories) {
                                    $category_ids = array();
                                    foreach ($categories as $individual_category) $category_ids[] = $individual_category->term_id;

                                    $args = array(
                                        'category__in' => $category_ids,
                                        'post__not_in' => array(get_the_ID()),
                                        'showposts' => 5, // Số bài viết bạn muốn hiển thị.
                                    );
                                    $my_query = new wp_query($args);
                                    if ($my_query->have_posts()) {
                                        echo '<h3>Bài viết liên quan</h3>';
                                        while ($my_query->have_posts()) {
                                            $my_query->the_post();
                                ?>
                                            <div class="list-news">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                        <a href="<?php the_permalink(); ?>">
                                                            <?php the_post_thumbnail('full'); ?>
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                        <h4>
                                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                        </h4>
                                                        <?php the_excerpt(); ?>
                                                        <a href="<?php the_permalink(); ?>" class="read-more">Xem Chi Tiết</a>
                                                    </div>
                                                </div>
                                            </div>
                                <?php
                                        }
                                    }
                                }
                                ?>
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