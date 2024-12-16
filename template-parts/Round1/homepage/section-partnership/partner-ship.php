<section id="partnership">
    <?php $title_partnership = get_field('title_partnership_home') ?>
    <h2 class="title__linear__gradient headline">
        <?= $title_partnership ?>
    </h2>
    <div class="container">
        <?php
        $program_home = get_field('program_home');
        $subtitle = $program_home['sub_title'];
        $title = $program_home['title'];
        $description = $program_home['description'];
        $customize_programs = $program_home['customize_programs'];
        $image_right_side = $program_home['image_right_side'];
        $link = $program_home['button_link'];
        ?>
        <div class="box__infor__partnership">
            <div class="tag__partnership"><?= $subtitle ?></div>
            <h3 class="title__partnership">
                <?= $title ?>
            </h3>
            <p class="description__partnership">
                <?= $description ?>
            </p>
            <?php
            foreach ($customize_programs as $item) {
                $content = $item['content'];
            ?>
                <div class="box__check__partnership">
                    <?= wp_get_attachment_image(ICON_CHECK, 'full', false, ['class' => 'img__check__partnership']) ?>
                    <span class="title__check__partnership"><?= $content ?></span>
                </div>
            <?php
            }
            ?>
            <a href="<?= $link['url'] ?>" class="btn__item__partnership section-link-btn feature__link">
                <?= $link['title'] ?>
                <?= wp_get_attachment_image(ARROW_BLUE, 'full', true); ?>
            </a>
        </div>

        <div class="box__image__program">
            <div class='program__overlay'>

            </div>
            <?= wp_get_attachment_image($image_right_side['ID'], 'full', false) ?>
        </div>
    </div>
    <div class="container partner__networks">
        <?php
        $recruitment_partner_home = get_field('recruitment_partner_home');
        $image_left_side = $recruitment_partner_home['image_left_side'];
        $sub_title = $recruitment_partner_home['sub_title'];
        $title = $recruitment_partner_home['title'];
        $description = $recruitment_partner_home['description'];
        $networks_supports = $recruitment_partner_home['networks_supports'];
        $link = $recruitment_partner_home['button_link'];
        ?>
        <div class="box__img__network">
            <?= wp_get_attachment_image($image_left_side['ID'], 'full', false) ?>
            <div class="network_overlay_top"></div>
            <div class="network_overlay_bot"></div>
        </div>
        <div class="box__infor__partnership">
            <div class="tag__partnership"><?= $sub_title ?></div>
            <h3 class="title__partnership">
                <?= $title ?>
            </h3>
            <p class="description__partnership">
                <?= $description ?>
            </p>
            <?php
            foreach ($networks_supports as $item) {
                $text = $item['text'];
            ?>
                <div class="box__check__partnership">
                    <?= wp_get_attachment_image(ICON_CHECK, 'full', false, ['class' => 'img__check__partnership']) ?>
                    <span class="title__check__partnership"><?= $text ?></span>
                </div>
            <?php
            }
            ?>
            <a href="<?= $link['url'] ?>" class="btn__item__partnership section-link-btn feature__link">
                <?= $link['title'] ?>
                <?= wp_get_attachment_image(ARROW_BLUE, 'full', true); ?>
            </a>
        </div>
    </div>
    <div class="container">
        <?php
        $management_home = get_field('management_home');
        $sub_title = $management_home['sub_title'];
        $title = $management_home['title'];
        $description = $management_home['description'];
        $features_manage = $management_home['features_manage'];
        $image_right_side = $management_home['image_right_side'];
        $link = $management_home['button_link'];
        ?>
        <div class="box__infor__partnership">
            <div class="tag__partnership"><?= $sub_title ?></div>
            <h3 class="title__partnership">
                <?= $title ?>
            </h3>
            <p class="description__partnership">
                <?= $description ?>
            </p>
            <?php
            foreach ($features_manage as $item) {
                $text = $item['text'];
            ?>
                <div class="box__check__partnership">
                    <?= wp_get_attachment_image(ICON_CHECK, 'full', false, ['class' => 'img__check__partnership']) ?>
                    <span class="title__check__partnership"><?= $text ?></span>
                </div>
            <?php
            }
            ?>
            <a href="<?= $link['url'] ?>" class="btn__item__partnership section-link-btn feature__link">
                <?= $link['title'] ?>
                <?= wp_get_attachment_image(ARROW_BLUE, 'full', true); ?>
            </a>
        </div>
        <div class="box__img__manage">
            <?= wp_get_attachment_image($image_right_side, 'full', false) ?>
        </div>
    </div>
    <div class="container partner__tracking">
        <?php
        $tracking_analytics_home = get_field('tracking_analytics_home');
        $sub_title = $tracking_analytics_home['sub_title'];
        $title = $tracking_analytics_home['title'];
        $description = $tracking_analytics_home['description'];
        $image_left_side = $tracking_analytics_home['image_left_side'];
        $list_features = $tracking_analytics_home['list_features'];
        $link = $tracking_analytics_home['button_link'];
        ?>
        <div class="box__img__tracking">
            <?= wp_get_attachment_image($image_left_side['ID'], 'full', false) ?>
            <div class="tracking__overlay">

            </div>
        </div>
        <div class="box__infor__partnership">
            <div class="tag__partnership"><?= $sub_title ?></div>
            <h3 class="title__partnership">
                <?= $title ?>
            </h3>
            <p class="description__partnership">
                <?= $description ?>
            </p>
            <?php foreach ($list_features as $item): ?>
                <div class="box__check__partnership">
                    <?= wp_get_attachment_image(ICON_CHECK, 'full', false, ['class' => 'img__check__partnership']) ?>
                    <span class="title__check__partnership"><?= $item['text'] ?></span>
                </div>
            <?php endforeach; ?>
            <a href="<?= $link['url'] ?>" class="btn__item__partnership section-link-btn feature__link">
                <?= $link['title'] ?>
                <?= wp_get_attachment_image(ARROW_BLUE, 'full', true); ?>
            </a>
        </div>
    </div>
    <div class="container">
        <div class="box__infor__partnership">
            <?php
            $payment_home = get_field('payment_home');
            $sub_title = $payment_home['sub_title'];
            $title = $payment_home['title'];
            $description = $payment_home['description'];
            $image_right_side = $payment_home['image_right_side'];
            $payments_features = $payment_home['payments_features'];
            $link = $payment_home['button_link'];
            $btn_view = $payment_home['button_view_feature'];
            $btn_compare = $payment_home['button_compare'];
            ?>
            <div class="tag__partnership"><?= $sub_title ?></div>
            <h3 class="title__partnership"><?= $title ?></h3>
            <p class="description__partnership">
                <?= $description ?>
            </p>
            <?php foreach ($payments_features as $item): ?>
                <div class="box__check__partnership">
                    <?= wp_get_attachment_image(ICON_CHECK, 'full', false, ['class' => 'img__check__partnership']) ?>
                    <span class="title__check__partnership"><?= $item['text'] ?></span>
                </div>
            <?php endforeach; ?>
            <a href="<?= $link['url'] ?>" class="btn__item__partnership section-link-btn feature__link">
                <?= $link['title'] ?>
                <?= wp_get_attachment_image(ARROW_BLUE, 'full', true); ?>
            </a>
        </div>
        <div class="box__img__payment">
            <?= wp_get_attachment_image($image_right_side['ID'], 'full', false) ?>
            <div class="payment__overlay">

            </div>
        </div>
    </div>
    <div class="box__btn__partnership">
        <?php
        $payment_home = get_field('payment_home');
        $btn_view = $payment_home['button_view_feature'];
        $btn_compare = $payment_home['button_compare'];
        ?>
        <a href="<?= $btn_view['url'] ?>" class="btn-xl btn-primary btn__view">
            <?= $btn_view['title'] ?>
        </a>
        <a href="<?= $btn_compare['url'] ?>" class="btn-xl btn-ghost btn__pricing">
            <?= $btn_compare['title'] ?>
        </a>
    </div>
</section>