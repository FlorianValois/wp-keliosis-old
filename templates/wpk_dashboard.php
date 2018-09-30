<?php

if (!defined('ABSPATH')) {
	exit;
}

if ( !function_exists( 'wpk_dashboard' ) ) {
	function wpk_dashboard(){
		
	$data = get_option('wp_keliosis');

	?>

	<table id="<?= WPK_PREFIX.WPK_NAME ?>" class="wrap">
		<tr>
			
		
		<td id="<?= WPK_PREFIX.'navigation' ?>">
			<a id="<?= WPK_PREFIX.'logo' ?>" href=""><img src="https://via.placeholder.com/250x100" alt=""></a>
			<nav>
				<ul>

					<li>
						<a href="" title="" id="<?= WPK_PREFIX.'dashboard-item' ?>" class="<?= WPK_PREFIX.'menuTitle' ?> <?= WPK_PREFIX.'linkTabs' ?> active" data-name="<?= WPK_PREFIX.'dashboard' ?>">
							<i class="fas fa-tachometer-alt"></i>
							<span><?= __( 'Dashboard', 'wp-keliosis' ); ?></span>
						</a>
					</li>
                </ul>
            </nav>
            <span class="<?= WPK_PREFIX.'title-section' ?>"><?= __( 'Front components', 'wp-keliosis' ); ?></span>
            <nav>
                <ul>
					<li>
						<a href="" title="" id="<?= WPK_PREFIX.'backToTop-item' ?>" class="<?= WPK_PREFIX.'menuTitle' ?> <?= WPK_PREFIX.'subList' ?>" data-name="<?= WPK_BTT ?>">
							<i class="fas fa-level-up-alt"></i>
							<span><?= __( 'Back to top', 'wp-keliosis' ); ?></span>
						</a>
						<ul>
							<li>
								<a href="" data-name="<?= WPK_BTT.'_Activation' ?>" class="<?= WPK_PREFIX.'submenuTitle' ?> <?= WPK_PREFIX.'linkTabs' ?>">Activation</a>
							</li>
							<li>
								<a href="" data-name="<?= WPK_BTT.'_Position' ?>" class="<?= WPK_PREFIX.'submenuTitle' ?> <?= WPK_PREFIX.'linkTabs' ?>">Position</a>
							</li>
							<li>
								<a href="" data-name="<?= WPK_BTT.'_Styling' ?>" class="<?= WPK_PREFIX.'submenuTitle' ?> <?= WPK_PREFIX.'linkTabs' ?>">Styling</a>
							</li>
						</ul>
					</li>
					
				</ul>
			</nav>
		</td>

		<td id="<?= WPK_PREFIX.'content' ?>">
			<form id="<?= WPK_PREFIX.'options' ?>" class="formAjax" method="post" action="">

				<?php 
					require_once WPK_PLUGIN_DIR . '/templates/includes/dashboard.inc.php'; 
//					require_once WPK_PLUGIN_DIR . '/templates/includes/backtotop.inc.php'; 
					require_once WPK_PLUGIN_DIR . '/templates/includes/backtotop/activation.inc.php'; 
					require_once WPK_PLUGIN_DIR . '/templates/includes/backtotop/position.inc.php'; 
					require_once WPK_PLUGIN_DIR . '/templates/includes/backtotop/styling.inc.php'; 
				?>
				<div id="<?= WPK_PREFIX.'listButtonForm' ?>">
				
					<button type="submit" id="<?= WPK_PREFIX.'btnSaveChanges' ?>" class="<?= WPK_PREFIX.'btn-save' ?>"><i class="far fa-save"></i> <?= __( 'Save changes', 'wp-keliosis' ); ?></button>

					<button type="button" id="<?= WPK_PREFIX.'btnResetSection' ?>" class="<?= WPK_PREFIX.'btn-reset' ?>"><i class="fas fa-eraser"></i> <?= __( 'Reset section', 'wp-keliosis' ); ?></button>
					
					<button type="button" id="<?= WPK_PREFIX.'btnResetAll' ?>" class="<?= WPK_PREFIX.'btn-reset' ?>"><i class="fas fa-eraser"></i> <?= __( 'Reset all sections', 'wp-keliosis' ); ?></button>

				</div>
				
			</form>
		</td>
		
		</tr>
	</table>
	<?php
	}
}
