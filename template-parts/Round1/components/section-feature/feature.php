<section id="features">
  <?php
  $title = get_sub_field('title');
  $title_mobile = get_sub_field('title_mobile');
  $description = get_sub_field('description');
  $features = get_sub_field('feature_item_r1');
  $features2 = get_sub_field('feature_item_r2');
  $features3 = get_sub_field('feature_item_r3');
  $button_view_features = get_sub_field('button_view_features');
  $button_discover = get_sub_field('button_discover');
  $features = get_sub_field('feature_item_r1') ?: get_sub_field('feature_item_r2') ?: get_sub_field('feature_item_r3');
  ?>

  <?php if ($title || $title_mobile): ?>
    <div class="container">
      <h2 class="headline title">
        <?php if (isMobileDevice()): ?>
          <?= $title_mobile ?>
        <?php else: ?>
          <?= $title ?>
        <?php endif; ?>
      </h2>
      <?php if (!empty($description)): ?>
        <p class="description__subheading">
          <?= $description ?>
        </p>
      <?php endif; ?>
    </div>
  <?php endif; ?>
  <div class="features">
    <?php foreach ($features as $index => $item): ?>
      <div class="feature__container feature-<?= $index + 1 ?>">
        <div class="container">
          <div class="feature__left">
            <?php if (!empty($item['sub_title'])): ?>
              <span class="feature_tag"><?= $item['sub_title'] ?></span>
            <?php endif; ?>
            <h3 class="section-title feature__title">
              <?= isMobileDevice() ? ($item['title_mobile'] ?? $item['title']) : $item['title'] ?>
            </h3>
            <div class="section-description feature__description">
              <?= $item['description'] ?>
            </div>
            <?php if (!empty($item['quote'])): ?>
              <div class="affiliate-software__box-quote">
                <div class="affiliate-software__quote">
                  <p class="affiliate-software__quote-text">
                    <?= $item['quote'] ?>
                  </p>
                </div>
                <div class="affiliate-software__quote-author">

                  <?= wp_get_attachment_image($item['avt_quote'], 'full', false, ['class' => 'affiliate-software__author-avt']); ?>
                  <p class="affiliate-software__author-name">
                    <?= $item['author'] ?>
                  </p>
                </div>

              </div>
            <?php endif; ?>
            <?php if (!empty($item['button_link'])): ?>
              <a class="section-link-btn feature__link" href="<?= $item['button_link']['url'] ?>">
                <span><?= $item['button_link']['title'] ?></span>
                <?= wp_get_attachment_image(ARROW_BLUE, 'full', false) ?>
              </a>
            <?php endif; ?>
          </div>
          <div class="feature__right">
            <div class="overlay">

            </div>
            <?php if (!isMobileDevice()): ?>
              <?= wp_get_attachment_image($item['feature_image'], 'full', false) ?>
            <?php else: ?>
              <?= wp_get_attachment_image($item['feature_image_mobile'], 'full', false) ?>
            <?php endif; ?>
          </div>
        </div>
        <?php if ($index === count($features) - 1 && isset($button_view_features['url'], $button_view_features['title'], $button_discover['url'], $button_discover['title'])): ?>
          <div class="box__btn__partnership">
            <a href="<?= $button_view_features['url'] ?>" class="btn-xl btn-primary btn__view"><?= $button_view_features['title'] ?></a>
            <a href="<?= $button_discover['url'] ?>" class="btn-xl btn-ghost btn__pricing"><?= $button_discover['title'] ?></a>
          </div>
        <?php endif; ?>
      </div>
    <?php endforeach; ?>
  </div>
</section>