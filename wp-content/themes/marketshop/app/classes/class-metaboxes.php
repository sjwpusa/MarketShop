<?php
/**
 * Created by PhpStorm.
 * User: saeed
 * Date: 12/01/2019
 * Time: 12:45 PM
 */

class MetaBoxes
{
    public static function register_product_price_meta_box()
    {
        add_meta_box(
            'product_price_meta_box',
            'قیمت محصول',
            'MetaBoxes::product_price_content_handler',
            'product',
            'side'
        );
    }

    public static function product_price_content_handler($post)
    {
        $product_price=get_post_meta($post->ID,'sjms_product_price',true);
        View::renderFile('admin.metabox.product.price',array('product_price'=> $product_price));
    }

    public static function product_price_save_handler($post_id)
    {

        /* Verify the nonce before proceeding. */
        if ( !isset( $_POST['sjms_product_price_nonce'] ) || !wp_verify_nonce($_POST['sjms_product_price_nonce'],'product_save_price') )
            return $post_id;

        if (isset($_POST['sjms_product_price']))
        {
            update_post_meta($post_id,'sjms_product_price',intval($_POST['sjms_product_price']));
        }

    }
}