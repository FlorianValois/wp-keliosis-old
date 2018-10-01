<?php

if (!defined('ABSPATH')) {
	exit;
}

?>

<div id="<?= WPK_BTT.'_Position' ?>" class="<?= WPK_PREFIX.'tabs' ?>" data-name="<?= WPK_BTT.'_Position' ?>">
				
	<div class="<?= WPK_PREFIX.'card-header' ?>">
		<h1><?= __( 'Back to top', 'wp-keliosis' ); ?> <span class="caret">></span> <span class="title"><?= __( 'Position', 'wp-keliosis' ); ?></span></h1>
	</div>
	
	<div class="<?= WPK_PREFIX.'container' ?>">
        
		<!--Position -->
		<div class="<?= WPK_PREFIX.'card' ?>">
			<table>
					<tr>
							<th>
									<span class="<?= WPK_PREFIX.'title' ?>"><?= __( 'Position', 'wp-keliosis' ); ?></span>
									<span class="<?= WPK_PREFIX.'description' ?>"><?= __( 'Choose position of the button between left or right', 'wp-keliosis' ); ?></span>
							</th>
							<td>
								<select name="<?= WPK_BTT.'_Position' ?>" id="<?= WPK_BTT.'_Position' ?>">
									<option value="">-------</option>
											<?php
													$arraySelect = array(
															'left' => 'Left',
															'right' => 'Right'
													);
													foreach($arraySelect as $key=>$value){
											?>
													<option value="<?php echo $key; ?>" <?php if($key === $data[WPK_BTT.'_Position']){ echo 'selected';} ?>><?php echo $value; ?></option>
											<?php
													}
											?>
									</select>
							</td>
					</tr>
					<tr>
							<th>
									<span class="<?= WPK_PREFIX.'title' ?>"><?= __( 'Horizontal gap', 'wp-keliosis' ); ?></span>
									<span class="<?= WPK_PREFIX.'description' ?>"><?= __( 'Choose horizontal gap of the button', 'wp-keliosis' ); ?></span>
							</th>
							<td>
								<input type="number" name="<?= WPK_BTT.'_HorizontalGap' ?>" value="<?php echo $data[WPK_BTT.'_HorizontalGap']; ?>" min="0">
							</td>
					</tr>
					<tr>
							<th>
									<span class="<?= WPK_PREFIX.'title' ?>"><?= __( 'Vertical gap', 'wp-keliosis' ); ?></span>
									<span class="<?= WPK_PREFIX.'description' ?>"><?= __( 'Choose vertical gap of the button', 'wp-keliosis' ); ?></span>
							</th>
							<td>
								<input type="number" name="<?= WPK_BTT.'_VerticalGap' ?>" value="<?php echo $data[WPK_BTT.'_VerticalGap']; ?>" min="0">
							</td>
					</tr>
			</table>
		</div>
      
	</div><!-- End container -->
</div>