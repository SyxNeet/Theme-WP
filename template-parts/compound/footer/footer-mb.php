 <?php
    $option_footer_logo = get_field('option_footer_logo', 'option');
    $option_footer_background = get_field('footer_background_mobile', 'option');
    $option_footer_socials = get_field('option_footer_socials', 'option');
    $option_footer_menu_product = get_field('option_footer_menu_product', 'option');
    $option_footer_menu_about = get_field('option_footer_menu_about', 'option');
    $option_footer_menu_features = get_field('option_footer_menu_features', 'option');
    $option_footer_menu_compare_us = get_field('option_footer_menu_compare_us', 'option');
    $option_footer_menu_resources = get_field('option_footer_menu_resources', 'option');
    $option_footer_menu_help_center = get_field('option_footer_menu_help_center', 'option');
    $option_descriptions = get_field('option_descriptions', 'option');
    ?>

 <footer class="footer__container">
     <?= wp_get_attachment_image($option_footer_background, 'full', true, ['class' => 'footer__bg']) ?>
     <div class="container footer__inner--mb">
         <div class="footer__col">
             <?= wp_get_attachment_image($option_footer_logo, 'full', true, ['class' => 'footer__col-logo']) ?>
             <div class="footer__des">
                 <?php if (!empty($option_descriptions['descriptions'])) : ?>
                     <?= $option_descriptions['descriptions']; ?>
                 <?php endif; ?>
             </div>
             <div class="footer__contact">
                 <div class="footer__header">Contact us</div>
                 <a href="mailto:<?= $option_descriptions['contact_us']['url']; ?>"
                     class="footer__content"><?= $option_descriptions['contact_us']['title']; ?></a>
             </div>

             <div class="footer__social">
                 <div class="footer__header">Follow Us</div>
                 <div class="footer__social-list">
                     <?php if ($option_footer_socials) : ?>
                         <?php foreach ($option_footer_socials as $item) : ?>
                             <a title="<?= $item['link']['title'] ?>" href="<?= $item['link']['url'] ?>"
                                 class="footer__social-item">
                                 <?= wp_get_attachment_image($item['icon'], 'full', true, ['class' => 'footer__social-item-img']) ?>
                             </a>
                         <?php endforeach; ?>
                     <?php endif; ?>
                 </div>
             </div>
             <div style="--bs-accordion-btn-icon: url('<?= wp_get_attachment_image_url(30910, 'full', true); ?>')"
                 class="accordion accordion-flush" id="accordion-footer">
                 <div class="accordion-item">
                     <div class="accordion-header" id="flush-heading-1">
                         <button class="font-size-body1 font-size-body1--semi accordion-button collapsed" type="button"
                             data-bs-toggle="collapse" data-bs-target="#flush-collapse-1" aria-expanded="false"
                             aria-controls="flush-collapse-1">
                             <?= !empty($option_footer_menu_about['label']) ? $option_footer_menu_about['label'] : 'About UpPromote' ?>
                         </button>
                     </div>
                     <div id="flush-collapse-1" class="accordion-collapse collapse" aria-labelledby="flush-heading-1"
                         data-bs-parent="#accordion-footer">
                         <div class="accordion-body">
                             <?php if ($option_footer_menu_about['Items']) : ?>
                                 <?php foreach ($option_footer_menu_about['Items'] as $item) : ?>
                                     <a class="font-size-body1 font-size-body1--regular"
                                         href="<?= $item['link']['url'] ?>"
                                         class="footer__content"><?= $item['link']['title'] ?></a>
                                 <?php endforeach; ?>
                             <?php endif; ?>
                         </div>
                     </div>
                 </div>
                 <div class="accordion-item">
                     <div class="accordion-header" id="flush-heading-2">
                         <button class="font-size-body1 font-size-body1--semi accordion-button collapsed" type="button"
                             data-bs-toggle="collapse" data-bs-target="#flush-collapse-2" aria-expanded="false"
                             aria-controls="flush-collapse-2">
                             <?= !empty($option_footer_menu_features['label']) ? $option_footer_menu_features['label'] : 'About UpPromote' ?>
                         </button>
                     </div>
                     <div id="flush-collapse-2" class="accordion-collapse collapse" aria-labelledby="flush-heading-2"
                         data-bs-parent="#accordion-footer">
                         <div class="accordion-body">
                             <?php if ($option_footer_menu_features['Items']) : ?>
                                 <?php foreach ($option_footer_menu_features['Items'] as $item) : ?>
                                     <a class="font-size-body1 font-size-body1--regular"
                                         href="<?= $item['link']['url'] ?>"
                                         class="footer__content"><?= $item['link']['title'] ?></a>
                                 <?php endforeach; ?>
                             <?php endif; ?>
                         </div>
                     </div>
                 </div>
                 <div class="accordion-item">
                     <div class="accordion-header" id="flush-heading-3">
                         <button class="font-size-body1 font-size-body1--semi accordion-button collapsed" type="button"
                             data-bs-toggle="collapse" data-bs-target="#flush-collapse-3" aria-expanded="false"
                             aria-controls="flush-collapse-3">
                             <?= !empty($option_footer_menu_product['label']) ? $option_footer_menu_product['label'] : 'About UpPromote' ?>
                         </button>
                     </div>
                     <div id="flush-collapse-3" class="accordion-collapse collapse" aria-labelledby="flush-heading-3"
                         data-bs-parent="#accordion-footer">
                         <div class="accordion-body">
                             <?php if ($option_footer_menu_product['Items']) : ?>
                                 <?php foreach ($option_footer_menu_product['Items'] as $item) : ?>
                                     <a class="font-size-body1 font-size-body1--regular"
                                         href="<?= $item['link']['url'] ?>"
                                         class="footer__content"><?= $item['link']['title'] ?></a>
                                 <?php endforeach; ?>
                             <?php endif; ?>
                         </div>
                     </div>
                 </div>
                 <div class="accordion-item">
                     <div class="accordion-header" id="flush-heading-4">
                         <button class="font-size-body1 font-size-body1--semi accordion-button collapsed" type="button"
                             data-bs-toggle="collapse" data-bs-target="#flush-collapse-4" aria-expanded="false"
                             aria-controls="flush-collapse-4">
                             <?= !empty($option_footer_menu_compare_us['label']) ? $option_footer_menu_compare_us['label'] : 'About UpPromote' ?>
                         </button>
                     </div>
                     <div id="flush-collapse-4" class="accordion-collapse collapse" aria-labelledby="flush-heading-4"
                         data-bs-parent="#accordion-footer">
                         <div class="accordion-body">
                             <?php if ($option_footer_menu_compare_us['Items']) : ?>
                                 <?php foreach ($option_footer_menu_compare_us['Items'] as $item) : ?>
                                     <a class="font-size-body1 font-size-body1--regular"
                                         href="<?= $item['link']['url'] ?>"
                                         class="footer__content"><?= $item['link']['title'] ?></a>
                                 <?php endforeach; ?>
                             <?php endif; ?>
                         </div>
                     </div>
                 </div>
                 <div class="accordion-item">
                     <div class="accordion-header" id="flush-heading-5">
                         <button class="font-size-body1 font-size-body1--semi accordion-button collapsed" type="button"
                             data-bs-toggle="collapse" data-bs-target="#flush-collapse-5" aria-expanded="false"
                             aria-controls="flush-collapse-5">
                             <?= !empty($option_footer_menu_resources['label']) ? $option_footer_menu_resources['label'] : 'About UpPromote' ?>
                         </button>
                     </div>
                     <div id="flush-collapse-5" class="accordion-collapse collapse" aria-labelledby="flush-heading-5"
                         data-bs-parent="#accordion-footer">
                         <div class="accordion-body">
                             <?php if ($option_footer_menu_resources['Items']) : ?>
                                 <?php foreach ($option_footer_menu_resources['Items'] as $item) : ?>
                                     <a class="font-size-body1 font-size-body1--regular"
                                         href="<?= $item['link']['url'] ?>"
                                         class="footer__content"><?= $item['link']['title'] ?></a>
                                 <?php endforeach; ?>
                             <?php endif; ?>
                         </div>
                     </div>
                 </div>
                 <div class="accordion-item">
                     <div class=" accordion-header" id="flush-heading-6">
                         <button class="font-size-body1 font-size-body1--semi accordion-button collapsed" type="button"
                             data-bs-toggle="collapse" data-bs-target="#flush-collapse-6" aria-expanded="false"
                             aria-controls="flush-collapse-6">
                             <?= !empty($option_footer_menu_help_center['label']) ? $option_footer_menu_help_center['label'] : 'About UpPromote' ?>
                         </button>
                     </div>
                     <div id="flush-collapse-6" class="accordion-collapse collapse" aria-labelledby="flush-heading-6"
                         data-bs-parent="#accordion-footer">
                         <div class="accordion-body">
                             <?php if ($option_footer_menu_help_center['Items']) : ?>
                                 <?php foreach ($option_footer_menu_help_center['Items'] as $item) : ?>
                                     <a class="font-size-body1 font-size-body1--regular"
                                         href="<?= $item['link']['url'] ?>"
                                         class="footer__content"><?= $item['link']['title'] ?></a>
                                 <?php endforeach; ?>
                             <?php endif; ?>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </footer>