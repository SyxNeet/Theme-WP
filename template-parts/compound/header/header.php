 <?php
    $option_header_logo = get_field('option_header_logo', 'option');
    $option_header_menu = get_field('option_header_menu', 'option');

    ?>

 <header class="header__container">
     <div class="container header__inner">
         <div class="header__left">
             <a href="/">
                 <?= wp_get_attachment_image($option_header_logo, 'full', true, [
                        'class' => 'header__logo',
                    ]) ?>
             </a>
             <nav class="menu font-size-sub2">
                 <ul class="menu__list">
                     <?php foreach ($option_header_menu as $menu) : ?>
                         <li class="menu__item">
                             <a href="<?= $menu['menu_link']['url']; ?>" class="menu__link"><?= $menu['menu_link']['title']; ?>
                                 <?php if (count($menu['submenu'] ? $menu['submenu'] : []) > 0) : ?>
                                     <img src="<?= get_theme_file_uri('/assets/icons/arrowDown.svg') ?>" alt="UpPromote" />
                                 <?php endif; ?>
                             </a>
                             <?php if (count($menu['submenu'] ? $menu['submenu'] : []) > 0) : ?>
                                 <div style="
									--cols: <?= count($menu['submenu']) ?>;
                                    --width: <?= !empty($menu['submenu_settings']['width']) ? $menu['submenu_settings']['width'] : 60 ?>rem;
                                    --top: <?= !empty($menu['submenu_settings']['top']) ? $menu['submenu_settings']['top'] : 2 ?>rem;
                                    --left: <?= !empty($menu['submenu_settings']['left']) ? $menu['submenu_settings']['left'] : 10 ?>rem;
                                " class="submenu__container">
                                     <?php if ($menu['sub_menu_heading']) : ?>
                                         <div class="submenu__header font-size-H3">
                                             <?= $menu['sub_menu_heading']['title']; ?>
                                         </div>
                                     <?php endif; ?>
                                     <?php if (!$menu['sub_menu_heading']) : ?>
                                         <div class="submenu__wrapper">
                                             <?php foreach ($menu['submenu'] as $submenu) : ?>
                                                 <?php if ($submenu['sub_menu_col_heading']) : ?>
                                                     <span class="submenu__item submenu__item-col">
                                                         <a href="<?= $submenu['sub_menu_col_heading']['url']; ?>" class="font-size-sub2 submenu__link submenu__link--label"><?= $submenu['sub_menu_col_heading']['title']; ?></a>
                                                     </span>
                                                 <?php endif; ?>
                                             <?php endforeach; ?>
                                         </div>
                                     <?php endif; ?>
                                     <div class="submenu__wrapper">
                                         <?php if ($menu['submenu']) : ?>
                                             <?php foreach ($menu['submenu'] as $submenu) : ?>
                                                 <ul class="submenu">
                                                     <?php if ($menu['sub_menu_heading']) : ?>
                                                         <li class="submenu__item">
                                                             <?php if ($submenu['sub_menu_col_heading']) : ?>
                                                                 <a href="<?= $submenu['sub_menu_col_heading']['url']; ?>" class="font-size-sub2 submenu__link submenu__link--label"><?= $submenu['sub_menu_col_heading']['title']; ?></a>
                                                             <?php endif; ?>
                                                         </li>
                                                     <?php endif; ?>
                                                     <?php if ($submenu['sub_menu_cols']) : ?>
                                                         <?php foreach ($submenu['sub_menu_cols'] as $col) : ?>
                                                             <li class="submenu__item">
                                                                 <a href="<?= $col['sub_menu_col_label']['url']; ?>" class="submenu__link font-size-body1"><span class="submenu__icon">
                                                                         <?= wp_get_attachment_image($col['sub_menu_col_icon'], 'full', true) ?></span><?= $col['sub_menu_col_label']['title']; ?></a>
                                                                 <?php if ($col['sub_menu_col_text']) : ?>
                                                                     <p class="submenu__item-text font-size-sub2">
                                                                         <?= $col['sub_menu_col_text']; ?>
                                                                     </p>
                                                                 <?php endif; ?>
                                                             </li>
                                                         <?php endforeach; ?>
                                                     <?php endif; ?>
                                                 </ul>
                                             <?php endforeach; ?>
                                         <?php endif; ?>
                                         <?php if (!empty($menu['sub_menu_box']['sub_menu_box_heading']) && !empty($menu['sub_menu_box']['sub_menu_box_link']['title'])) : ?>
                                             <div class="submenu__content">
                                                 <p class="submenu__title font-size-H3">
                                                     <?= $menu['sub_menu_box']['sub_menu_box_heading']; ?>
                                                 </p>
                                                 <p class="submenu__text font-size-sub2">
                                                     <?= $menu['sub_menu_box']['sub_menu_box_content']; ?>
                                                 </p>
                                                 <?php if ($menu['sub_menu_box']['sub_menu_box_link']) : ?>
                                                     <a class="submenu__link--primary btn-s btn-ghost font-size-sub2" href="<?= $menu['sub_menu_box']['sub_menu_box_link']['url']; ?>">
                                                         <?= $menu['sub_menu_box']['sub_menu_box_link']['title']; ?>
                                                         <img src="<?= get_theme_file_uri('/assets/icons/Arrow_Left_MD.svg') ?>" alt="Arrow_Left_MD" /></a>
                                                 <?php endif; ?>
                                             </div>
                                         <?php endif; ?>
                                     </div>
                                 </div>
                             <?php endif; ?>
                         </li>
                     <?php endforeach; ?>
                 </ul>
             </nav>
         </div>
         <div class="header__right">
             <a href="/" class="btn-ghost btn-md header__btn1">
                 Start Shopify
             </a>
             <a href="/" class="btn-md btn-primary header__btn2">
                 Try UpPromote FREE
             </a>
         </div>
     </div>
 </header>