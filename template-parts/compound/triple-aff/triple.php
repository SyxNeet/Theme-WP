<section id="triple">
	<?php 
		$triple = get_field('triple_content');
		$background_pc = $triple['background_pc'];
		$background_mb = $triple['background_pc_copy'];
		$title = $triple['title'];
		$desc = $triple['description'];
		$image = $triple['image'];
		$features = $triple['features'];
	?>
	<?= wp_get_attachment_image($background_pc,'full',false,array('class' => 'background')) ?>
	<?= wp_get_attachment_image($background_mb,'full',false,array('class' => 'background_mb')) ?>
	<div class="container">
		<h2 class="headline"><?= $title ?></h2>
		<p class="desc"><?= $desc ?></p>
		<?= wp_get_attachment_image($image,'full',false,array('class' => 'triple')) ?>
		<div class="triple__content__group">
			<?php foreach($features as $item): ?>
				<div class="triple__content__box">
					<div class="triple__content__item">
						<?php if(isMobileDevice()): ?>
							<?= wp_get_attachment_image($item['icon'],'full',false,array('class' => 'image')) ?>
						<?php endif; ?>
						<p class="content"><?= $item['content'] ?></p>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>