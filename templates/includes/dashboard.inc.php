<?php

if (!defined('ABSPATH')) {
	exit;
}

?>

<div id="<?= WPK_PREFIX.'dashboard' ?>" class="<?= WPK_PREFIX.'tabs' ?>">
    <div class="<?= WPK_PREFIX.'container' ?> container-fluid">
			<h1><?= __( 'Dashboard', 'wp-keliosis' ); ?></h1>
      <div class="row">
       <div class="col-6 col-md-8 col-lg-9">
          <div class="<?= WPK_PREFIX.'card' ?>">
            <h2><?= __( 'Welcome to WP-Keliosis !', 'wp-keliosis' ); ?></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas accumsan laoreet elit at dignissim. Nullam a vulputate sem. Praesent vel erat libero. Aenean a neque id risus euismod tempor. Maecenas ultrices, lectus sed efficitur imperdiet, ex leo cursus nulla, eu tempus purus erat sed ipsum. Aenean vitae eleifend ipsum. Ut ut ornare metus. Ut molestie lacinia efficitur. Etiam accumsan felis a orci feugiat, sit amet efficitur sapien semper. Cras mollis cursus rhoncus.</p>
          </div>
          <div class="<?= WPK_PREFIX.'card' ?>">
            <h2><?= __( 'What can i do in WP-Keliosis ?', 'wp-keliosis' ); ?></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas accumsan laoreet elit at dignissim. Nullam a vulputate sem. Praesent vel erat libero. Aenean a neque id risus euismod tempor. Maecenas ultrices, lectus sed efficitur imperdiet, ex leo cursus nulla, eu tempus purus erat sed ipsum. Aenean vitae eleifend ipsum. Ut ut ornare metus. Ut molestie lacinia efficitur. Etiam accumsan felis a orci feugiat, sit amet efficitur sapien semper. Cras mollis cursus rhoncus.</p>
          </div>
       </div>
       <div class="col-6 col-md-4 col-lg-3">
          <div class="<?= WPK_PREFIX.'card' ?>">
            <h2><?= __( 'Changelog', 'wp-keliosis' ); ?></h2>
            <ul id="<?= WPK_PREFIX.'changelog' ?>">
            	<li>
            		<a href="#">X.X.X</a>
            		<span>JJ/MM/AAAA</span>
            	</li>
            	<li>
            		<a href="#">X.X.X</a>
            		<span>JJ/MM/AAAA</span>
            	</li>
            	<li>
            		<a href="#">X.X.X</a>
            		<span>JJ/MM/AAAA</span>
            	</li>
            	<li>
            		<a href="#">X.X.X</a>
            		<span>JJ/MM/AAAA</span>
            	</li>
            	<li>
            		<a href="#">X.X.X</a>
            		<span>JJ/MM/AAAA</span>
            	</li>
            </ul>
          </div>
          <div id="<?= WPK_PREFIX.'documentation' ?>" class="<?= WPK_PREFIX.'card' ?>">
            <h2><?= __( 'Support', 'wp-keliosis' ); ?></h2>
            <a href="https://github.com/FlorianValois/wp-keliosis/wiki" target="_blank"><i class="fas fa-book"></i> <?= __( 'Read the documentation', 'wp-keliosis' ); ?></a>
            <a href="#"><i class="far fa-life-ring"></i> <?= __( 'Contact support', 'wp-keliosis' ); ?></a>
            <a href="https://github.com/FlorianValois/wp-keliosis/issues" target="_blank"><i class="fas fa-bug"></i> <?= __( 'Report a bug', 'wp-keliosis' ); ?></a>
          </div>
       </div>
     </div>
  </div>
</div>