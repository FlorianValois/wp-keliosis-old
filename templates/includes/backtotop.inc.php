<?php

if (!defined('ABSPATH')) {
	exit;
}

?>

<?= __( '', 'wp-keliosis' ); ?>

<div id="<?= WPK_BTT ?>" class="<?= WPK_PREFIX.'tabs' ?> active">
				
	<div class="<?= WPK_PREFIX.'card-header' ?>">
		<i class="fas fa-level-up-alt"></i>
		<h1><?= __( 'Back to top', 'wp-keliosis' ); ?></h1>
	</div>
	<!--	Activation -->
	<div class="<?= WPK_PREFIX.'card' ?>">
		<h2><?= __( 'Activation', 'wp-keliosis' ); ?></h2>
		<div class="<?= WPK_PREFIX.'content' ?>">
			<table>
				<tr>
					<th>
						<span class="<?= WPK_PREFIX.'title' ?>"><?= __( 'Display "back to top" button', 'wp-keliosis' ); ?></span>
						<span class="<?= WPK_PREFIX.'description' ?>"><?= __( 'Turn on to display the "back to top" button', 'wp-keliosis' ); ?></span>
					</th>
					<td>
						<div class="checkbox-001">
							<input type="checkbox" id="<?= WPK_BTT.'_Activation' ?>" name="<?= WPK_BTT.'_Activation' ?>" value="<?= WPK_BTT.'_Activation' ?>"<?php if(isset($data[WPK_BTT.'_Activation'])){echo'checked';} ?>>
							<label for="<?= WPK_BTT.'_Activation' ?>">
								<span></span>
							</label>
						</div>
					</td>
				</tr>
				<tr>
					<th>
						<span class="<?= WPK_PREFIX.'title' ?>"><?= __( 'Display on smartphone', 'wp-keliosis' ); ?></span>
					<span class="<?= WPK_PREFIX.'description' ?>"><?= __( 'Choose if the button is display on smartphone.', 'wp-keliosis' ); ?></span>
					</th>
					<td>
						<div class="checkbox-001">
							<input type="checkbox" id="<?= WPK_BTT.'_ActivationSmartphone' ?>" name="<?= WPK_BTT.'_ActivationSmartphone' ?>" value="<?= WPK_BTT.'_ActivationSmartphone' ?>"<?php if(isset($data[WPK_BTT.'_ActivationSmartphone'])){echo'checked';} ?>>
							<label for="<?= WPK_BTT.'_ActivationSmartphone' ?>">
								<span></span>
							</label>
						</div>
					</td>
				</tr>
				<tr>
					<th>
						<span class="<?= WPK_PREFIX.'title' ?>"><?= __( 'Width smartphone', 'wp-keliosis' ); ?></span>
						<span class="<?= WPK_PREFIX.'description' ?>"><?= __( 'Choose the minimum width of smartphone to display', 'wp-keliosis' ); ?><br>(min: 320 - max: 1024)</span>
					</th>
					<td>
					  <input type="number" name="<?= WPK_BTT.'_SmartphoneWidth' ?>" value="<?php echo $data[WPK_BTT.'_SmartphoneWidth']; ?>" min="320" max="1024">
					</td>
				</tr>
			</table>
		</div>
	</div>
	<!--Positiohn -->
	<div class="<?= WPK_PREFIX.'card' ?>">
		<h2><?= __( 'Position', 'wp-keliosis' ); ?></h2>
		<div class="<?= WPK_PREFIX.'content' ?>">
			<table>
				<tr>
					<th>
						<span class="<?= WPK_PREFIX.'title' ?>"><?= __( 'Position', 'wp-keliosis' ); ?></span>
						<span class="<?= WPK_PREFIX.'description' ?>"><?= __( 'Choose position of the button between left or right', 'wp-keliosis' ); ?></span>
					</th>
					<td>
					  <select name="<?= WPK_BTT.'_Position' ?>" id="<?= WPK_BTT.'_Position' ?>">
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
	</div>
  <!-- Styling -->
  <div class="<?= WPK_PREFIX.'card' ?>">
		<h2><?= __( 'Styling', 'wp-keliosis' ); ?></h2>
		<div class="<?= WPK_PREFIX.'content' ?>">
			<table>
				<tr>
					<th>
						<span class="<?= WPK_PREFIX.'title' ?>"><?= __( 'Width', 'wp-keliosis' ); ?></span>
						<span class="<?= WPK_PREFIX.'description' ?>"><?= __( 'Choose width of button', 'wp-keliosis' ); ?></span>
					</th>
					<td>
						<input type="number" name="<?= WPK_BTT.'_Width' ?>" value="<?php echo $data[WPK_BTT.'_Width']; ?>" min="0">
					</td>
				</tr>
				<tr>
					<th>
						<span class="<?= WPK_PREFIX.'title' ?>"><?= __( 'Height', 'wp-keliosis' ); ?></span>
						<span class="<?= WPK_PREFIX.'description' ?>"><?= __( 'Choose height of button', 'wp-keliosis' ); ?></span>
					</th>
					<td>
						<input type="number" name="<?= WPK_BTT.'_Height' ?>" value="<?php echo $data[WPK_BTT.'_Height']; ?>" min="0">
					</td>
				</tr>
				<tr>
					<th>
						<span class="<?= WPK_PREFIX.'title' ?>"><?= __( 'Radius', 'wp-keliosis' ); ?></span>
						<span class="<?= WPK_PREFIX.'description' ?>"><?= __( 'Choose radius of button', 'wp-keliosis' ); ?></span>
					</th>
					<td>
						<input type="number" name="<?= WPK_BTT.'_Radius' ?>" value="<?php echo $data[WPK_BTT.'_Radius']; ?>" min="0">
					</td>
				</tr>
				<tr>
					<th>
						<span class="<?= WPK_PREFIX.'title' ?>"><?= __( 'Background color', 'wp-keliosis' ); ?></span>
						<span class="<?= WPK_PREFIX.'description' ?>"><?= __( 'Choose background color of button', 'wp-keliosis' ); ?></span>
					</th>
					<td>
						<input type="text" name="<?= WPK_BTT.'_BackgroundColor' ?>" class="color-picker" data-alpha="true" value="<?php echo $data[WPK_BTT.'_BackgroundColor']; ?>">
					</td>
				</tr>
				<tr>
					<th>
						<span class="<?= WPK_PREFIX.'title' ?>"><?= __( 'Icon color', 'wp-keliosis' ); ?></span>
						<span class="<?= WPK_PREFIX.'description' ?>"><?= __( 'Choose color of icon', 'wp-keliosis' ); ?></span>
					</th>
					<td>
						<input type="text" name="<?= WPK_BTT.'_IconColor' ?>" class="color-picker" data-alpha="true" value="<?php echo $data[WPK_BTT.'_IconColor']; ?>">
					</td>
				</tr>
				<tr>
					<th>
						<span class="<?= WPK_PREFIX.'title' ?>"><?= __( 'Icon', 'wp-keliosis' ); ?></span>
						<span class="<?= WPK_PREFIX.'description' ?>"><?= __( 'Choose icon', 'wp-keliosis' ); ?> (<a href="https://fontawesome.com/icons" target="_blank" title="Font Awesome 5">Font Awesome 5</a>)</span>
					</th>
					<td>
						<input type="text" name="<?= WPK_BTT.'_Icon' ?>" value="<?php echo $data[WPK_BTT.'_Icon']; ?>" placeholder="Ex : f0d8">
					</td>
				</tr>
				<tr>
					<th>
						<span class="<?= WPK_PREFIX.'title' ?>"><?= __( 'Icon size', 'wp-keliosis' ); ?></span>
						<span class="<?= WPK_PREFIX.'description' ?>"><?= __( 'Choose size of icon (default : 13px)', 'wp-keliosis' ); ?></span>
					</th>
					<td>
						<input type="number" name="<?= WPK_BTT.'_IconSize' ?>" value="<?php echo $data[WPK_BTT.'_IconSize']; ?>" min="0" max="32">
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>