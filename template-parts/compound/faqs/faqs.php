<div class="faqs">
    <div class="faqs__header headline font-size-H2-pc">
        <h2>Frequently asked questions</h2>
    </div>
    <div class="accordion" id="accordionExample">
        <?php
        $faqs = get_field('faqs_common');
        if ($faqs) :
            for ($i = 0; $i < count($faqs); $i++) : ?><div class="accordion-item">
                    <p class="accordion-header">
                        <button style="--bs-accordion-btn-active-icon: url('<?= get_theme_file_uri('/assets/icons/minus-icon.svg') ?>');
                    --bs-accordion-btn-icon:url('<?= get_theme_file_uri('/assets/icons/plus-icon.svg') ?>');"
                            class="accordion-button <?= $i != 0 ? 'collapsed' : '' ?>"
                            aria-controls="collapse-<?= $i; ?>" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-<?= $i; ?>"
                            aria-expanded="<?= $i == 0 ? 'true' : 'false' ?>" aria-controls="collapse-<?= $i; ?>">
                            <?= $faqs[$i]['questions']; ?>
                        </button>
                    </p>
                    <div id="collapse-<?= $i; ?>"
                        class="accordion-collapse collapse <?= $i == 0 ? 'show' : 'false' ?>"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <?= $faqs[$i]['asked']; ?>
                        </div>
                    </div>
                </div><?php endfor;
                endif; ?>
    </div>
</div>