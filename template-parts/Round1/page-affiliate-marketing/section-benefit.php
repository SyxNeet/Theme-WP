<section id="benefit">
    <div class="section-container headline">
        <?= get_field('page_affiliate_marketing_benefits_heading'); ?>
        <div class="benefit-item-container">
            <?php
            $page_affiliate_marketing_benefits_items = get_field('page_affiliate_marketing_benefits_items');
            if ($page_affiliate_marketing_benefits_items) : ?>
                <?php foreach ($page_affiliate_marketing_benefits_items as $item) : ?>
                    <div class="benefit-item">
                        <div class="icon">
                            <?= wp_get_attachment_image($item['icon'], 'full', true) ?>
                        </div>
                        <h3 class="benefit-item-title">
                            <?= $item['heading'] ?>
                        </h3>
                        <p class="benefit-item-desc">
                            <?= $item['content'] ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>