<?php
$most_entrusted = get_field('most_entrusted_home');
$bg_pc = get_sub_field('background_pc');
$bg_mb = get_sub_field('background_mb');
if($bg_pc || $bg_mb){
	$top_rcm_and_favor = get_sub_field('top_rcm_and_favor');
	if ($top_rcm_and_favor) {
		$title = $top_rcm_and_favor['title'];
		$title_mb = $top_rcm_and_favor['title_mb'];
		$slider = $top_rcm_and_favor['slider'];
	}
}
else if ($most_entrusted) {
	$title = $most_entrusted['title'];
	$title_mb = $most_entrusted['title_mb'];
	$description = $most_entrusted['description'];
	$slider = $most_entrusted['slider'];
} else {
	$top_rcm_and_favor = get_field('top_rcm_and_favor');
	if ($top_rcm_and_favor) {
		$title = $top_rcm_and_favor['title'];
		$title_mb = $top_rcm_and_favor['title_mb'];
		$slider = $top_rcm_and_favor['slider'];
	}
}

?>
<section id="most__entrusted">
	<?php if($bg_pc || $bg_mb): ?>
		<?= wp_get_attachment_image(isMobileDevice() ? $bg_mb : $bg_pc,'full',false,['class' => 'background']) ?>
	<?php endif; ?>
	<div class="overlay__left"></div>
	<div class="overlay__right"></div>
	<h2 class="title__linear__gradient headline">
		<?= isMobileDevice() ? ($title_mb ?? $title) : $title ?>
	</h2>
	<?php if (!empty($description)): ?>
		<div class="description__most__entrusted">
			<?= $description ?>
		</div>
	<?php endif; ?>

	<div class="most__entrusted container">
		<div class="swiper mySwiper most__entrusted__swiper">
			<div class="swiper-wrapper">
				<?php
				foreach ($slider as $slide) {
					$icon = $slide['icon'];
					$title = $slide['title'];
					$subTitle = $slide['sub_title'] ?? '';
					$location = $slide['location'] ?? '';
					$name = $slide['name'];
					$desc = $slide['description'];
				?>

					<div class="testimonial-slide swiper-slide">
						<div class="container_scale">
							<div class="overlay-blue"></div>
						</div>
						<div class="container_entrusted_item">
							<div class="most_entrusted__top">
								<?= wp_get_attachment_image($icon, 'full', false) ?>
								<div>
									<h4 class="name"><?= $name ?></h4>
									<?php if (!empty($subTitle)): ?>
										<p class="subtitle"><?= $subTitle ?></p>
									<?php endif; ?>
									<?php if (!empty($location)): ?>
										<p class="subtitle"><?= $location ?></p>
									<?php endif; ?>
								</div>
							</div>
							<p class="title">
								<?= $title ?>
							</p>
							<p class="desc">
								<?= $desc ?>
							</p>
						</div>
					</div>
				<?php
				}
				?>
			</div>
		</div>
	</div>
	<div class="swiper-pagination"></div>
</section>