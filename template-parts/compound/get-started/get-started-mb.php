<?php
$get_started = get_field('get_started');
$heading = $get_started['option_started_with_uppromote_heading_mb'];
$sub_heading = $get_started['option_started_with_uppromote_sub_heading'];
$button = $get_started['option_started_with_uppromote_start_button']['title'];
$url = $get_started['option_started_with_uppromote_start_button']['url'];
$gallery = $get_started['option_started_with_uppromote_image_logo'];
?>
<section class="get-started-mb">
	<div class="get__started__container">
		<?= wp_get_attachment_image(BG_GET_STARTED_MB,'full',false,['class' => 'get-started__background-mb']) ?>
		<div class="get-started__wrapper get-started__wrapper--left-mb">
			<div class="font-size-H2-pc get-started__title">
				<?= $heading ?></div>
			<p class="font-size-sub1"><?= $sub_heading ?></p>
			<a href="<?= $url ?>"
				class="btn btn-primary btn-lg get-started__button"><?= $button ?></a>
		</div>
		<div class="get-started__wrapper get-started__wrapper--right-mb">
			<?php
			if ($gallery) :
				foreach ($gallery as $item) : ?>
					<?= wp_get_attachment_image($item, 'full', true, ['class' => 'get-started__image']) ?>
			<?php endforeach;
			endif;
			?>
		</div>
		<a href="<?= $url ?>"
			class="btn btn-primary btn-lg get-started__button-mb"><?= $button ?></a>
	</div>
</section>

<?php
?>