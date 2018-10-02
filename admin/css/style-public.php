<?php 
$rn = "\r\n";
$prefix = 'wpk-';
//Mettre un retour à la ligne de plus pour simuler retour à la ligne du CSS 
if(isset($data[WPK_STT.'_ActivationSmartphone'])){
?>
@media screen and (min-width: <?php if(isset($data[WPK_STT.'_SmartphoneWidth'])){ 
	echo $data[WPK_STT.'_SmartphoneWidth'].'px'; 
}else{ 
	echo '320px';
}?>
){
<?php
																								 }
?>
#<?php echo $prefix.'btn_scrollToTop'; ?>{
	position: fixed;
	z-index: 999;
	padding: 0;
	content: "";
	<?php
		// Activation
		if(isset($data[WPK_STT.'_ActivationDesktop'])){
			echo 'display: block;'.$rn;
		}
		else{
			echo 'display: none;'.$rn;
		}
	?>
	<?php
		// Position (right or left)
		if($data[WPK_STT.'_Position'] === 'right'){
			if(!$data[WPK_STT.'_HorizontalGap']){
				echo 'right: 0;'.$rn;
			}
			else{
				echo 'right: '.$data[WPK_STT.'_HorizontalGap'].'px;'.$rn;	
			}

		}
		if($data[WPK_STT.'_Position'] === 'left'){
			if(!$data[WPK_STT.'_HorizontalGap']){
				echo 'left: 0;'.$rn;
			}
			else{
				echo 'left: '.$data[WPK_STT.'_HorizontalGap'].'px;'.$rn;
			}
		}
	?>
	<?php
		// Position (bottom)
		if(!$data[WPK_STT.'_VerticalGap']){
			echo 'bottom: 0;'.$rn;
		}
		else{
			echo 'bottom: '.$data[WPK_STT.'_VerticalGap'].'px;'.$rn;
		}
	?>
	<?php
		// Width
		if(!$data[WPK_STT.'_Width']){
			echo 'width: 0;'.$rn;
		}
		else{
			echo 'width: '.$data[WPK_STT.'_Width'].'px;'.$rn;
		}
	?>
	<?php
		// Height
		if(!$data[WPK_STT.'_Height']){
			echo 'height: 0;'.$rn;
		}
		else{
			echo 'height: '.$data[WPK_STT.'_Height'].'px;'.$rn;
		}
	?>
	<?php
		// Radius
		if(!$data[WPK_STT.'_Radius']){
			echo 'border-radius: 0;'.$rn;
		}
		else{
			echo 'border-radius: '.$data[WPK_STT.'_Radius'].'px;'.$rn;
		}
	?>
	<?php
		// Background color
		if(!$data[WPK_STT.'_BackgroundColor']){
			echo 'background-color: #000000;'.$rn;
		}
		else{
			echo 'background-color: '.$data[WPK_STT.'_BackgroundColor'].';'.$rn;
		}
	?>
}

#<?php echo $prefix.'btn_scrollToTop'; ?>:before{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translateX(-50%) translateY(-50%);
	font-family: "Font Awesome 5 Free";
	font-weight: 900;
	<?php
		// Icon size
		if(!$data[WPK_STT.'_IconSize']){
			echo 'font-size: 13px;'.$rn;
		}
		else{
			echo 'font-size: '.$data[WPK_STT.'_IconSize'].'px;'.$rn;
		}
	?>
	<?php
		// Icon
  	if(isset($data[WPK_STT.'_Icon'])){
      echo 'content: "\\'.$data[WPK_STT.'_Icon'].'";'.$rn;
    }
    else{
      echo 'content: "\f0d8";'.$rn;
    }
  ?>
	<?php
		// Icon color
		if(!$data[WPK_STT.'_IconColor']){
			echo 'color: #000000;'.$rn;
		}
		else{
			echo 'color: '.$data[WPK_STT.'_IconColor'].';'.$rn;
		}
	?>
}
<?php
if(isset($data[WPK_STT.'_ActivationSmartphone'])){
?>
}
<?php
}
?>