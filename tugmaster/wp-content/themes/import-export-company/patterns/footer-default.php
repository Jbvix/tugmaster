<?php
/**
 * Footer Default
 * 
 * slug: import-export-company/footer-default
 * title: Footer Default
 * categories: import-export-company
 */

$theme_data = wp_get_theme();
$theme_uri = $theme_data->get( 'ThemeURI' );
$author_uri = $theme_data->get( 'AuthorURI' );
$wordpress_uri = '//wordpress.org/';

return array(
    'title'      =>__( 'Footer Default', 'import-export-company' ),
    'categories' => array( 'import-export-company' ),
    'content'    => '<!-- wp:group {"className":"footer-section","style":{"elements":{"link":{"color":{"text":"var:preset|color|fourground"}}},"spacing":{"padding":{"right":"0px","left":"0px"}}},"backgroundColor":"accent","textColor":"background","layout":{"type":"constrained","contentSize":"80%"}} -->
    <div class="wp-block-group footer-section has-background-color has-accent-background-color has-text-color has-background has-link-color" style="padding-right:0px;padding-left:0px"><!-- wp:columns {"className":"alignwide footer-content","style":{"spacing":{"padding":{"top":"35px","bottom":"35px","right":"0px","left":"0px"},"blockGap":{"top":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
    <div class="wp-block-columns alignwide footer-content" style="margin-top:0;margin-bottom:0;padding-top:35px;padding-right:0px;padding-bottom:35px;padding-left:0px"><!-- wp:column {"width":"%","className":"footer-box wow zoomIn footer-col01","style":{"spacing":{"blockGap":"20px","padding":{"right":"var:preset|spacing|60","left":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontFamily":"outfit"} -->
    <div class="wp-block-column footer-box wow zoomIn footer-col01 has-background-color has-text-color has-link-color has-outfit-font-family" style="padding-right:var(--wp--preset--spacing--60);padding-bottom:0;padding-left:0"><!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"700"}},"textColor":"background","fontFamily":"outfit"} /-->

    <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"small"} -->
    <p class="has-background-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:400;line-height:1.6">'. esc_html__('Lorem Ipsumis simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text','import-export-company') .'</p>
    <!-- /wp:paragraph -->

    <!-- wp:social-links {"iconColor":"accent","iconColorValue":"#0D3D4B","iconBackgroundColor":"background","iconBackgroundColorValue":"#fff","openInNewTab":true,"size":"has-normal-icon-size","className":"is-style-default social-box","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"0","right":"0"},"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
    <ul class="wp-block-social-links has-normal-icon-size has-icon-color has-icon-background-color is-style-default social-box" style="margin-top:var(--wp--preset--spacing--50);margin-right:0;margin-bottom:var(--wp--preset--spacing--50);margin-left:0"><!-- wp:social-link {"url":"www.facebook.com","service":"facebook"} /-->

    <!-- wp:social-link {"url":"https://x.com/","service":"twitter"} /-->

    <!-- wp:social-link {"url":"https://www.instagram.com/","service":"instagram"} /-->

    <!-- wp:social-link {"url":"www.linkedin.com","service":"linkedin"} /--></ul>
    <!-- /wp:social-links --></div>
    <!-- /wp:column -->

    <!-- wp:column {"className":"footer-box wow zoomIn footer-col02","style":{"spacing":{"blockGap":"20px","padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","bottom":"var:preset|spacing|50"}}}} -->
    <div class="wp-block-column footer-box wow zoomIn footer-col02" style="padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"className":"wp-block-heading","style":{"typography":{"fontSize":"28px","fontStyle":"normal","fontWeight":"600"}},"textColor":"background"} -->
    <h2 class="wp-block-heading has-background-color has-text-color" style="font-size:28px;font-style:normal;font-weight:600">'. esc_html__('Useful Links','import-export-company') .'</h2>
    <!-- /wp:heading -->

    <!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:navigation {"textColor":"#E1E1E1","overlayMenu":"never","className":"is-head-menu","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontFamily":"outfit","layout":{"type":"flex","justifyContent":"left","orientation":"vertical"}} -->
    <!-- wp:navigation-link {"label":"About Us","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

    <!-- wp:navigation-link {"label":"Shop","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

    <!-- wp:navigation-link {"label":"Blog","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

    <!-- wp:navigation-link {"label":"Contact Us","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
    <!-- /wp:navigation --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:column -->

    <!-- wp:column {"className":"footer-box wow zoomIn footer-col03","style":{"spacing":{"padding":{"right":"0","left":"var:preset|spacing|40","bottom":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"medium","fontFamily":"bricolage-grotesque"} -->
    <div class="wp-block-column footer-box wow zoomIn footer-col03 has-background-color has-text-color has-link-color has-bricolage-grotesque-font-family has-medium-font-size" style="padding-right:0;padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"className":"wp-block-heading","style":{"typography":{"fontSize":"28px","fontStyle":"normal","fontWeight":"600"}},"textColor":"background"} -->
    <h2 class="wp-block-heading has-background-color has-text-color" style="font-size:28px;font-style:normal;font-weight:600">'. esc_html__('Services','import-export-company') .'</h2>
    <!-- /wp:heading -->

    <!-- wp:navigation {"textColor":"#E1E1E1","overlayMenu":"never","className":"is-head-menu","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontFamily":"outfit","layout":{"type":"flex","justifyContent":"left","orientation":"vertical"}} -->
    <!-- wp:navigation-link {"label":"Skin \u0026 Beauty","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

    <!-- wp:navigation-link {"label":"Digestion \u0026 Detox","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

    <!-- wp:navigation-link {"label":"Sleep \u0026 Stress","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

    <!-- wp:navigation-link {"label":"Herbal Teas","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
    <!-- /wp:navigation --></div>
    <!-- /wp:column -->

    <!-- wp:column {"className":"footer-box wow zoomIn footer-col04","style":{"spacing":{"blockGap":"20px","padding":{"bottom":"var:preset|spacing|50"}}}} -->
    <div class="wp-block-column footer-box wow zoomIn footer-col04" style="padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:heading {"className":"wp-block-heading","style":{"typography":{"fontSize":"28px","fontStyle":"normal","fontWeight":"600"}},"textColor":"background"} -->
    <h2 class="wp-block-heading has-background-color has-text-color" style="font-size:28px;font-style:normal;font-weight:600">'. esc_html__('Contact Information','import-export-company') .'</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"className":"footer-phone","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"background","fontSize":"medium"} -->
    <p class="footer-phone has-background-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:500"><span class="dashicons dashicons-phone"></span><a href="tel:+1 (143) 456-7897">'. esc_html__('+1234567890','import-export-company') .'</a></p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph {"align":"left","className":"footer-mail","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"background","fontSize":"medium"} -->
    <p class="has-text-align-left footer-mail has-background-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:500"><span class="dashicons dashicons-email-alt"></span><a href="mailto:importexport@example.com">'. esc_html__('importexport@example.com','import-export-company') .'</a></p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph {"className":"footer-add","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"background","fontSize":"medium"} -->
    <p class="footer-add has-background-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:500"><span class="dashicons dashicons-admin-home"></span> <a href="#">'. esc_html__('123 Glassford Street New York, USA','import-export-company') .'</a></p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"copyright-text","backgroundColor":"accent","layout":{"type":"constrained","contentSize":"85%"}} -->
    <div class="wp-block-group copyright-text has-accent-background-color has-background"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"width":"100%"} -->
    <div class="wp-block-column" style="flex-basis:100%"><!-- wp:paragraph {"align":"center","className":"has-raleway-font-family","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"},":hover":{"color":{"text":"var:preset|color|accent"}}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"background","fontSize":"medium","fontFamily":"lato"} -->
    <p class="has-text-align-center has-raleway-font-family has-background-color has-text-color has-link-color has-lato-font-family has-medium-font-size" style="font-style:normal;font-weight:400"> <a href="'. esc_url( $theme_uri ) .'" target="_blank">'. esc_html__('Import Export Company By','import-export-company').'</a><a href="'. esc_url( $author_uri ) .'" target="_blank">'. esc_html__(' WP Radiant','import-export-company').'</a>'. esc_html__(' | Proudly powered by ','import-export-company').'<a href="'. esc_url( $wordpress_uri ) .'" target="_blank">  '. esc_html__(' WordPress','import-export-company').'</a></p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->

    <!-- wp:buttons -->
    <div class="wp-block-buttons"><!-- wp:button {"className":"scroll-top-button"} -->
    <div class="wp-block-button scroll-top-button"><a class="wp-block-button__link wp-element-button"><span class="dashicons dashicons-arrow-up-alt"></span></a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons -->',
);
