<?php

if (!defined('ABSPATH')) {
	exit;
}

function wpk_dashboard(){
?>
<div id="<?= WPK_PREFIX.WPK_NAME ?>" class="wrap">

	<section id="<?= WPK_PREFIX.'navigation' ?>">
		<a id="<?= WPK_PREFIX.'logo' ?>" href=""><img src="https://via.placeholder.com/250x100" alt=""></a>
		<nav>
			<ul>
				<li>
					<a href="" title="" id="<?= WPK_PREFIX.'dashboard-item' ?>" class="<?= WPK_PREFIX.'menuTitle' ?> <?= WPK_PREFIX.'menuTitleSingle' ?>" data-name="<?= WPK_PREFIX.'dashboard' ?>">
						<i class="fas fa-tachometer-alt"></i>
						<span><?= __( 'Dashboard', 'wp-keliosis' ); ?></span>
					</a>
				</li>
				<li>
					<a href="" title="" id="<? WPK_PREFIX.'scrollToTop-item' ?>" class="<?= WPK_PREFIX.'menuTitle' ?> <?= WPK_PREFIX.'menuTitleSingle' ?> active" data-name="<?= WPK_PREFIX.'scrollToTop' ?>">
						<i class="fas fa-level-up-alt"></i>
						<span><?= __( 'Scroll to top', 'wp-keliosis' ); ?></span>
					</a>
				</li>
<!--
				<li>
					<a href="" title="" id="<? WPK_PREFIX.'scrollToTop-item' ?>" class="<?= WPK_PREFIX.'menuTitle' ?> <?= WPK_PREFIX.'menuTitleMulti' ?>">
						<i class="fas fa-level-up-alt"></i>
						<span><?= __( 'Scroll to top', 'wp-keliosis' ); ?></span>
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
-->
			</ul>
		</nav>
	</section>

	<section id="<?= WPK_PREFIX.'content' ?>">
		<form id="<?= WPK_PREFIX.'options' ?>" class="formAjax" method="post" action="">
		
			<div id="<?= WPK_PREFIX.'dashboard' ?>">
				<h1>Dashboard</h1>
			</div>
			
			<div id="<?= WPK_PREFIX.'scrollToTop' ?>" class="active">
			<div class="<?= WPK_PREFIX.'card-header' ?>">
				<i class="fas fa-level-up-alt"></i>
				<h1>Scroll to top</h1>
			</div>
				<div class="<?= WPK_PREFIX.'card' ?>">
					<h2>Lorem ipsum</h2>
					<div class="<?= WPK_PREFIX.'content' ?>">
						test
					</div>
				</div>
				<div class="<?= WPK_PREFIX.'card' ?>">
					<h2>Lorem ipsum</h2>
					<div class="<?= WPK_PREFIX.'content' ?>">
						test
					</div>
				</div>
			</div>
			
		</form>
	</section>

</div>
<?php
}
