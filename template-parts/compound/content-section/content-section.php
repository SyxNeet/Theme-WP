<?php
// Get sub field values.
$heading = get_sub_field('heading');
$sub_heading = get_sub_field('sub_heading');
$content = get_sub_field('content');
$button_link = get_sub_field('button_link');
?>
<div class="feature__left">
    <!-- <span class="badge badge--azure-blue-light"><?= $sub_heading ?></span> -->
    <h3 class="section-title feature__title">
        <?= $heading ?>
    </h3>
    <div class="section-description feature__description">
        <?= $content ?>
    </div>
    <?php if ($button_link): ?>
        <a class="section-link-btn feature__link" href="<?= $button_link['url'] ?>"><?= $button_link['title'] ?>
            <?= wp_get_attachment_image(ARROW_BLUE, 'full', true); ?></a>
    <?php endif; ?>
</div>