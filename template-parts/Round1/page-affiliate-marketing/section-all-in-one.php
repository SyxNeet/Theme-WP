<section id="all-in-one">
    <div class="headline container all-in-one">
        <?= get_field('page_affiliate_marketing_platform_headline'); ?>
        <div class="box-container">
            <?php
            $page_affiliate_marketing_platform_items = get_field('page_affiliate_marketing_platform_items');
            if ($page_affiliate_marketing_platform_items) : ?>
                <?php foreach ($page_affiliate_marketing_platform_items as $item) : ?>
                    <div class="all-in-one_item">
                        <div class="aio_item_title">
                            <div class="icon">
                                <?= wp_get_attachment_image($item['heading_icon'] ?? '', 'thumbnail', true); ?>
                            </div>
                            <h4 class="title"><?= $item['heading']; ?></h4>
                        </div>
                        <span class="aio_subtitle">
                            <?= $item['heading_subtext']; ?>
                        </span>
                        <div class="aio_desc">
                            <div class="overlay"></div>
                            <?= wp_get_attachment_image($item['body_icon'] ?? '', 'thumbnail', true); ?>
                            <p class="desc"><?= $item['body_content']; ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>