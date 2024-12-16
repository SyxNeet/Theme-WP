<header class="header__container">
	<div class="container header__inner">
		<?php
		$nav = get_field('navbar_header', 'option');
		$logoPc = $nav['logo_pc'];
		$logoMb = $nav['logo_mb'];
		$pricing = $nav['pricing'];
		$martket = $nav['marketplace'];
		$shopify = $nav['button_link_start_shopify'];
		$startfree = $nav['button_link_start_for_free'];
		?>
		<div class="header__left">
			<a href="/">
				<?= wp_get_attachment_image($logoPc, 'full', false, ['class' => 'header__logo']) ?>
			</a>
			<nav class="menu">
				<ul class="menu__list">
					<li class="menu__item">
						<span class="menu__link">
							Features
							<img src="/wp-content/themes/uppromote-theme/assets/icons/arrowDown.svg" alt="">
						</span>
						<div class="submenu__container">
							<?php
							$subfeature = get_field('features_header', 'option');
							$title = $subfeature['title'];
							$submenu = $subfeature['submenu'];
							$content = $subfeature['content'];
							?>
							<div class="submenu__container__left">
								<p class="sub__menu__title"><?= $title ?></p>
								<ul class="submenu">
									<?php foreach ($submenu as $item): ?>
										<li class="submenu__item">
											<a href="<?= $item['link']['url'] ?>" class="submenu__link">
												<div class="submenu__icon">
													<?= wp_get_attachment_image($item['icon'], 'full', false) ?>
												</div>
												<span class="submenu__text"><?= $item['link']['title'] ?></span>
											</a>
										</li>
									<?php endforeach; ?>
								</ul>
							</div>
							<div class="submenu__container__right">
								<?= wp_get_attachment_image(HEADER_FEATURE_BG, 'full', false, ['class' => 'background']) ?>
								<p class="desc"><?= $content['desc'] ?></p>
								<?= wp_get_attachment_image($content['image'], 'full', false, ['class' => 'image']) ?>
								<a href="<?= $content['link']['url'] ?>" class="section-link-btn">
									<span><?= $content['link']['title'] ?></span>
									<?= wp_get_attachment_image(ICON_ARROW_LEFT, 'full', false) ?>
								</a>
							</div>

						</div>
					</li>
					<li class="menu__item">
						<span class="menu__link">
							Solutions
							<img src="/wp-content/themes/uppromote-theme/assets/icons/arrowDown.svg" alt="">
						</span>
						<div class="submenu__container submenu__container__center">
							<?php
							$solutions = get_field('solutions_header', 'option');
							$title = $solutions['title'];
							$get_started = $solutions['get_started'];
							$program = $solutions['program'];
							$industry = $solutions['industry'];
							$submenu_content = $solutions['submenu_content'];
							?>
							<p class="sub__menu__title"><?= $title ?></p>
							<div class="submenu__group">
								<div class="submenu__group__left">
									<div class="group__content">
										<?php
										$subtitle = $get_started['submenu_title'];
										$submenu = $get_started['submenu_item'];
										?>
										<span class="sub__title"><?= $subtitle ?></span>
										<?php foreach ($submenu as $item): ?>
											<a href="<?= $item['link']['url'] ?>" class="submenu__item">
												<div class="submenu__icon">
													<?= wp_get_attachment_image($item['icon'], 'full', false) ?>
												</div>
												<span class="submenu__text"><?= $item['link']['title'] ?></span>
											</a>
										<?php endforeach; ?>
									</div>
									<div class="group__content">
										<?php
										$subtitle = $program['submenu_title'];
										$submenu = $program['submenu_item'];
										?>
										<span class="sub__title"><?= $subtitle ?></span>
										<?php foreach ($submenu as $item): ?>
											<a href="<?= $item['link']['url'] ?>" class="submenu__item">
												<div class="submenu__icon">
													<?= wp_get_attachment_image($item['icon'], 'full', false) ?>
												</div>
												<span class="submenu__text"><?= $item['link']['title'] ?></span>
											</a>
										<?php endforeach; ?>
									</div>
								</div>
								<div class="submenu__group__center">
									<div class="group__content">
										<?php
										$subtitle = $industry['submenu_title'];
										$submenu = $industry['submenu_item'];
										?>
										<span class="sub__title"><?= $subtitle ?></span>
										<?php foreach ($submenu as $item): ?>
											<a href="<?= $item['link']['url'] ?>" class="submenu__item">
												<div class="submenu__icon">
													<?= wp_get_attachment_image($item['icon'], 'full', false) ?>
												</div>
												<span class="submenu__text"><?= $item['link']['title'] ?></span>
											</a>
										<?php endforeach; ?>
									</div>
								</div>
								<div class="submenu__group__right">
									<?= wp_get_attachment_image($submenu_content['background'], 'full', false, ['class' => 'background']) ?>
									<div class="group__right__content">
										<span class="title"><?= $submenu_content['title'] ?></span>
										<p class="desc"><?= $submenu_content['description'] ?></p>
									</div>
									<a href="<?= $submenu_content['explore_more']['url'] ?>" class="explore__more section-link-btn">
										<span><?= $submenu_content['explore_more']['title'] ?></span>
										<?= wp_get_attachment_image(ARROW_WHITE, 'full', false) ?>
									</a>
								</div>
							</div>
						</div>
					</li>
					<li class="menu__item">
						<a href="<?= $pricing['url'] ?>" class="menu__link">
							<?= $pricing['title'] ?>
						</a>
					</li>
					<li class="menu__item">
						<a href="<?= $martket['url'] ?>" class="menu__link">
							<?= $martket['title'] ?>
						</a>
					</li>
					<li class="menu__item">
						<span class="menu__link">
							Resource
							<img src="/wp-content/themes/uppromote-theme/assets/icons/arrowDown.svg" alt="">
						</span>
						<div class="submenu__container submenu__container__resource">
							<?php
							$resource_header = get_field('resource_header', 'option');
							$title = $resource_header['title'];
							$learn_grow = $resource_header['learn_grow'];
							$why_uppromote = $resource_header['why_uppromote'];
							$get_started = $resource_header['get_started'];
							$download_goodies = $resource_header['download_goodies'];
							?>
							<p class="sub__menu__title"><?= $title ?></p>
							<div class="submenu__group">
								<div class="submenu__group__left">
									<!-- learn & grow -->
									<div class="group__content">
										<?php
										$subtitle = $learn_grow['submenu_title'];
										$submenu = $learn_grow['submenu_items'];
										?>
										<span class="sub__title"><?= $subtitle ?></span>
										<?php foreach ($submenu as $item): ?>
											<a href="<?= $item['link']['url'] ?>" class="submenu__item">
												<div class="submenu__icon">
													<?= wp_get_attachment_image($item['icon'], 'full', false) ?>
												</div>
												<div class="submenu__content">
													<span class="submenu__text"><?= $item['link']['title'] ?></span>
													<p class="submenu__desc"><?= $item['content'] ?></p>
												</div>
											</a>
										<?php endforeach; ?>
									</div>
									<!-- why uppromote -->
									<div class="group__content">
										<?php
										$subtitle = $why_uppromote['submenu_title'];
										$submenu = $why_uppromote['submenu_items'];
										?>
										<span class="sub__title"><?= $subtitle ?></span>
										<?php foreach ($submenu as $item): ?>
											<a href="<?= $item['link']['url'] ?>" class="submenu__item">
												<div class="submenu__icon">
													<?= wp_get_attachment_image($item['icon'], 'full', false) ?>
												</div>
												<div class="submenu__content">
													<span class="submenu__text"><?= $item['link']['title'] ?></span>
													<p class="submenu__desc"><?= $item['content'] ?></p>
												</div>
											</a>
										<?php endforeach; ?>
									</div>
								</div>
								<div class="submenu__group__right">
									<!-- get started -->
									<div class="group__content">
										<?php
										$subtitle = $get_started['submenu_title'];
										$submenu = $get_started['submenu_items'];
										?>
										<span class="sub__title"><?= $subtitle ?></span>
										<?php foreach ($submenu as $item): ?>
											<a href="<?= $item['link']['url'] ?>" class="submenu__item">
												<div class="submenu__icon">
													<?= wp_get_attachment_image($item['icon'], 'full', false) ?>
												</div>
												<div class="submenu__content">
													<span class="submenu__text"><?= $item['link']['title'] ?></span>
													<p class="submenu__desc"><?= $item['content'] ?></p>
												</div>
											</a>
										<?php endforeach; ?>
									</div>
									<!-- download  -->
									<div class="group__content">
										<?php
										$subtitle = $download_goodies['submenu_title'];
										$submenu = $download_goodies['submenu_items'];
										?>
										<span class="sub__title"><?= $subtitle ?></span>
										<?php foreach ($submenu as $item): ?>
											<a href="<?= $item['link']['url'] ?>" class="submenu__item">
												<div class="submenu__icon">
													<?= wp_get_attachment_image($item['icon'], 'full', false) ?>
												</div>
												<div class="submenu__content">
													<span class="submenu__text"><?= $item['link']['title'] ?></span>
													<p class="submenu__desc"><?= $item['content'] ?></p>
												</div>
											</a>
										<?php endforeach; ?>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</nav>
		</div>
		<div class="header__right">
			<a href="<?= $shopify['url'] ?>" target="<?= $shopify['target'] ?>" class="btn-ghost btn-md header__btn1">
				<?= $shopify['title'] ?>
			</a>
			<a href="<?= $startfree['url'] ?>" target="<?= $startfree['target'] ?>" class="btn-md btn-primary header__btn2">
				<?= $startfree['title'] ?>
			</a>
		</div>
	</div>
</header>