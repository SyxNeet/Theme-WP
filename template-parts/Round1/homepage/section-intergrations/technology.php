<section id="technology">
    <?php
    $integration_tech = get_field('integration_tech');
    $title = $integration_tech['title'];
    $description = $integration_tech['description'];
    $background = $integration_tech['background'];
    ?>

    <?= wp_get_attachment_image($background['ID'], 'full', false, array('class' => 'background__technology')) ?>
    <!-- Thêm field mobile -->
    <?= wp_get_attachment_image(HOMEPAGE_BG_EARTH_MB, 'full', false, array('class' => 'background__technology--mb')) ?>
    <div class="container box__technology">
        <h2 class="title__linear__gradient headline">
            <?= $title ?>
        </h2>
        <p class="description__technology">
            <?= $description ?>
        </p>
        <button class="btn-xl btn-secondary btn__explore">
            Explore UpPromote's integrations
        </button>
        <?php if (have_rows('get_started_homep')) {
            while (have_rows('get_started_homep')) {
                the_row();
                echo do_shortcode('[sc_get_started]');
            }
        } ?>
    </div>
</section>