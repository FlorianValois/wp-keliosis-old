<?php

if (!defined('ABSPATH')) {
	exit;
}

?>

<div id="<?= WPK_IMPEXP.'_Export' ?>" class="<?= WPK_PREFIX.'tabs' ?> active"  data-name="<?= WPK_IMPEXP.'_Export' ?>">
<div class="<?= WPK_PREFIX.'container' ?> container-fluid">
<h1><?= __( 'Export', 'wp-keliosis' ); ?></h1>
<div class="row">
<div class="col-6 col-md-8 col-lg-9">
<div id="" class="<?= WPK_PREFIX.'card' ?>">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas accumsan laoreet elit at dignissim. Nullam a vulputate sem. Praesent vel erat libero. Aenean a neque id risus euismod tempor. Maecenas ultrices, lectus sed efficitur imperdiet, ex leo cursus nulla, eu tempus purus erat sed ipsum. Aenean vitae eleifend ipsum. Ut ut ornare metus. Ut molestie lacinia efficitur. Etiam accumsan felis a orci feugiat, sit amet efficitur sapien semper. Cras mollis cursus rhoncus.</p>
<button type="button" id="<?= WPK_PREFIX.'btnExport' ?>" class="download-link"><i class="fas fa-upload"></i> Exporter les données</button>
</div>
</div>
</div>
</div>
</div>