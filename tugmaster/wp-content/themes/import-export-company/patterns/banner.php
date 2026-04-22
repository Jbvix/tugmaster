<?php
/**
 * Banner Section
 * 
 * slug: import-export-company/banner
 * title: Banner
 * categories: import-export-company
 */

return array(
    'title'      =>__( 'Banner', 'import-export-company' ),
    'categories' => array( 'import-export-company' ),
    'content'    => '<!-- wp:group {"className":"banner-section","style":{"spacing":{"padding":{"right":"0px","left":"0px","top":"15px","bottom":"15px"}}},"backgroundColor":"accent","layout":{"type":"constrained","contentSize":"80%"}} -->
    <div class="wp-block-group banner-section has-accent-background-color has-background" style="padding-top:15px;padding-right:0px;padding-bottom:15px;padding-left:0px"><!-- wp:group {"className":"banner-content wow zoomIn","layout":{"type":"default"}} -->
    <div class="wp-block-group banner-content wow zoomIn"><!-- wp:image {"id":7,"width":"auto","height":"260px","sizeSlug":"large","linkDestination":"none","className":"banner-img"} -->
    <figure class="wp-block-image size-large is-resized banner-img"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/banner-img.png" alt="" class="wp-image-7" style="width:auto;height:260px"/></figure>
    <!-- /wp:image -->

    <!-- wp:heading {"className":"banner-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"60px","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"25px"}}},"textColor":"background"} -->
    <h2 class="wp-block-heading banner-title has-background-color has-text-color has-link-color" style="margin-top:25px;font-size:60px;font-style:normal;font-weight:500">'. esc_html__('Empowering Global Trade and Logistics','import-export-company') .'</h2>
    <!-- /wp:heading -->

    <!-- wp:columns {"className":"banner-btm-box","style":{"spacing":{"blockGap":{"top":"15px","left":"55px"},"margin":{"top":"30px"}}}} -->
    <div class="wp-block-columns banner-btm-box" style="margin-top:30px"><!-- wp:column {"width":"44%","className":"bnr-btm-left"} -->
    <div class="wp-block-column bnr-btm-left" style="flex-basis:44%"><!-- wp:image {"id":9,"width":"auto","height":"290px","sizeSlug":"full","linkDestination":"none","className":"banner-btm-img"} -->
    <figure class="wp-block-image size-full is-resized banner-btm-img"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/banner-btm-img.png" alt="" class="wp-image-9" style="width:auto;height:290px"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"28%","className":"bnr-btm-mid"} -->
    <div class="wp-block-column bnr-btm-mid" style="flex-basis:28%"><!-- wp:paragraph {"className":"banner-mid-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"26px","lineHeight":1.6,"fontStyle":"normal","fontWeight":"300"},"border":{"bottom":{"color":"var:preset|color|background","width":"1px"}},"spacing":{"padding":{"bottom":"20px"}}},"textColor":"background"} -->
    <p class="banner-mid-text has-background-color has-text-color has-link-color" style="border-bottom-color:var(--wp--preset--color--background);border-bottom-width:1px;padding-bottom:20px;font-size:26px;font-style:normal;font-weight:300;line-height:1.6">'. esc_html__('Connecting suppliers and buyers across continents through reliable import and export solutions.','import-export-company') .'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"28%","className":"bnr-btm-right"} -->
    <div class="wp-block-column bnr-btm-right" style="flex-basis:28%"><!-- wp:paragraph {"className":"banner-right-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"100","lineHeight":"1.4"}},"textColor":"background"} -->
    <p class="banner-right-text has-background-color has-text-color has-link-color" style="font-size:18px;font-style:normal;font-weight:100;line-height:1.4">'. esc_html__('At GlobalTradeLink, we simplify international trade by bridging the gap between manufacturers, distributors, and markets worldwide.','import-export-company') .'</p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"className":"banner-btn","style":{"spacing":{"margin":{"top":"8px"}}}} -->
    <div class="wp-block-buttons banner-btn" style="margin-top:8px"><!-- wp:button {"backgroundColor":"secaccent","style":{"typography":{"textTransform":"capitalize","fontSize":"16px","fontStyle":"normal","fontWeight":"500"},"border":{"radius":"5px"}}} -->
    <div class="wp-block-button"><a class="wp-block-button__link has-secaccent-background-color has-background has-custom-font-size wp-element-button" href="#" style="border-radius:5px;font-size:16px;font-style:normal;font-weight:500;text-transform:capitalize">'. esc_html__('explore services','import-export-company') .'</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons -->

    <!-- wp:social-links {"iconColor":"accent","iconColorValue":"#0D3D4B","iconBackgroundColor":"background","iconBackgroundColorValue":"#fff","openInNewTab":true,"size":"has-small-icon-size","className":"is-style-default banner-social-icon","style":{"spacing":{"blockGap":{"top":"18px","left":"18px"}}}} -->
    <ul class="wp-block-social-links has-small-icon-size has-icon-color has-icon-background-color is-style-default banner-social-icon"><!-- wp:social-link {"url":"www.facebook.com","service":"facebook"} /-->

    <!-- wp:social-link {"url":"www.instagram.com","service":"instagram"} /-->

    <!-- wp:social-link {"url":"www.x.com","service":"x"} /-->

    <!-- wp:social-link {"url":"www.youtube.com","service":"youtube"} /-->

    <!-- wp:social-link {"url":"www.pinterest.com","service":"pinterest"} /--></ul>
    <!-- /wp:social-links --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->

    <!-- wp:spacer {"height":"50px"} -->
    <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->',
);