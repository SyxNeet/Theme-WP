<section id="multi__purpose">
    <?php
    $multi_purpose_home = get_field('multi_purpose_home');
    $primary_title = $multi_purpose_home['primary_title'];
    $platforms = $multi_purpose_home['platforms'];
    ?>
    <?= wp_get_attachment_image(HOMEPAGE_BG_MULTI_PURPOSE, 'full', false, array('class' => 'bg__linear__purpose')) ?>
    <h2 class="title__linear__gradient headline">
        <?= $primary_title ?>
    </h2>
    <div class="container">
        <?php
        foreach ($platforms as $platform) {
            $title = $platform['title'];
            $description = $platform['description'];
            $page_link = $platform['page_link'];
            $image = $platform['image'];
        ?>
            <div class="card__item__purpose">
                <h3 class="title__card__purpose"><?= $title ?></h3>
                <p class="description__card__purpose">
                    <?= $description ?>
                </p>
                <a href="<?= $page_link['url'] ?>">
                    <button class="btn__learn__more">
                        Learn More
                        <!-- 						<svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
							<path d="M1.96338 8H12.9634M12.9634 8L8.96338 4M12.9634 8L8.96338 12" stroke="white" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
						</svg> -->
                    </button>
                </a>
                <?= wp_get_attachment_image($image, 'full', false) ?>
            </div>
        <?php
        }
        ?>
    </div>
</section>