<?php

if (!defined('ABSPATH')) {
	exit;
}

if ( !function_exists( 'wpk_dashboard' ) ) {
	function wpk_dashboard(){
		
	$data = get_option('wp_keliosis');

	?>
<div id="<?= WPK_PREFIX.'header' ?>">
	<a id="<?= WPK_PREFIX.'logo' ?>" href=""><img src="https://via.placeholder.com/250x100" alt=""></a>
</div>

<table id="<?= WPK_PREFIX.WPK_NAME ?>" class="wrap">
	<tr>
		<td id="<?= WPK_PREFIX.'navigation' ?>">
			<nav>
				<ul>
					<li>
						<a href="" title="" id="<?= WPK_PREFIX.'dashboard-item' ?>" class="<?= WPK_PREFIX.'menuTitle' ?> <?= WPK_PREFIX.'linkTabs' ?> active" data-name="<?= WPK_PREFIX.'dashboard' ?>">
							<i class="fas fa-tachometer-alt"></i>
							<span><?= __( 'Dashboard', 'wp-keliosis' ); ?></span>
						</a>
					</li>
					<li>
						<span class="<?= WPK_PREFIX.'title-section' ?>"><?= __( 'Front options', 'wp-keliosis' ); ?></span>
					</li>
					<li>
						<a href="" title="" id="<?= WPK_PREFIX.'scrollToTop-item' ?>" class="<?= WPK_PREFIX.'menuTitle' ?> <?= WPK_PREFIX.'subList' ?>" data-name="<?= WPK_STT ?>">
							<i class="fas fa-level-up-alt"></i>
							<span><?= __( 'Scroll to top', 'wp-keliosis' ); ?></span>
						</a>
						<ul>
							<li>
								<a href="" data-name="<?= WPK_STT.'_Activation' ?>" class="<?= WPK_PREFIX.'submenuTitle' ?> <?= WPK_PREFIX.'linkTabs' ?>"><?= __( 'Activation', 'wp-keliosis' ); ?></a>
							</li>
							<li>
								<a href="" data-name="<?= WPK_STT.'_Position' ?>" class="<?= WPK_PREFIX.'submenuTitle' ?> <?= WPK_PREFIX.'linkTabs' ?>"><?= __( 'Position', 'wp-keliosis' ); ?></a>
							</li>
							<li>
								<a href="" data-name="<?= WPK_STT.'_Styling' ?>" class="<?= WPK_PREFIX.'submenuTitle' ?> <?= WPK_PREFIX.'linkTabs' ?>"><?= __( 'Styling', 'wp-keliosis' ); ?></a>
							</li>
						</ul>
					</li>
					<li>
						<span class="<?= WPK_PREFIX.'title-section' ?>"><?= __( 'Back options', 'wp-keliosis' ); ?></span>
					</li>
					<li>
						<span class="<?= WPK_PREFIX.'title-section' ?>"><?= __( 'Other options', 'wp-keliosis' ); ?></span>
					</li>
					<li>
						<a href="" title="" id="<?= WPK_PREFIX.'importExport-item' ?>" class="<?= WPK_PREFIX.'menuTitle' ?> <?= WPK_PREFIX.'subList' ?>" data-name="<?= WPK_IMPEXP ?>">
							<i class="fas fa-database"></i>
							<span><?= __( 'Import/Export', 'wp-keliosis' ); ?></span>
						</a>
						<ul>
							<li>
								<a href="" data-name="<?= WPK_IMPEXP.'_Import' ?>" class="<?= WPK_PREFIX.'submenuTitle' ?> <?= WPK_PREFIX.'linkTabs' ?>"><?= __( 'Import', 'wp-keliosis' ); ?></a>
							</li>
							<li>
								<a href="" data-name="<?= WPK_IMPEXP.'_Export' ?>" class="<?= WPK_PREFIX.'submenuTitle' ?> <?= WPK_PREFIX.'linkTabs' ?>"><?= __( 'Export', 'wp-keliosis' ); ?></a>
							</li>
						</ul>
					</li>
				</ul>
			</nav>
		</td>

		<td id="<?= WPK_PREFIX.'content' ?>">
			<form id="<?= WPK_PREFIX.'options' ?>" method="post" action="">

				<?php 
					// Dashboard
					require_once WPK_PLUGIN_DIR . '/templates/includes/dashboard.inc.php';
					// Scroll to top
					require_once WPK_PLUGIN_DIR . '/templates/includes/scrollToTop/activation.inc.php'; 
					require_once WPK_PLUGIN_DIR . '/templates/includes/scrollToTop/position.inc.php'; 
					require_once WPK_PLUGIN_DIR . '/templates/includes/scrollToTop/styling.inc.php'; 
				?>
				<div id="<?= WPK_PREFIX.'listButtonForm' ?>">
					<button type="submit" id="<?= WPK_PREFIX.'btnSaveChanges' ?>" class="<?= WPK_PREFIX.'btn-save' ?>"><i class="far fa-save"></i> <?= __( 'Save', 'wp-keliosis' ); ?></button>
					<button type="button" id="<?= WPK_PREFIX.'btnResetSection' ?>" class="<?= WPK_PREFIX.'btn-reset' ?>"><i class="fas fa-eraser"></i> <?= __( 'Reset section', 'wp-keliosis' ); ?></button>
					<button type="button" id="<?= WPK_PREFIX.'btnResetAll' ?>" class="<?= WPK_PREFIX.'btn-allreset' ?>"><i class="fas fa-trash"></i> <?= __( 'Reset all sections', 'wp-keliosis' ); ?></button>
				</div>

			</form>
			
			<div id="<?= WPK_PREFIX.'import' ?>">
			<?php
				require_once WPK_PLUGIN_DIR . '/templates/includes/import.inc.php';
			?>
			</div>
			
			<div id="<?= WPK_PREFIX.'export' ?>">
			<?php
				require_once WPK_PLUGIN_DIR . '/templates/includes/export.inc.php';
			?>
			</div>
		</td>

	</tr>
</table>
	<?php
	}
}
