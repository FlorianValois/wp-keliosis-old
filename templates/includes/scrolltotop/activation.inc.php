<?php

if (!defined('ABSPATH')) {
	exit;
}

?>

<div id="<?= WPK_STT.'_Activation' ?>" class="<?= WPK_PREFIX.'tabs' ?>" data-name="<?= WPK_STT.'_Activation' ?>">
					
	<div class="<?= WPK_PREFIX.'container' ?> container-fluid">
       
		<h1><?= __( 'Activation', 'wp-keliosis' ); ?></h1>
		<div class="row">
			<div class="col-8">
				
			
		<!--	Activation -->
		<div class="<?= WPK_PREFIX.'card-table' ?>">
				<table>
						<tr>
								<th>
										<span class="<?= WPK_PREFIX.'title' ?>"><?= __( 'Display button', 'wp-keliosis' ); ?></span>
										<span class="<?= WPK_PREFIX.'description' ?>"><?= __( 'Turn on to display button', 'wp-keliosis' ); ?></span>
								</th>
								<td>
										<div class="checkbox-001">
												<input type="checkbox" id="<?= WPK_STT.'_ActivationDesktop' ?>" name="<?= WPK_STT.'_ActivationDesktop' ?>" value="<?= WPK_STT.'_ActivationDesktop' ?>"<?php if(isset($data[WPK_STT.'_ActivationDesktop'])){echo'checked';} ?>>
												<label for="<?= WPK_STT.'_ActivationDesktop' ?>">
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
												<input type="checkbox" id="<?= WPK_STT.'_ActivationSmartphone' ?>" name="<?= WPK_STT.'_ActivationSmartphone' ?>" value="<?= WPK_STT.'_ActivationSmartphone' ?>"<?php if(isset($data[WPK_STT.'_ActivationSmartphone'])){echo'checked';} ?>>
												<label for="<?= WPK_STT.'_ActivationSmartphone' ?>">
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
									<input type="number" name="<?= WPK_STT.'_SmartphoneWidth' ?>" value="<?php echo $data[WPK_STT.'_SmartphoneWidth']; ?>" min="320" max="1024">
								</td>
						</tr>
				</table>
		</div>
		
		</div>
		</div>
		
	</div><!-- End container -->
</div>