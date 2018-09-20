<?php

if (!defined('ABSPATH')) {
	exit;
}

if ( !function_exists( 'wpk_dashboard' ) ) {
	function wpk_dashboard(){
		
	$data = get_option('wp_keliosis');

	?>
	<div id="<?= WPK_PREFIX.WPK_NAME ?>" class="wrap">

		<section id="<?= WPK_PREFIX.'navigation' ?>">
			<a id="<?= WPK_PREFIX.'logo' ?>" href=""><img src="https://via.placeholder.com/250x100" alt=""></a>
			<nav>
				<ul>

					<li>
						<a href="" title="" id="<?= WPK_PREFIX.'dashboard-item' ?>" class="<?= WPK_PREFIX.'menuTitle' ?>" data-name="<?= WPK_PREFIX.'dashboard' ?>">
							<i class="fas fa-tachometer-alt"></i>
							<span><?= __( 'Dashboard', 'wp-keliosis' ); ?></span>
						</a>
					</li>

					<li>
						<a href="" title="" id="<? WPK_PREFIX.'backToTop-item' ?>" class="<?= WPK_PREFIX.'menuTitle' ?> active" data-name="<?= WPK_BTT ?>">
							<i class="fas fa-level-up-alt"></i>
							<span><?= __( 'Back to top', 'wp-keliosis' ); ?></span>
						</a>
					</li>

				</ul>
			</nav>
		</section>

		<section id="<?= WPK_PREFIX.'content' ?>">
			<form id="<?= WPK_PREFIX.'options' ?>" class="formAjax" method="post" action="">

				<?php 
					require_once WPK_PLUGIN_DIR . '/templates/includes/dashboard.inc.php'; 
					require_once WPK_PLUGIN_DIR . '/templates/includes/backtotop.inc.php'; 
				?>

			<div id="<?= WPK_PREFIX.'btnForm' ?>">

	<!--			<button type="button" id="<?= WPK_PREFIX.'btnReset' ?>" class="<?= WPK_PREFIX.'btn-reset' ?>"><?= __( 'Restore defaults', 'wp-keliosis' ); ?></button>-->

				<button type="submit" id="<?= WPK_PREFIX.'btnSaveChanges' ?>" class="<?= WPK_PREFIX.'btn-save' ?>"><?= __( 'Save changes', 'wp-keliosis' ); ?></button>

			</div>

			</form>
		</section>

	</div>
	<?php
	}
}
