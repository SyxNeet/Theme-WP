<?php
/*
Template Name: Contact
*/
get_header();
get_template_part('template-parts/Round1/page-contact/section', 'banner');
$socials = get_field('section_support_socials')['option_footer_socials'] ?? [];
?>
<section class="section-container support-form">
	<?php get_template_part('template-parts/Round1/page-contact/section', 'support'); ?>
	<?= do_shortcode('[contact-form-7 id="789eb88" title="Contact form 1"]'); ?>
	<?php
	if (isMobileDevice()) {
	?>
		<div class="support__item">
			<h3 class="font-size-H4 support__title support__title--social">Follow us on social media</h3>
			<div class="support__social-media">
				<?php foreach ($socials as $item) : ?>
					<a href="<?= $item['link']['url'] ?? "#";  ?>" class="support__social-item">
						<div class="support__social-item-bg"></div>
						<?= wp_get_attachment_image($item['icon'] ?? '', 'full', true, ['class' => 'support__social-item-img']); ?>
					</a>
				<?php endforeach; ?>
			</div>
		</div>
	<?php
	}
	?>
</section>

<?php
get_footer();
