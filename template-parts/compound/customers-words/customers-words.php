<?php $customers_words = get_sub_field('customers_words'); ?>
<section id="customer-words">
    <div class="section-container headline">
        <?= wp_get_attachment_image(CUSTOMER_WORD_DECO_LEFT, 'full', true, ['class' => 'deco-left']) ?>
        <?= wp_get_attachment_image(CUSTOMER_WORD_DECO_RIGHT, 'full', true, ['class' => 'deco-bottom']) ?>
        <?= wp_get_attachment_image(CUSTOMER_WORD_DECO_BOTTOM, 'full', true, ['class' => 'deco-right']) ?>
        <!--         <?php // echo get_field('customers_words_heading') 
                        ?> -->
        <!--         <h2 class=""></h2> -->
        <?= $customers_words['page_affiliate_marketing_customers_words_heading'] ?>
        <div class="review-container">
            <div class="swiper reviews-swiper">
                <div class="swiper-wrapper">
                    <?php
                    if ($customers_words['page_affiliate_marketing_customers_words_rates']) :
                        foreach ($customers_words['page_affiliate_marketing_customers_words_rates'] as $item) :
                    ?>
                            <div class="swiper-slide review-item">
                                <?= wp_get_attachment_image(CUSTOMER_WORD_CARD_BLUE, 'full', true) ?>
                                <div class="review-item-content_top">
                                    <div class="customer-info">
                                        <?= wp_get_attachment_image($item['avatar'], 'full', true) ?>
                                        <div class="info-detail">
                                            <span class="info-name"><?= $item['name'] ?></span>
                                            <span class="info-address"><?= $item['location'] ?></span>
                                        </div>
                                    </div>
                                </div>
                                <p class="title"><?= $item['time_use_app'] ?></p>
                                <p class="desc">
                                    <?= $item['comment'] ?>
                                </p>
                                <div class="star-icons">
                                    <?php
                                    for ($i = 0; $i < $item['stars']; $i++) {
                                        echo wp_get_attachment_image(CUSTOMER_WORD_STAR, 'full', true);
                                    }
                                    ?>
                                </div>
                            </div>
                    <?php
                        endforeach;
                    endif;
                    ?>
                </div>

            </div>
        </div>
        <div class="reviews-pagination"></div>
    </div>
</section>