<section class="uppromote-plan">
    <div class="container uppromote-plan__inner">
        <div class="headline">
            <?= get_field('page_affiliate_marketing_perfect_plan_heading', 'option'); ?>
            <p class="font-size-caption headline__description ">
                <?= get_field('page_affiliate_marketing_perfect_plan_sub_heading', 'option'); ?></p>
        </div>
        <div class=" pricing-plan__wrapper">
            <?php
            $page_affiliate_marketing_perfect_plan_items = get_field('page_affiliate_marketing_perfect_plan_items', 'option');
            for ($i = 0; $i < count($page_affiliate_marketing_perfect_plan_items); $i++) : ?>
                <div
                    class="pricing-plan <?= $page_affiliate_marketing_perfect_plan_items[$i]['most_popular'] ? 'pricing-plan--popular' : '' ?>">
                    <?php if ($page_affiliate_marketing_perfect_plan_items[$i]['most_popular']) : ?>
                        <span class="badge-popular"><span>MOST POPULAR</span>
                            <img class="box__pc" src="<?= get_theme_file_uri('/assets/icons/Rectangle-34626456.svg') ?>" alt="">
                            <?= wp_get_attachment_image(PRICING_PLAN_BADGE_MB, 'full', false, array('class' => 'box__mb')) ?>
                        </span>
                    <?php endif; ?>
                    <?php if ($page_affiliate_marketing_perfect_plan_items[$i]['most_popular']) : ?>
                        <div class="overlay-popular">
                        </div>
                    <?php endif; ?>
                    <?= wp_get_attachment_image($page_affiliate_marketing_perfect_plan_items[$i]['most_popular'] ? CARD_PRICING_ACTIVE : CARD_PRICING_DEFAULT, 'full', false, ['class' => 'pricing-plan__vector']) ?>
                    <div class="pricing-plan__background"></div>
                    <div class="pricing-plan__header">
                        <span
                            class="pricing-plan__price"><?= $page_affiliate_marketing_perfect_plan_items[$i]['price'] ?></span>
                        <span
                            class="pricing-plan__period"><?= $page_affiliate_marketing_perfect_plan_items[$i]['time'] ?></span>
                    </div>
                    <div class="pricing-plan__body">
                        <p class="font-size-H4 pricing-plan__title">
                            <?= $page_affiliate_marketing_perfect_plan_items[$i]['title'] ?></p>
                        <p class="font-size-sub1 pricing-plan__description">
                            <?= $page_affiliate_marketing_perfect_plan_items[$i]['content'] ?>
                        </p>
                    </div>
                    <div class="pricing-plan__footer">
                        <a href="<?= $page_affiliate_marketing_perfect_plan_items[$i]['link_redirect']['url'] ?>"
                            class="<?= $page_affiliate_marketing_perfect_plan_items[$i]['most_popular'] ? 'btn-primary' : 'btn-ghost' ?> btn-lg font-size-sub1 pricing-plan__button">View
                            plan</a>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>