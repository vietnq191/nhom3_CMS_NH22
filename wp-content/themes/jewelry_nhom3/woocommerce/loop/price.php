<?php
/**
 * Loop Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;
?>

<?php if ( $price_html = $product->get_price_html() ) : ?>
	 <div class="product-prices"> 
	 <div class="new-price"> 
	 <span> <span class="price"> 
	 <span class="cm-reload-11000<?php echo get_the_id() ?> ty-price-update" id="price_update_11000<?php echo get_the_id() ?>"> 
	 <input type="hidden" name="appearance[show_price_values]" value="1"> 
	 <input type="hidden" name="appearance[show_price]" value="1"> 
    <span class="ty-price" id="line_discounted_price_11000<?php echo get_the_id() ?>"> 
    <span id="sec_discounted_price_11000<?php echo get_the_id() ?>" class="ty-price-num"><?php echo $product->get_price_html() ?></span>&nbsp; </span> 
    </span> </span> </span> </div> </div> 
<?php endif; ?>
