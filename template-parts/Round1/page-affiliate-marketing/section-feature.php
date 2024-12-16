 <section class="feature">
     <div class="container font-size-H2--semi feature__headline">
         <h2 class="headline">
             <?= get_field('page_affiliate_marketing_feature_heading'); ?>
         </h2>
     </div>
     <?php $page_affiliate_marketing_features_items = get_field('page_affiliate_marketing_features_items'); ?>
     <?php if (array_key_exists(0, $page_affiliate_marketing_features_items)) :
            $program = $page_affiliate_marketing_features_items[0]; ?>
         <div class="container feature__container">
             <div class="feature__left">
                 <span class="badge badge--azure-blue-light"><?= $program['sub_heading'] ?></span>
                 <h3 class="section-title feature__title">
                     <?= $program['heading'] ?>
                 </h3>
                 <div class="section-description feature__description">
                     <?= $program['content'] ?>
                 </div>
                 <a class="section-link-btn feature__link"
                     href="<?= $program['button_link']['url'] ?>"><?= $program['button_link']['title'] ?>
                     <?= wp_get_attachment_image(ARROW_BLUE, 'full', true); ?></a>
             </div>
             <div class="feature__right">
                 <?= wp_get_attachment_image($program['feature_image'], 'full', true); ?>
             </div>
         </div>
     <?php endif; ?>
     <?php if (array_key_exists(1, $page_affiliate_marketing_features_items)) :
            $program = $page_affiliate_marketing_features_items[1]; ?>
         <div class="container feature__container recruitment__container--reverse">
             <div class="feature__left">
                 <span class="badge badge--azure-blue-light"><?= $program['sub_heading'] ?></span>
                 <h3 class="section-title feature__title">
                     <?= $program['heading'] ?>
                 </h3>
                 <div class="section-description feature__description">
                     <?= $program['content'] ?>
                 </div>
                 <a class="section-link-btn feature__link"
                     href="<?= $program['button_link']['url'] ?>"><?= $program['button_link']['title'] ?>
                     <?= wp_get_attachment_image(ARROW_BLUE, 'full', true); ?></a>
             </div>
             <div class="feature__right ">
                 <?= wp_get_attachment_image($program['feature_image'], 'full', true); ?>
             </div>
         </div>
     <?php endif; ?>
     <?php if (array_key_exists(2, $page_affiliate_marketing_features_items)) :
            $program = $page_affiliate_marketing_features_items[2]; ?>
         <div class="container feature__container management__container">
             <div class="feature__left">
                 <span class="badge badge--azure-blue-light"><?= $program['sub_heading'] ?></span>
                 <h3 class="section-title feature__title">
                     <?= $program['heading'] ?>
                 </h3>
                 <div class="section-description feature__description">
                     <?= $program['content'] ?>
                 </div>
                 <a class="section-link-btn feature__link"
                     href="<?= $program['button_link']['url'] ?>"><?= $program['button_link']['title'] ?>
                     <?= wp_get_attachment_image(ARROW_BLUE, 'full', true); ?></a>
             </div>
             <div class="feature__right ">
                 <?= wp_get_attachment_image($program['feature_image'], 'full', true); ?>
             </div>
         </div>
     <?php endif; ?>
     <?php if (array_key_exists(3, $page_affiliate_marketing_features_items)) :
            $program = $page_affiliate_marketing_features_items[3]; ?>
         <div class="container feature__container tracking__container">
             <div class="feature__left">
                 <span class="badge badge--azure-blue-light"><?= $program['sub_heading'] ?></span>
                 <h3 class="section-title feature__title">
                     <?= $program['heading'] ?>
                 </h3>
                 <div class="section-description feature__description">
                     <?= $program['content'] ?>
                 </div>
                 <a class="section-link-btn feature__link"
                     href="<?= $program['button_link']['url'] ?>"><?= $program['button_link']['title'] ?>
                     <?= wp_get_attachment_image(ARROW_BLUE, 'full', true); ?></a>
             </div>
             <div class="feature__right ">
                 <?= wp_get_attachment_image($program['feature_image'], 'full', true); ?>
             </div>
         </div>
     <?php endif; ?>
     <?php
        $page_affiliate_marketing_view_full_button = get_field('page_affiliate_marketing_view_full_button');
        $page_affiliate_marketing_compare_button = get_field('page_affiliate_marketing_compare_button');
        ?>
     <div class="feature__button">
         <a class="btn-xl btn-primary feature__button-view" href="<?= $page_affiliate_marketing_view_full_button['url'] ?>">
             <?= $page_affiliate_marketing_view_full_button['title'] ?></a>
         <a class="btn-xl btn-ghost feature__button-compare" href="<?= $page_affiliate_marketing_compare_button['url'] ?>">
             <?= $page_affiliate_marketing_compare_button['title'] ?></a>
     </div>
 </section>