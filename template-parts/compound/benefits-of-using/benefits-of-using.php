<?php $benefits_of_using =  get_sub_field('benefits_of_using'); ?>
<section id="benefit">
    <div class="section-container">
        <h2 class="headline">
            <?= $benefits_of_using['heading']; ?>
        </h2>
        <div class="benefit-item-container">
            <?php
            if ($benefits_of_using['items']) : ?>
                <?php foreach ($benefits_of_using['items'] as $item) : ?>
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