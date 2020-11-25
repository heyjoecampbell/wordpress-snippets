<?php
/********* DO NOT COPY THE PARTS ABOVE THIS LINE *********/

/*
Woocommerce: Archive Pages - Remove Add to Cart Buttons
source: https://wordpress.org/support/topic/remove-add-to-cart-from-product-archive-page/#post-12144161
*/
add_action( 'woocommerce_after_shop_loop_item', 'remove_add_to_cart_buttons', 1 );

    function remove_add_to_cart_buttons() {
      if( is_product_category() || is_shop()) { 
        remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');
      }
}
