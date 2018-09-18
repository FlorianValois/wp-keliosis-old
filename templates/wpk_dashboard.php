<?php

if (!defined('ABSPATH')) {
	exit;
}

function wpk_dashboard(){
?>
<div id="<?= WPK_PREFIX.'dashboard' ?>" class="wrap">

	<section id="<?= WPK_PREFIX.'navigation' ?>">
		<a id="<?= WPK_PREFIX.'logo' ?>" href=""><img src="https://via.placeholder.com/250x250" alt=""></a>
		<nav>
			<ul>
				<li>
					<a href="" title="" id="<?= WPK_PREFIX.'scrollToTop' ?>" class="<?= WPK_PREFIX.'menuTitle' ?> <?= WPK_PREFIX.'menuTitleSingle' ?>">
						<i class="fas fa-tachometer-alt"></i>
						<?= __( 'Dashboard', 'wp-keliosis' ); ?>
					</a>
				</li>
				<li>
					<a href="" title="" id="<?= WPK_PREFIX.'scrollToTop' ?>" class="<?= WPK_PREFIX.'menuTitle' ?> <?= WPK_PREFIX.'menuTitleMulti' ?>">
						<i class="fas fa-level-up-alt"></i>
						<?= __( 'Scroll to top', 'wp-keliosis' ); ?>
					</a>
					<ul class="<?= WPK_PREFIX.'subMenu' ?>">
						<li>
							<a href="" title="" class="<?= WPK_PREFIX.'menuSubTitleMulti' ?>">Lorem ipsum</a>
						</li>
						<li>
							<a href="" title="" class="<?= WPK_PREFIX.'menuSubTitleMulti' ?>">Lorem ipsum</a>
						</li>
						<li>
							<a href="" title="" class="<?= WPK_PREFIX.'menuSubTitleMulti' ?>">Lorem ipsum</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="" title="" id="<?= WPK_PREFIX.'comingsoon' ?>">
						<?= __( 'Coming soon...', 'wp-keliosis' ); ?></a>
				</li>
			</ul>
		</nav>
	</section>

	<section id="<?= WPK_PREFIX.'content' ?>">
		<form id="<?= WPK_PREFIX.'options' ?>" class="formAjax" method="post" action="">

		</form>
	</section>

</div>
<?php
}
