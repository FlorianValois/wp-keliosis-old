<?php

if (!defined('ABSPATH')) {
	exit;
}

//global $wpdb;
//$results = $wpdb->get_results( "SELECT option_value FROM {$wpdb->prefix}options WHERE option_name = 'wp_keliosis'", OBJECT );
//$string = '';
//foreach($results[0] as $key){
//	$string .= $key;
//}

?>

<div id="<?= WPK_IMPEXP.'_Export' ?>" class="<?= WPK_PREFIX.'tabs' ?> active"  data-name="<?= WPK_IMPEXP.'_Export' ?>">
<div class="<?= WPK_PREFIX.'container' ?> container-fluid">
<h1><?= __( 'Export', 'wp-keliosis' ); ?></h1>
<div class="row">
<div class="col-6 col-md-8 col-lg-9">
<div id="" class="<?= WPK_PREFIX.'card' ?>">
<h2><?= __( 'Export your data', 'wp-keliosis' ); ?></h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas accumsan laoreet elit at dignissim. Nullam a vulputate sem. Praesent vel erat libero. Aenean a neque id risus euismod tempor. Maecenas ultrices, lectus sed efficitur imperdiet, ex leo cursus nulla, eu tempus purus erat sed ipsum. Aenean vitae eleifend ipsum. Ut ut ornare metus. Ut molestie lacinia efficitur. Etiam accumsan felis a orci feugiat, sit amet efficitur sapien semper. Cras mollis cursus rhoncus.</p>
<textarea name="<?= WPK_IMPEXP.'_ExportData' ?>" id="<?= WPK_IMPEXP.'_ExportData' ?>" rows="10" readonly><?php //$string; ?></textarea>
</div>
</div>
</div>
</div>
</div>