<section id="stories">
    <div class="container stories__inner">
        <div class="overlay-stories">
            <?= wp_get_attachment_image(get_field('page_affiliate_marketing_customers_stories_background') ?? '', 'full', true, array('class' => 'overlay-stories_img')); ?>
        </div>
        <div class="story-content-right">
            <?php
            $page_affiliate_marketing_customers_stories_customers = get_field('page_affiliate_marketing_customers_stories_customers');
            if ($page_affiliate_marketing_customers_stories_customers) : ?>
                <?php foreach ($page_affiliate_marketing_customers_stories_customers as $item) : ?>
                    <div class="story-item">
                        <div class="story-item-overlay"></div>
                        <?= wp_get_attachment_image($item['logo'] ?? '', 'full', true, array('class' => 'story-item_image')); ?>

                        <div class="story-item-detail">
                            <span class="story-item_title"><?= $item['stats_label']; ?></span>
                            <span class="story-item_count"><?= $item['stats']; ?></span>
                            <span class="story-item_subtitle"><?= $item['time']; ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="story-content-left headline">
            <?= get_field('page_affiliate_marketing_customers_stories_heading'); ?>
            <!-- <h2 style="--linear-gradient: linear-gradient(90deg, #2871FF 41.42%, #F73D3D 66.36%);" class="headline">Our
                customers say it best. Hear their <strong>stories</strong>.
            </h2> -->
            <p class="description"><?= get_field('page_affiliate_marketing_customers_stories_content') ?></p>
        </div>
    </div>
</section>