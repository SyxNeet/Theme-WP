<?php
$nav = get_field('navbar_header', 'option');
$logoMb = $nav['logo_mb'];
$pricing = $nav['pricing'];
$martket = $nav['marketplace'];
$shopify = $nav['button_link_start_shopify'];
$startfree = $nav['button_link_start_for_free'];
?>
<header id="header">
	<a href="/">
		<?= wp_get_attachment_image($logoMb, 'full', false) ?>
	</a>
	<div class="header__right">
		<a href="<?= $shopify['url'] ?>" target="<?= $shopify['target'] ?>"><?= $shopify['title'] ?></a>
		<button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
			aria-controls="offcanvasRight" aria-label="Open Sidebar">
			<?= wp_get_attachment_image(HEADER_MENU_ICON, 'full', true); ?>
		</button>
	</div>
</header>
<div id="menu__mobile">
	<div class="menu__mb__header">
		<?= wp_get_attachment_image($logoMb, 'full', false, ['class' => 'logo']) ?>
		<div class="header__right">
			<a target="<?= $shopify['target'] ?>"
				href="<?= $shopify['url'] ?>">
				<?= $shopify['title'] ?>
			</a>
			<button class="btn-close">
				<?= wp_get_attachment_image(ICON_CLOSE, 'full', true); ?>
			</button>
		</div>
	</div>

	<!-- menu body -->
	<div class="container__main">
		<div class="menu__mobile__body">
			<div class="menu__item">
				<?php
				$subfeature = get_field('features_header', 'option');
				$title = $subfeature['title'];
				$submenu = $subfeature['submenu'];
				$content = $subfeature['content'];
				?>
				<div class="menu__label">
					<span class="label"><?= $title ?></span>
					<?= wp_get_attachment_image(HEADER_DROPDOWN_ICON, 'full', false) ?>
				</div>
				<div class="submenu__content">
					<p class="desc"><?= $content['desc'] ?></p>
					<div class="submenu__group">
						<?php foreach ($submenu as $item): ?>
							<div class="submenu__item">
								<div class="submenu__icon">
									<?= wp_get_attachment_image($item['icon'], 'full', false) ?>
								</div>
								<a class="submenu__text" href="<?= $item['link']['url'] ?>"><?= $item['link']['title'] ?></a>
							</div>
						<?php endforeach; ?>
					</div>
					<a href="<?= $content['link']['url'] ?>" class="section-link-btn seeall">
						<?= $content['link']['title'] ?>
						<?= wp_get_attachment_image(ARROW_BLUE, 'full', false) ?>
					</a>
				</div>
			</div>
			<div class="menu__item">
				<?php
				$solutions = get_field('solutions_header', 'option');
				$title = $solutions['title'];
				$get_started = $solutions['get_started'];
				$program = $solutions['program'];
				$industry = $solutions['industry'];
				$submenu_content = $solutions['submenu_content'];
				?>
				<div class="menu__label">
					<span class="label"><?= $title ?></span>
					<?= wp_get_attachment_image(HEADER_DROPDOWN_ICON, 'full', false) ?>
				</div>
				<div class="submenu__content submenu__content__solutions">
					<div class="submenu__group__box">
						<?php
						$subtitle = $get_started['submenu_title'];
						$submenu = $get_started['submenu_item'];
						?>
						<span class="submenu__item__title"><?= $subtitle ?></span>
						<?php foreach ($submenu as $item): ?>
							<div class="submenu__item">
								<div class="submenu__icon">
									<?= wp_get_attachment_image($item['icon'], 'full', false) ?>
								</div>
								<a class="submenu__text" href="<?= $item['link']['url'] ?>"><?= $item['link']['title'] ?></a>
							</div>
						<?php endforeach; ?>
					</div>
					<div class="submenu__group__box">
						<?php
						$subtitle = $program['submenu_title'];
						$submenu = $program['submenu_item'];
						?>
						<span class="submenu__item__title"><?= $subtitle ?></span>
						<?php foreach ($submenu as $item): ?>
							<div class="submenu__item">
								<div class="submenu__icon">
									<?= wp_get_attachment_image($item['icon'], 'full', false) ?>
								</div>
								<a class="submenu__text" href="<?= $item['link']['url'] ?>"><?= $item['link']['title'] ?></a>
							</div>
						<?php endforeach; ?>
					</div>

					<div class="submenu__group__box">
						<?php
						$subtitle = $industry['submenu_title'];
						$submenu = $industry['submenu_item'];
						?>
						<span class="submenu__item__title"><?= $subtitle ?></span>
						<?php foreach ($submenu as $item): ?>
							<div class="submenu__item">
								<div class="submenu__icon">
									<?= wp_get_attachment_image($item['icon'], 'full', false) ?>
								</div>
								<a class="submenu__text" href="<?= $item['link']['url'] ?>"><?= $item['link']['title'] ?></a>
							</div>
						<?php endforeach; ?>
					</div>
					<div class="submenu__group__box">
						<?= wp_get_attachment_image($submenu_content['background'], 'full', false) ?>
						<div class="submenu_group__box__content">
							<span class="title"><?= $submenu_content['title'] ?></span>
							<p class="desc"><?= $submenu_content['description'] ?></p>
							<a href="<?= $submenu_content['explore_more']['url'] ?>" class="section-link-btn explore">
								<?= $submenu_content['explore_more']['title'] ?>
								<?= wp_get_attachment_image(ARROW_WHITE, 'full', false) ?>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="menu__item">
				<div class="menu__label">
					<a href="<?= $pricing['url'] ?>" class="label"><?= $pricing['title'] ?></a>
				</div>
			</div>
			<div class="menu__item">
				<div class="menu__label">
					<a href="<?= $martket['url'] ?>" class="label"><?= $martket['title'] ?></a>
				</div>
			</div>
			<div class="menu__item">
				<?php
				$resource_header = get_field('resource_header', 'option');
				$title = $resource_header['title'];
				$learn_grow = $resource_header['learn_grow'];
				$why_uppromote = $resource_header['why_uppromote'];
				$get_started = $resource_header['get_started'];
				$download_goodies = $resource_header['download_goodies'];
				?>
				<div class="menu__label">
					<span class="label"><?= $title ?></span>
					<?= wp_get_attachment_image(HEADER_DROPDOWN_ICON, 'full', false) ?>
				</div>
				<div class="submenu__content submenu__content__solutions">
					<div class="submenu__group__box">
						<?php
						$subtitle = $learn_grow['submenu_title'];
						$submenu = $learn_grow['submenu_items'];
						?>
						<span class="submenu__item__title"><?= $subtitle ?></span>
						<?php foreach ($submenu as $item): ?>
							<div class="submenu__item">
								<div class="submenu__icon">
									<?= wp_get_attachment_image($item['icon'], 'full', false) ?>
								</div>
								<a class="submenu__text" href="<?= $item['link']['url'] ?>"><?= $item['link']['title'] ?></a>
							</div>
						<?php endforeach; ?>
					</div>
					<div class="submenu__group__box">
						<?php
						$subtitle = $get_started['submenu_title'];
						$submenu = $get_started['submenu_items'];
						?>
						<span class="submenu__item__title"><?= $subtitle ?></span>
						<?php foreach ($submenu as $item): ?>
							<div class="submenu__item">
								<div class="submenu__icon">
									<?= wp_get_attachment_image($item['icon'], 'full', false) ?>
								</div>
								<a class="submenu__text" href="<?= $item['link']['url'] ?>"><?= $item['link']['title'] ?></a>
							</div>
						<?php endforeach; ?>
					</div>

					<div class="submenu__group__box">
						<?php
						$subtitle = $why_uppromote['submenu_title'];
						$submenu = $why_uppromote['submenu_items'];
						?>
						<span class="submenu__item__title"><?= $subtitle ?></span>
						<?php foreach ($submenu as $item): ?>
							<div class="submenu__item">
								<div class="submenu__icon">
									<?= wp_get_attachment_image($item['icon'], 'full', false) ?>
								</div>
								<a class="submenu__text" href="<?= $item['link']['url'] ?>"><?= $item['link']['title'] ?></a>
							</div>
						<?php endforeach; ?>
					</div>
					<div class="submenu__group__box">
						<?php
						$subtitle = $download_goodies['submenu_title'];
						$submenu = $download_goodies['submenu_items'];
						?>
						<span class="submenu__item__title"><?= $subtitle ?></span>
						<?php foreach ($submenu as $item): ?>
							<div class="submenu__item">
								<div class="submenu__icon">
									<?= wp_get_attachment_image($item['icon'], 'full', false) ?>
								</div>
								<a class="submenu__text" href="<?= $item['link']['url'] ?>"><?= $item['link']['title'] ?></a>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>

		<!-- menu footer -->
		<div class="menu__footer">
			<?php
			$option_descriptions = get_field('option_descriptions', 'option');
			?>
			<div class="menu__footer__top">
				<span class="title">Contact us</span>
				<a href="mailto:<?= $option_descriptions['contact_us']['url']; ?>"><?= $option_descriptions['contact_us']['title']; ?></a>
			</div>
			<div class="menu__footer__bot">
				<span class="title">Follow us</span>
				<div class="socials">
					<?php
					$option_footer_socials = get_field('option_footer_socials', 'option');
					?>
					<?php if ($option_footer_socials): ?>
						<?php foreach ($option_footer_socials as $item): ?>
							<a title="<?= $item['link']['title'] ?>" href="<?= $item['link']['url'] ?>" class="social__item">
								<div class="overlay"></div>
								<?= wp_get_attachment_image($item['icon'], 'full', true) ?>
							</a>
						<?php endforeach; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>

</div>