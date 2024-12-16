 <?php
    $option_footer_logo = get_field('option_footer_logo', 'option');
    $option_footer_background = get_field('option_footer_background', 'option');
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
     <div class="container footer__inner">
         <div class="footer__col footer__col1">
             <?= wp_get_attachment_image($option_footer_logo, 'full', true, ['class' => 'footer__col-logo']) ?>
             <div class="footer__des">
                 <?php if (!empty($option_descriptions['descriptions'])) : ?>
                     <?= $option_descriptions['descriptions']; ?>
                 <?php endif; ?>
                 <!-- <p>
                     All trademarks and registered trademarks belong to their respective
                     owners.
                     <br />
                     <br />
                     © 2019—2024 UpPromote. All rights reserved.
                 </p> -->
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
                                 <?= wp_get_attachment_image($item['icon_hover'], 'full', true, ['class' => 'footer__social-item-img hoverimg']) ?>
                             </a>
                         <?php endforeach; ?>
                     <?php endif; ?>
                 </div>
             </div>
         </div>
         <div class="footer__col footer__col2">
             <div class="footer__group">
                 <div class="footer__header">
                     <?= !empty($option_footer_menu_about['label']) ? $option_footer_menu_about['label'] : 'About UpPromote' ?>
                 </div>
                 <?php if ($option_footer_menu_about['Items']) : ?>
                     <?php foreach ($option_footer_menu_about['Items'] as $item) : ?>
                         <a href="<?= $item['link']['url'] ?>"
                             class="footer__content"><?= $item['link']['title'] ?></a>
                     <?php endforeach; ?>
                 <?php endif; ?>
                 <!-- <a href="/" class="footer__content">About us</a>
                 <a href="/" class="footer__content">Contact us</a>
                 <a href="/" class="footer__content">Customer success</a>
                 <a href="/" class="footer__content">Marketplace</a>
                 <a href="/" class="footer__content">Partners</a> -->
             </div>
             <div class="footer__group">
                 <div class="footer__header">
                     <?= !empty($option_footer_menu_features['label']) ? $option_footer_menu_features['label'] : 'About UpPromote' ?>
                 </div>
                 <?php if ($option_footer_menu_features['Items']) : ?>
                     <?php foreach ($option_footer_menu_features['Items'] as $item) : ?>
                         <a href="<?= $item['link']['url'] ?>"
                             class="footer__content"><?= $item['link']['title'] ?></a>
                     <?php endforeach; ?>
                 <?php endif; ?>
             </div>
         </div>

         <div class="footer__col footer__col3">
             <div class="footer__group">
                 <div class="footer__header">
                     <?= !empty($option_footer_menu_product['label']) ? $option_footer_menu_product['label'] : 'About UpPromote' ?>
                 </div>
                 <?php if ($option_footer_menu_product['Items']) : ?>
                     <?php foreach ($option_footer_menu_product['Items'] as $item) : ?>
                         <a href="<?= $item['link']['url'] ?>"
                             class="footer__content"><?= $item['link']['title'] ?></a>
                     <?php endforeach; ?>
                 <?php endif; ?>
             </div>
             <div class="footer__group">
                 <div class="footer__header">
                     <?= !empty($option_footer_menu_compare_us['label']) ? $option_footer_menu_compare_us['label'] : 'About UpPromote' ?>
                 </div>
                 <?php if ($option_footer_menu_compare_us['Items']) : ?>
                     <?php foreach ($option_footer_menu_compare_us['Items'] as $item) : ?>
                         <a href="<?= $item['link']['url'] ?>"
                             class="footer__content"><?= $item['link']['title'] ?></a>
                     <?php endforeach; ?>
                 <?php endif; ?>
             </div>
         </div>

         <div class="footer__col footer__col4">
             <div class="footer__group">
                 <div class="footer__header">
                     <?= !empty($option_footer_menu_resources['label']) ? $option_footer_menu_resources['label'] : 'About UpPromote' ?>
                 </div>
                 <?php if ($option_footer_menu_resources['Items']) : ?>
                     <?php foreach ($option_footer_menu_resources['Items'] as $item) : ?>
                         <a href="<?= $item['link']['url'] ?>"
                             class="footer__content"><?= $item['link']['title'] ?></a>
                     <?php endforeach; ?>
                 <?php endif; ?>
             </div>
             <div class="footer__group">
                 <div class="footer__header">
                     <?= !empty($option_footer_menu_help_center['label']) ? $option_footer_menu_help_center['label'] : 'About UpPromote' ?>
                 </div>
                 <?php if ($option_footer_menu_help_center['Items']) : ?>
                     <?php foreach ($option_footer_menu_help_center['Items'] as $item) : ?>
                         <a href="<?= $item['link']['url'] ?>"
                             class="footer__content"><?= $item['link']['title'] ?></a>
                     <?php endforeach; ?>
                 <?php endif; ?>
             </div>
         </div>
     </div>
 </footer>