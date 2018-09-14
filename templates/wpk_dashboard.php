<?php

if (!defined('ABSPATH')) {
	exit;
}

function wpk_dashboard(){
?>
<div class="wrap">
  <?php echo __( 'Bonjour', 'wp-keliosis' ); ?>
  <i class="fas fa-cog"></i>
  <section id="<?php echo WPK_PREFIX.'dashboard'; ?>">
    <nav id="<?php echo WPK_PREFIX.'navigation'; ?>">
      <ul>
        <li>
          <a href=""title="" id="" class="">Lorem ipsum</a>
        </li>
      </ul>
    </nav>
    <div id="<?php echo WPK_PREFIX.'content'; ?>">
      
    </div>
  </section>
</div>
<?php
}