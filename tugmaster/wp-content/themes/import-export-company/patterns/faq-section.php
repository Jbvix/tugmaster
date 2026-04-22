<?php
/**
 * FAQ Section
 * 
 * slug: import-export-company/faq-section
 * title: FAQ Section
 * categories: import-export-company
 */

    return array(
        'title'      =>__( 'FAQ Section', 'import-export-company' ),
        'categories' => array( 'import-export-company' ),
        'content'    => '<!-- wp:group {"className":"faq-section","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"backgroundColor":"secaccent","layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group faq-section has-secaccent-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"overlayColor":"accent","isUserOverlayColor":true,"isDark":false,"sizeSlug":"large","style":{"spacing":{"padding":{"right":"0px","left":"0px"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
        <div class="wp-block-cover is-light" style="padding-right:0px;padding-left:0px"><span aria-hidden="true" class="wp-block-cover__background has-accent-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"},"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} -->
        <div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:column {"className":"faq-left wow zoomInLeft","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
        <div class="wp-block-column faq-left wow zoomInLeft"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"18px"}},"textColor":"secaccent"} -->
        <p class="has-secaccent-color has-text-color has-link-color" style="font-size:18px;font-style:normal;font-weight:500">'. esc_html__('Frequently Asked Questions','import-export-company') .'</p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"30px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
        <h2 class="wp-block-heading has-secondary-color has-text-color has-link-color" style="font-size:30px;font-style:normal;font-weight:700">'. esc_html__('Have Any Questions For Us?','import-export-company') .'</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"className":"short-para-text","style":{"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":"1.8"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"spacing":{"padding":{"bottom":"var:preset|spacing|30"}}},"textColor":"secondary","fontSize":"extra-small","fontFamily":"rubik"} -->
        <p class="short-para-text has-secondary-color has-text-color has-link-color has-rubik-font-family has-extra-small-font-size" style="padding-bottom:var(--wp--preset--spacing--30);font-style:normal;font-weight:400;line-height:1.8">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s','import-export-company') .'</p>
        <!-- /wp:paragraph -->

        <!-- wp:image {"id":8,"sizeSlug":"full","linkDestination":"none","style":{"border":{"width":"0px","style":"none"}}} -->
        <figure class="wp-block-image size-full has-custom-border"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/FAQ.png" alt="" class="wp-image-8" style="border-style:none;border-width:0px"/></figure>
        <!-- /wp:image --></div>
        <!-- /wp:column -->

        <!-- wp:column {"className":"faq-right wow zoomInRight","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
        <div class="wp-block-column faq-right wow zoomInRight"><!-- wp:details {"showContent":true,"className":"faq-list","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
        <details class="wp-block-details faq-list" style="font-style:normal;font-weight:500" open><summary>'. esc_html__('Which countries do you import and export to?','import-export-company') .'</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
        <p class="has-secondary-color has-text-color has-link-color">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown proutfit took a galley of type and scrambled it to make a type specimen book.','import-export-company') .'</p>
        <!-- /wp:paragraph --></details>
        <!-- /wp:details -->

        <!-- wp:details {"className":"faq-list","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
        <details class="wp-block-details faq-list" style="font-style:normal;font-weight:400"><summary>'. esc_html__('What types of products do you specialize in?','import-export-company') .'</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"secondary"} -->
        <p class="has-secondary-color has-text-color has-link-color" style="font-style:normal;font-weight:400">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown proutfit took a galley of type and scrambled it to make a type specimen book.','import-export-company') .'</p>
        <!-- /wp:paragraph --></details>
        <!-- /wp:details -->

        <!-- wp:details {"className":"faq-list","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
        <details class="wp-block-details faq-list" style="font-style:normal;font-weight:500"><summary>'. esc_html__('How long does the import/export process take?','import-export-company') .'</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
        <p class="has-secondary-color has-text-color has-link-color">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown proutfit took a galley of type and scrambled it to make a type specimen book.','import-export-company') .'</p>
        <!-- /wp:paragraph --></details>
        <!-- /wp:details -->

        <!-- wp:details {"className":"faq-list","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
        <details class="wp-block-details faq-list" style="font-style:normal;font-weight:500"><summary>'. esc_html__('What are the payment terms for international trade?','import-export-company') .'</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
        <p class="has-secondary-color has-text-color has-link-color">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown proutfit took a galley of type and scrambled it to make a type specimen book.','import-export-company') .'</p>
        <!-- /wp:paragraph --></details>
        <!-- /wp:details -->

        <!-- wp:details {"className":"faq-list","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
        <details class="wp-block-details faq-list" style="font-style:normal;font-weight:500"><summary>'. esc_html__('How can I track my shipment status?','import-export-company') .'</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"secondary"} -->
        <p class="has-secondary-color has-text-color has-link-color" style="font-style:normal;font-weight:400">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown proutfit took a galley of type and scrambled it to make a type specimen book.','import-export-company') .'</p>
        <!-- /wp:paragraph --></details>
        <!-- /wp:details --></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns --></div></div>
        <!-- /wp:cover --></div>
        <!-- /wp:group -->

        <!-- wp:spacer {"height":"50px"} -->
        <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->',
    );