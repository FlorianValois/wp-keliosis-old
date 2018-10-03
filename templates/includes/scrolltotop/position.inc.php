<?php

if (!defined('ABSPATH')) {
	exit;
}

?>

<div id="<?= WPK_STT.'_Position' ?>" class="<?= WPK_PREFIX.'tabs' ?>" data-name="<?= WPK_STT.'_Position' ?>">
					
	<div class="<?= WPK_PREFIX.'container' ?> container-fluid">
	
		<h1><?= __( 'Position', 'wp-keliosis' ); ?></h1>
    <div class="row">
			<div class="col-8">
		<!--Position -->
		<div class="<?= WPK_PREFIX.'card-table' ?>">
			<table>
					<tr>
							<th>
									<span class="<?= WPK_PREFIX.'title' ?>"><?= __( 'Position', 'wp-keliosis' ); ?></span>
									<span class="<?= WPK_PREFIX.'description' ?>"><?= __( 'Choose position of the button between left or right', 'wp-keliosis' ); ?></span>
							</th>
							<td>
								<select name="<?= WPK_STT.'_Position' ?>" id="<?= WPK_STT.'_Position' ?>">
									<option value="">-------</option>
											<?php
													$arraySelect = array(
															'left' => 'Left',
															'right' => 'Right'
													);
													foreach($arraySelect as $key=>$value){
											?>
													<option value="<?php echo $key; ?>" <?php if($key === $data[WPK_STT.'_Position']){ echo 'selected';} ?>><?php echo $value; ?></option>
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
								<input type="number" name="<?= WPK_STT.'_HorizontalGap' ?>" value="<?php echo $data[WPK_STT.'_HorizontalGap']; ?>" min="0">
							</td>
					</tr>
					<tr>
							<th>
									<span class="<?= WPK_PREFIX.'title' ?>"><?= __( 'Vertical gap', 'wp-keliosis' ); ?></span>
									<span class="<?= WPK_PREFIX.'description' ?>"><?= __( 'Choose vertical gap of the button', 'wp-keliosis' ); ?></span>
							</th>
							<td>
								<input type="number" name="<?= WPK_STT.'_VerticalGap' ?>" value="<?php echo $data[WPK_STT.'_VerticalGap']; ?>" min="0">
							</td>
					</tr>
			</table>
		</div>
     
			</div>
    </div>
      
	</div><!-- End container -->
</div>