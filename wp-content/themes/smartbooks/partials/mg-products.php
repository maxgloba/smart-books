<div class="row">
<?php
    $args = array(
      'post_type' => 'product',
      'orderby' => 'date',
      'order'   => 'ASC',
    );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
      global $product;
      $sale = $product->get_sale_price();
      $regular = $product->get_regular_price();
      $price = $product->get_price();
      $cur = 'грн.';
      $id = $product->get_id();
      $discount = $price * 100 / $regular - 100;
?>
    <div class="col-md-4 product product_<?php echo $id; ?>">
      <div class="product-inner">
        <a href="<?php the_permalink(); ?>" class="product-img"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></a>
        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <div class="product-desc"><?php the_excerpt(); ?></div>
        <div class="price-wrap">
          <?php if( $sale ): ?>
            <span class="price"><?php echo $sale; ?><span><?php echo $cur; ?></span></span>
            <span class="price-old"><?php echo $regular; ?><span><?php echo $cur; ?></span></span>
            <!-- <span class="price-sale"><?php echo $discount; ?>%</span> -->
          <?php else: ?>
            <span class="price"><?php echo $regular; ?><span><?php echo $cur; ?></span></span>
          <?php endif; ?>
        </div>
        <a class="btn btn-link" href="<?php the_permalink(); ?>">Подробнее</a>
        <button class="btn btn-add addToCart" data-product_id="<?php echo $id; ?>" data-quantity="1">Добавить в корзину</button>
      </div>
    </div>
<?php endwhile; wp_reset_query(); ?>
</div>