<div class="category-box">
    <h3>Danh mục sản phẩm</h3>
    <div class="content-cat">
        <ul>
            <?php
            $args = array(
                'type'      => 'product',
                'child_of'  => 0,
                'hide_empty' => 0,
                'taxonomy'    => 'product_cat'
            );
            $categories = get_categories($args);
            foreach ($categories as $category) { ?>
                <li> <i class="fa fa-angle-right"></i> <a href="<?php echo get_term_link($category->slug, 'product_cat'); ?>"><?php echo $category->name; ?></a></li>
            <?php } ?>
        </ul>
    </div>
</div>
<div class="widget">
    <h3>
        <i class="fa fa-bars"></i>
        Tin tức
    </h3>
    <div class="content-w">
        <ul>
            <?php $args = array('post_status' => 'publish', 'post_type' => 'post', 'posts_per_page' => 7, 'cat' => 1); ?>
            <?php $getposts = new WP_query($args); ?>
            <?php global $wp_query;
            $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
            <li>
                <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('post-thumbnail'); ?>
                </a>
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <div class="clear"></div>
            </li>
            <?php endwhile;
            wp_reset_postdata(); ?>
        </ul>
    </div>
</div>
<div class="widget">
    <h3>
        <i class="fa fa-facebook"></i>
        Facebook
    </h3>
    <div class="content-fb">
        <div class="fb-page" data-href="https://www.facebook.com/huykiradotnet/" data-tabs="timeline" data-width="" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
    </div>
</div>