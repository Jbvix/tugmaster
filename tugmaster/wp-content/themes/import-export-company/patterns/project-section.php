<?php
/**
 * Project Section
 * 
 * slug: import-export-company/project-section
 * title: Project Section
 * categories: import-export-company
 */

return array(
    'title'      =>__( 'Project Section', 'import-export-company' ),
    'categories' => array( 'import-export-company' ),
    'content'    => '<!-- wp:group {"className":"project-section","style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0px","right":"0px"}}},"backgroundColor":"fourthaccent","layout":{"type":"constrained","contentSize":"80%"}} -->
    <div class="wp-block-group project-section has-fourthaccent-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0px;padding-bottom:0;padding-left:0px"><!-- wp:group {"className":"project-head-box wow fadeInDown","layout":{"type":"default"}} -->
    <div class="wp-block-group project-head-box wow fadeInDown"><!-- wp:heading {"textAlign":"center","level":3,"className":"project-sec-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"textTransform":"capitalize","fontSize":"28px"}},"textColor":"accent"} -->
    <h3 class="wp-block-heading has-text-align-center project-sec-title has-accent-color has-text-color has-link-color" style="font-size:28px;text-transform:capitalize">'. esc_html__('recent trade projects','import-export-company') .'</h3>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","className":"project-sec-para","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"300"},"spacing":{"margin":{"top":"10px"}}},"textColor":"accent"} -->
    <p class="has-text-align-center project-sec-para has-accent-color has-text-color has-link-color" style="margin-top:10px;font-size:16px;font-style:normal;font-weight:300">'. esc_html__('Showcasing our successful global trade operations and trusted partnerships across industries.','import-export-company') .'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->

    <!-- wp:spacer {"height":"40px"} -->
    <div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:query {"queryId":17,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-standard-posts","name":"Standard"},"className":"project-boxes wow fadeInUp"} -->
    <div class="wp-block-query project-boxes wow fadeInUp"><!-- wp:post-template {"className":"project-in-box","layout":{"type":"grid","columnCount":3}} -->
    <!-- wp:group {"align":"wide","className":"project-box","style":{"spacing":{"padding":{"top":"12px","bottom":"12px","left":"12px","right":"12px"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group alignwide project-box" style="padding-top:12px;padding-right:12px;padding-bottom:12px;padding-left:12px"><!-- wp:group {"align":"wide","className":"project-img-box","style":{"color":{"background":"#f6f6f6"},"dimensions":{"minHeight":"450px"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group alignwide project-img-box has-background" style="background-color:#f6f6f6;min-height:450px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image {"isLink":true,"height":"450px","align":"wide","className":"project-img"} /--></div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"project-content","style":{"spacing":{"padding":{"top":"0px","bottom":"0px"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group project-content" style="padding-top:0px;padding-bottom:0px"><!-- wp:group {"className":"project-content-box","style":{"spacing":{"padding":{"top":"16px","bottom":"16px","left":"20px","right":"20px"}}},"backgroundColor":"background","layout":{"type":"default"}} -->
    <div class="wp-block-group project-content-box has-background-background-color has-background" style="padding-top:16px;padding-right:20px;padding-bottom:16px;padding-left:20px"><!-- wp:post-title {"textAlign":"center","isLink":true,"className":"project-title","style":{"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent"} /-->

    <!-- wp:post-excerpt {"textAlign":"center","moreText":"know more","excerptLength":10,"className":"project-desc","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"15px","bottom":"15px"}}},"textColor":"accent"} /--></div>
    <!-- /wp:group --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->
    <!-- /wp:post-template --></div>
    <!-- /wp:query -->

    <!-- wp:spacer {"height":"40px"} -->
    <div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer --></div>
    <!-- /wp:group -->

    <!-- wp:spacer {"height":"50px"} -->
    <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->',
);