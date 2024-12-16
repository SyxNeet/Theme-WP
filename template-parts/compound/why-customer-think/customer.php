<section id="customers__think">
	<?php
	$customer = get_field('why_customer_cpn');
	$background_pc = $customer['background_pc'];
	$background_mb = $customer['background_pc_copy'];
	$title = $customer['title'];
	$content = $customer['content'];
	?>
	<?= wp_get_attachment_image($background_pc, 'full', false, array('class' => 'background')) ?>
	<?= wp_get_attachment_image($background_mb, 'full', false, array('class' => 'background_mb')) ?>
	<div class="container">
		<h2 class="headline"><?= $title ?></h2>
		<div class="content__group">
			<div class="group__image">
				<div class="overlay"></div>
				<?= wp_get_attachment_image($content['image'], 'full', false, array('class' => 'image')) ?>
				<?= wp_get_attachment_image($content['logo'], 'full', false, array('class' => 'logo')) ?>
			</div>
			<div class="content">
				<div>
					<?= wp_get_attachment_image($content['image_quote'], 'full', false, array('class' => 'icon_quote')) ?>
					<?php if($content['title__optional']): ?>
						<p class="title__content">
							<?= $content['title__optional'] ?>
						</p>
					<?php endif; ?>
					<div class="desc"><?= $content['description'] ?></div>
					<p class="name"><?= $content['name'] ?></p>
					<p class="role"><?= $content['role'] ?></p>
				</div>
				<?php if($content['button_read']): ?>
					<a href="<?= $content['button_read']['url'] ?>" target="<?= $content['button_read']['target'] ?>" class="section-link-btn">
						<span><?= $content['button_read']['title'] ?></span>
						<?= wp_get_attachment_image(ICON_ARROW_LEFT, 'full', false) ?>
					</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>