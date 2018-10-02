<?php

if (!defined('ABSPATH')) {
	exit;
}

?>

<div id="<?= WPK_STT.'_Styling' ?>" class="<?= WPK_PREFIX.'tabs' ?>" data-name="<?= WPK_STT.'_Styling' ?>">
				
	<div class="<?= WPK_PREFIX.'card-header' ?>">
		<h1><?= __( 'Scroll to top', 'wp-keliosis' ); ?> <span class="caret">></span> <span class="title"><?= __( 'Styling', 'wp-keliosis' ); ?></span></h1>
	</div>
	
	<div class="<?= WPK_PREFIX.'container' ?>">
        
		<!-- Styling -->
		<div class="<?= WPK_PREFIX.'card-table' ?>">
			<table>
					<tr>
							<th>
									<span class="<?= WPK_PREFIX.'title' ?>"><?= __( 'Width', 'wp-keliosis' ); ?></span>
									<span class="<?= WPK_PREFIX.'description' ?>"><?= __( 'Choose width of button', 'wp-keliosis' ); ?></span>
							</th>
							<td>
									<input type="number" name="<?= WPK_STT.'_Width' ?>" value="<?php echo $data[WPK_STT.'_Width']; ?>" min="0">
							</td>
					</tr>
					<tr>
							<th>
									<span class="<?= WPK_PREFIX.'title' ?>"><?= __( 'Height', 'wp-keliosis' ); ?></span>
									<span class="<?= WPK_PREFIX.'description' ?>"><?= __( 'Choose height of button', 'wp-keliosis' ); ?></span>
							</th>
							<td>
									<input type="number" name="<?= WPK_STT.'_Height' ?>" value="<?php echo $data[WPK_STT.'_Height']; ?>" min="0">
							</td>
					</tr>
					<tr>
							<th>
									<span class="<?= WPK_PREFIX.'title' ?>"><?= __( 'Radius', 'wp-keliosis' ); ?></span>
									<span class="<?= WPK_PREFIX.'description' ?>"><?= __( 'Choose radius of button', 'wp-keliosis' ); ?></span>
							</th>
							<td>
									<input type="number" name="<?= WPK_STT.'_Radius' ?>" value="<?php echo $data[WPK_STT.'_Radius']; ?>" min="0">
							</td>
					</tr>
					<tr>
							<th>
									<span class="<?= WPK_PREFIX.'title' ?>"><?= __( 'Background color', 'wp-keliosis' ); ?></span>
									<span class="<?= WPK_PREFIX.'description' ?>"><?= __( 'Choose background color of button', 'wp-keliosis' ); ?></span>
							</th>
							<td>
									<input type="text" name="<?= WPK_STT.'_BackgroundColor' ?>" class="color-picker" data-alpha="true" value="<?php echo $data[WPK_STT.'_BackgroundColor']; ?>">
							</td>
					</tr>
					<tr>
							<th>
									<span class="<?= WPK_PREFIX.'title' ?>"><?= __( 'Icon color', 'wp-keliosis' ); ?></span>
									<span class="<?= WPK_PREFIX.'description' ?>"><?= __( 'Choose color of icon', 'wp-keliosis' ); ?></span>
							</th>
							<td>
									<input type="text" name="<?= WPK_STT.'_IconColor' ?>" class="color-picker" data-alpha="true" value="<?php echo $data[WPK_STT.'_IconColor']; ?>">
							</td>
					</tr>
					<tr>
							<th>
									<span class="<?= WPK_PREFIX.'title' ?>"><?= __( 'Icon', 'wp-keliosis' ); ?></span>
									<span class="<?= WPK_PREFIX.'description' ?>"><?= __( 'Choose icon', 'wp-keliosis' ); ?> (<a href="https://fontawesome.com/icons" target="_blank" title="Font Awesome 5 Free">Font Awesome 5 Free</a>)</span>
							</th>
							<td>
									<input type="text" name="<?= WPK_STT.'_Icon' ?>" value="<?php echo $data[WPK_STT.'_Icon']; ?>" placeholder="Ex : f0d8">
							</td>
					</tr>
					<tr>
							<th>
									<span class="<?= WPK_PREFIX.'title' ?>"><?= __( 'Icon size', 'wp-keliosis' ); ?></span>
									<span class="<?= WPK_PREFIX.'description' ?>"><?= __( 'Choose size of icon (default : 13px)', 'wp-keliosis' ); ?></span>
							</th>
							<td>
									<input type="number" name="<?= WPK_STT.'_IconSize' ?>" value="<?php echo $data[WPK_STT.'_IconSize']; ?>" min="0" max="32">
							</td>
					</tr>
			</table>
		</div>
		
	</div><!-- End container -->
</div>