<section id="multi__purpose">
  <?php
  $multi_purpose_home = get_field('multi_purpose_home');
  $primary_title = $multi_purpose_home['primary_title_mobile'];
  $platforms = $multi_purpose_home['platforms'];
  ?>
  <?= wp_get_attachment_image(HOMEPAGE_BG_MULTI_PURPOSE, 'full', false, array('class' => 'bg__linear__purpose')) ?>
  <h2 class="title__linear__gradient headline">
    <?= $primary_title ?>
  </h2>
  <div id="multi__purpose__swipe">
    <div class="swiper multi__purpose__swiper">
      <div class="swiper-wrapper">
        <?php
        foreach ($platforms as $platform) {
          $title = $platform['title'];
          $description = $platform['description'];
          $page_link = $platform['page_link'];
          $image = $platform['image'];
        ?>
          <div class="swiper-slide">
            <div class="card__item__purpose">
              <h3 class="title__card__purpose"><?= $title ?></h3>
              <p class="description__card__purpose">
                <?= $description ?>
              </p>
              <a href="<?= $page_link['url'] ?>">
                <button class="btn__learn__more">
                  Learn More
                </button>
              </a>
              <?= wp_get_attachment_image($image, 'full', false) ?>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>