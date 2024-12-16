<section class="contact-banner">
	<?php
	$banner = get_field('banner_contact');
	$bannerPc = $banner['background_pc'];
	$bannerMb = $banner['background_mb'];
	$heading = $banner['heading'];
	$desc = $banner['description'];
	?>
	<?php
	if (isMobileDevice()) {
		echo wp_get_attachment_image($bannerMb, 'full', false, array('class' => 'contact-banner__background'));
	} else {
		echo wp_get_attachment_image($bannerPc, 'full', false, array('class' => 'contact-banner__background'));
	}
	?>

	<h1 class="section-container font-size-H1 font-size-H1--semi contact-banner__title headline"><?= $heading ?></h1>
	<p class="section-container font-size-sub1 contact-banner__subtitle"><?= $desc ?></p>
</section>
<?php
