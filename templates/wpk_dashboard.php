<?php

if (!defined('ABSPATH')) {
	exit;
}

function wpk_dashboard(){
?>
<div class="wrap">
  
  
  <div id="<?= WPK_PREFIX.'dashboard' ?>">
    <nav id="<?= WPK_PREFIX.'navigation' ?>">
      <ul>
        <li>
          <a href="" title="" id="" class="<?= WPK_PREFIX.'menuTitle' ?>">
          	<?php echo __( 'Scroll to top', 'wp-keliosis' ); ?>
          	<i class="far fa-caret-square-up"></i>
          </a>
          <ul class="<?= WPK_PREFIX.'subMenu' ?>">
            <li>
              <a href="" title="" class="<?= WPK_PREFIX.'menuSubTitle' ?>">Lorem ipsum</a>
            </li>
            <li>
              <a href="" title="" class="<?= WPK_PREFIX.'menuSubTitle' ?>">Lorem ipsum</a>
            </li>
            <li>
              <a href="" title="" class="<?= WPK_PREFIX.'menuSubTitle' ?>">Lorem ipsum</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="" title="" id="" class="<?= WPK_PREFIX.'menuTitle' ?>">Lorem ipsum</a>
          <ul class="<?= WPK_PREFIX.'subMenu' ?>">
            <li>
              <a href="" title="" class="<?= WPK_PREFIX.'menuSubTitle' ?>">Lorem ipsum</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="" title="" id="" class="<?= WPK_PREFIX.'menuTitle' ?>">Lorem ipsum</a>
          <ul class="<?= WPK_PREFIX.'subMenu' ?>">
            <li>
              <a href="" title="" class="<?= WPK_PREFIX.'menuSubTitle' ?>">Lorem ipsum</a>
            </li>
            <li>
              <a href="" title="" class="<?= WPK_PREFIX.'menuSubTitle' ?>">Lorem ipsum</a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <section id="<?= WPK_PREFIX.'content' ?>">
      <form id="<?= WPK_PREFIX.'options' ?>" class="formAjax" method="post" action="">
      
      </form>
    </section>
  </div>
</div>
<?php
}