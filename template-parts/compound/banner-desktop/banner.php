<section id="banner">
    <?php
    $banner = get_field('banner_component');
    $sub_title = $banner['sub_title'];
    $primary_title = $banner['primary_title'];
    $primary_title_mb = $banner['primary_title_mb'];
    $description = $banner['description'];
    $image_right_side = $banner['image_right_side'];	
    $image_mobile = $banner['image_mobile'];	
//     $button_start_for_free = $banner['button_start_for_free'];
//     $button_sign_up_here = $banner['button_sign_up_here'];
	$button_start_for_free = get_field('button_start_cpn', 'option');
    $button_sign_up_here = get_field('button_sign_up_cpn', 'option');
    $image = $banner['background'];
    $bg_mb = $banner['background_mb'];
    ?>
    <?php if (!wp_is_mobile()): ?>
        <?= wp_get_attachment_image($image, 'full', false, array('class' => 'background__banner')); ?>
    <?php else: ?>
        <?= wp_get_attachment_image($bg_mb, 'full', false, array('class' => 'background__banner--mb')); ?>
    <?php endif; ?>

    <div class="container banner__inner">
        <div class="container__banner">
            <div class="built__banner">
                <div class="box__diamond">
                    <?= wp_get_attachment_image(DIAMOND, 'full', false, array()); ?>
                </div>
                <span class="title__built font-size-sub2">
                    <?= $sub_title ?>
                </span>
            </div>
            <h1 class="title__banner headline">
				<?php if (!wp_is_mobile()): ?>
					<?= $primary_title ?>
				<?php else: ?>
					<?= $primary_title_mb ?>
				<?php endif; ?>

            </h1>
            <div class="description__banner">
                <?= $description ?>
            </div>
            <div class="box__free__sign">
                <a href="<?= $button_start_for_free['url'] ?>" target="<?= $button_start_for_free['target'] ?>" class="btn-lg btn-primary btn__free">
                    <?= $button_start_for_free['title'] ?>
                </a>
                <div class="btn__sign font-size-button">
                    Not on Shopify?<a href="<?= $button_sign_up_here['url'] ?>" target="<?= $button_sign_up_here['target']  ?>"><?= $button_sign_up_here['title'] ?></a>
                </div>
            </div>
			<div class="box__img__people--mb">
                <?= wp_get_attachment_image($image_mobile['ID'], 'full', false, array()); ?>
            </div>

        </div>
        
        <div class="box__rating">
            <?= wp_get_attachment_image(SHOPIFY, 'full', false, array('class' => 'img__shopify')); ?>
            <?= wp_get_attachment_image(STAR5, 'full', false, array('class' => 'img__star')); ?>
            <strong class="count__rating">4,9</strong>
            <span class="count__review"> 3387+ Reviews</span>
        </div>
		<div class="box__img__people">
            <?= wp_get_attachment_image($image_right_side['ID'], 'full', false, array()); ?>
        </div>
    </div>
</section>