<?php 
$rn = "\r\n";
//Mettre un retour à la ligne de plus pour simuler retour à la ligne du CSS ?>
#btn_backToTop{
	position: fixed;
	z-index: 999;
	padding: 0;
	content: "";
	<?php
		// Activation
		if(isset($data[WPK_BTT.'_Activation'])){
			echo 'display: block;'.$rn;
		}
		else{
			echo 'display: none;'.$rn;
		}
	?>
	<?php
		// Position (right or left)
		if($data[WPK_BTT.'_Position'] === 'right'){
			if(!$data[WPK_BTT.'_HorizontalGap']){
				echo 'right: 0;'.$rn;
			}
			else{
				echo 'right: '.$data[WPK_BTT.'_HorizontalGap'].'px;'.$rn;	
			}

		}
		if($data[WPK_BTT.'_Position'] === 'left'){
			if(!$data[WPK_BTT.'_HorizontalGap']){
				echo 'left: 0;'.$rn;
			}
			else{
				echo 'left: '.$data[WPK_BTT.'_HorizontalGap'].'px;'.$rn;
			}
		}
	?>
	<?php
		// Position (bottom)
		if(!$data[WPK_BTT.'_VerticalGap']){
			echo 'bottom: 0;'.$rn;
		}
		else{
			echo 'bottom: '.$data[WPK_BTT.'_VerticalGap'].'px;'.$rn;
		}
	?>
	<?php
		// Width
		if(!$data[WPK_BTT.'_Width']){
			echo 'width: 0;'.$rn;
		}
		else{
			echo 'width: '.$data[WPK_BTT.'_Width'].'px;'.$rn;
		}
	?>
	<?php
		// Height
		if(!$data[WPK_BTT.'_Height']){
			echo 'height: 0;'.$rn;
		}
		else{
			echo 'height: '.$data[WPK_BTT.'_Height'].'px;'.$rn;
		}
	?>
}