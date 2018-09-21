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
			<table cellspacing="0" cellpadding="0">
				<tr>
					<th>
						<span class="<?= WPK_PREFIX.'title' ?>"><?= __( 'Display "back to top" button', 'wp-keliosis' ); ?></span>
						<span class="<?= WPK_PREFIX.'description' ?>"><?= __( 'Turn on to display the "back to top" button', 'wp-keliosis' ); ?></span>
					</th>
					<td valign="middle">
						<div class="checkbox-001">
							<input type="checkbox" id="<?= WPK_BTT.'_Activation' ?>" name="<?= WPK_BTT.'_Activation' ?>" value="<?= WPK_BTT.'_Activation' ?>"<?php if(isset($data[WPK_BTT.'_Activation'])){echo'checked';} ?>>
							<label for="<?= WPK_BTT.'_Activation' ?>">
								<span></span>
							</label>
						</div>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<!--Positiohn -->
	<div class="<?= WPK_PREFIX.'card' ?>">
		<h2><?= __( 'Position', 'wp-keliosis' ); ?></h2>
		<div class="<?= WPK_PREFIX.'content' ?>">
			<table cellspacing="0" cellpadding="0">
				<tr>
					<th>
						<span class="<?= WPK_PREFIX.'title' ?>"><?= __( 'Button position', 'wp-keliosis' ); ?></span>
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
			<table cellspacing="0" cellpadding="0">
				<tr>
					<th>
						<span class="<?= WPK_PREFIX.'title' ?>"><?= __( 'Button width', 'wp-keliosis' ); ?></span>
						<span class="<?= WPK_PREFIX.'description' ?>"><?= __( 'Choose width of button', 'wp-keliosis' ); ?></span>
					</th>
					<td valign="middle">
						<input type="number" name="<?= WPK_BTT.'_Width' ?>" value="<?php echo $data[WPK_BTT.'_Width']; ?>" min="0">
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>