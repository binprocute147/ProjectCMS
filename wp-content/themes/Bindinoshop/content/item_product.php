<?php global $product; ?>
<div class="item-product">
    <div class="thumb">
        <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'thumnail')); ?></a>
        <span class="sale">Giảm <br><?php echo percentSale($product->get_regular_price(), $product->get_sale_price()); ?>%</span>
        <div class="action">
            <a href="?add-to-cart=<?php the_ID(); ?>" class="buy"><i class="fa fa-cart-plus"></i> Mua ngay</a>
            <?php
            // Lấy URL thêm vào yêu thích trực tiếp từ plugin
            $wishlist_url = add_query_arg(
                array(
                    'add_to_wishlist' => get_the_ID(),
                ),
                home_url()
            );
            ?>
            <a href="<?php echo esc_url($wishlist_url); ?>" rel="nofollow" data-product-id="<?php echo get_the_ID(); ?>" data-product-type="simple" class="like add_to_wishlist">
                <i class="fa fa-heart"></i> Yêu thích
            </a>
            <div class="clear"></div>
        </div>
    </div>
    <div class="info-product">
        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <div class="price">
            <?php echo $product->get_price_html(); ?>
        </div>
        <a href="<?php the_permalink(); ?>" class="view-more">Xem chi tiết</a>
    </div>
</div>
