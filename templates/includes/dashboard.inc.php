<?php

if (!defined('ABSPATH')) {
	exit;
}

?>

<div id="<?= WPK_PREFIX.'dashboard' ?>" class="<?= WPK_PREFIX.'tabs' ?> active">
				
	<div class="<?= WPK_PREFIX.'card-header' ?>">
		<h1><?= __( 'Dashboard', 'wp-keliosis' ); ?></h1>
	</div>
    <div class="<?= WPK_PREFIX.'container' ?> container-fluid">
     <div class="row">
       <div class="col-8">
          <div class="<?= WPK_PREFIX.'card' ?>">
            <h2><?= __( 'Welcome to WP-Keliosis !', 'wp-keliosis' ); ?></h2>
          </div>
          <div class="<?= WPK_PREFIX.'card' ?>">
            <h2><?= __( 'What can i do in WP-Keliosis ?', 'wp-keliosis' ); ?></h2>
          </div>
       </div>
       <div class="col-4">
          <div class="<?= WPK_PREFIX.'card' ?>">
            <h2><?= __( 'Changelog', 'wp-keliosis' ); ?></h2>
          </div>
          <div class="<?= WPK_PREFIX.'card' ?>">
            <h2><?= __( 'Futures updates', 'wp-keliosis' ); ?></h2>
          </div>
          <div id="<?= WPK_PREFIX.'documentation' ?>" class="<?= WPK_PREFIX.'card' ?>">
            <i class="fas fa-book"></i>
            <h2><?= __( 'Documentation', 'wp-keliosis' ); ?></h2>
            <p><?= __( 'All you need to know about the plugin is in this documentation.', 'wp-keliosis' ); ?></p>
          </div>
       </div>
     </div>
  </div>
</div>