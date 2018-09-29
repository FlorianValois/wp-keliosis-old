<?php

if (!defined('ABSPATH')) {
	exit;
}

?>

<div id="<?= WPK_BTT.'_Activation' ?>" class="<?= WPK_PREFIX.'tabs' ?>" data-name="<?= WPK_BTT.'_Activation' ?>">
				
	<div class="<?= WPK_PREFIX.'card-header' ?>">
		<h1><?= __( 'Back to top', 'wp-keliosis' ); ?> <span class="caret">></span> <span class="title"><?= __( 'Activation', 'wp-keliosis' ); ?></span></h1>
	</div>
	
	<div class="<?= WPK_PREFIX.'container' ?>">
       
        <!--	Activation -->
        <div class="<?= WPK_PREFIX.'card' ?>">
            <h2><?= __( 'Activation', 'wp-keliosis' ); ?></h2>
            <div class="<?= WPK_PREFIX.'content-card' ?>">
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
		
	</div>
</div>