<?php //Mettre un retour à la ligne de plus pour simuler retour à la ligne du CSS ?>
#btn_backToTop{
  position: fixed;
  z-index: 999;
  padding: 0;
  <?php
    // Activation
    if(isset($data[WPK_BTT.'_Activation'])){
      echo 'display: block;';
    }
    else{
      echo 'display: none;';
    }
  ?>
  
  <?php
    // Positionnement (right or left)
    if($data[WPK_BTT.'_Position'] === 'right'){
      echo 'right: 0;';
    }
    if($data[WPK_BTT.'_Position'] === 'left'){
      echo 'left: 0;';
    }
  ?>
  
}