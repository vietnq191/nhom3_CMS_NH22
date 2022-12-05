<?php
//Variables
$number_of_products = block_value('number-of-products');

// The Query
$the_query = new WP_Query(
    array(
        'post_type' => 'product',
        'posts_per_page' => $number_of_products,
        'orderby' => 'date',
        'order'   => 'DESC',
    )
);
do_action('woocommerce_before_single_product');
if ($the_query->have_posts()) {
    ?>
<div class=' main-content-grid'>
    <div class='ty-pagination-container cm-pagination-container' id='pagination_contents'>
        <div id='ajax_pagination_contents' class="mp-flexible-products-v1 mp-horizontal-product mp-flexible-products-outer grid-list">
                <?php 
                    $count = 0;
                    $first = 1;
                    while ($the_query->have_posts()) {
                        $the_query->the_post();
                
                        // Variables
                        $categories = get_the_category();
                        $first_cat = $categories[0]->name;
                        $product = wc_get_product( get_the_id() );
                        $permalink = $product->get_permalink();
                ?>
                	        <div class='product type-product post-<?php echo get_the_id() ?> status-publish has-post-thumbnail shipping-taxable purchasable product-type-simple product-item ty-column5' style="margin-bottom:20px">
                	        <form action="https://jewelry-cms.com/" method="post" name="product_form_11000<?php echo get_the_id() ?>" enctype="multipart/form-data" class="cm-disable-empty-files cm-ajax product_datalayer cm-ajax-full-render cm-ajax-status-middle  cm-processed-form">
                	            <input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*,popup_mobile_item_add_to_cart"> <input type="hidden" name="redirect_url" value="index.php?dispatch=products.view&amp;product_id=<?php echo get_the_id() ?>">
                	            <input type="hidden" name="product_data[<?php echo get_the_id() ?>][product_id]" value="<?php echo get_the_id() ?>">
                	            <input type="hidden" name="product_data[<?php echo get_the_id() ?>][amount]" value="1">
                	            <div class="product-image"> 
                	            <a href="<?php echo $permalink ?>" onclick="return productClick(this)" data-catecurr="Hàng mới" data-block="" data-sku="GNDDDDW009789" data-id="<?php echo get_the_id() ?>" data-category="Nhẫn/Nhẫn vàng PNJ" data-brand="PNJ" data-price="21311000.000000" title="<?php echo the_title(); ?>">
                	                <img class="ty-pict image-lazyload not-scale" id="det_img_11000<?php echo get_the_id() ?>" src="<?php echo wp_get_attachment_url( $product->get_image_id() ); ?>" alt="<?php echo the_title(); ?>" title="<?php echo the_title(); ?>" width="300" height="300" style="display: inline;"> 
                	            </a> 
                	            <span class="mp-tag-wrapper mp-tag-wrapper-type-top-right">
                	           <?php if(get_the_date('Y', $product->get_id()) == date("Y")) : ?>
                	            <img class="image-lazyload" src="https://cdn.pnj.io/images/image-update/tag-product/new-icon-3-w29.svg" alt="<?php echo the_title(); ?>" style="display: inline;">
                	            <?php endif; ?>
                	            </span> <div class="product-delivery"> </div> </div> 
                	            <input type="hidden" id="cdp_product_id<?php echo get_the_id() ?>" value="GNDDDDW009789"> <input type="hidden" id="cdp_product_name<?php echo get_the_id() ?>" value="<?php echo the_title(); ?>"> 
                	            <input type="hidden" id="cdp_product_sku<?php echo get_the_id() ?>" value="GNDDDDW009789"> <input type="hidden" id="cdp_product_price<?php echo get_the_id() ?>" value="21311000.000000">
                	            <input type="hidden" id="cdp_product_url<?php echo get_the_id() ?>" value="<?php echo $permalink ?>">
                	            <div class="list-button-hover product-cart-buy product_only_option buy-now-hidden"> 
                	            <div class="mp-compare">
                	                <a class="ty-btn ty-btn__text ty-add-to-compare cm-ajax cm-ajax-full-render text-button" href="https://www.pnj.com.vn/index.php?dispatch=product_features.add_product&amp;product_id=<?php echo get_the_id() ?>" rel="nofollow" data-ca-target-id="comparison_list,account_info*,cart_status2*">
                	            <i class="mp-sprite"></i></a> </div> <div class="mp-btn-wishlist">
                	            <a class="ty-btn ty-btn__text ty-add-to-wish cm-submit text-button" id="button_wishlist_11000<?php echo get_the_id() ?>" data-ca-dispatch="dispatch[wishlist.add..<?php echo get_the_id() ?>]"><i class="mp-sprite"></i></a> </div> </div> 
                	            <div class="product-container"> 
                	            <a onclick="return productClick(this)" data-catecurr="Hàng mới" data-block="" data-sku="GNDDDDW009789" data-id="<?php echo get_the_id() ?>" data-category="Nhẫn/Nhẫn vàng PNJ" data-price="21311000.000000" href="<?php echo $permalink ?>" class="product-title" title="<?php echo the_title(); ?>"><?php echo the_title(); ?></a>
                	            <div class="product-prices"> <div class="new-price"> <span> <span class="price"> <span class="cm-reload-11000<?php echo get_the_id() ?> ty-price-update" id="price_update_11000<?php echo get_the_id() ?>"> <input type="hidden" name="appearance[show_price_values]" value="1"> <input type="hidden" name="appearance[show_price]" value="1"> 
                	            <span class="ty-price" id="line_discounted_price_11000<?php echo get_the_id() ?>"> <span id="sec_discounted_price_11000<?php echo get_the_id() ?>" class="ty-price-num"><?php echo $product->get_price_html() ?></span>&nbsp; </span> <!--price_update_1100066044--></span> </span> </span> </div> </div> </div> 
                	            <ul class="woocommerce">
                	                <li class="product">
                                    <!--<a href="?add-to-cart=<?php echo get_the_id() ?>" data-quantity="1" class="button wp-element-button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo get_the_id() ?>" data-product_sku="" aria-label="Thêm “<?php echo the_title(); ?>” vào giỏ hàng" rel="nofollow">Thêm vào giỏ hàng</a>-->
                	                <?php echo apply_filters(
                                      'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
                                        sprintf(
                                            '<a href="%s" data-quantity="%s" class="%s" %s data-product_id="%s" rel="nofollow">%s</a>',
                                            esc_url( $product->add_to_cart_url() ),
                                            esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
                                            esc_attr( isset( $args['class'] ) ? $args['class'] : 'button wp-element-button product_type_simple add_to_cart_button ajax_add_to_cart' ),
                                            isset( $args['attributes'] ) ? wc_implode_html_attributes( $args['attributes'] ) : '',
                                            esc_attr( isset( $args['product_id'] ) ? $args['product_id'] : get_the_id() ),
                                            esc_html( $product->add_to_cart_text() )
                                        ),
                                      $product,
                                      $args
                                    ); ?>
                	                </li>
                	            </ul>
                	            </form>
                	    </div>
                    <?php
                        $count++;
                        }
                  ?>
                  </div> 
            </div><!--.row-->
        </div><!--.item-->  
        <div class="ty-wysiwyg-content"><div class="main-title m-main-title"> <p class="short-title mp-solid"> <a href="https://jewelry-cms.com/san-pham-moi/">Xem thêm</a> </p> </div></div>                  

<?php
} else {
    // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
?>