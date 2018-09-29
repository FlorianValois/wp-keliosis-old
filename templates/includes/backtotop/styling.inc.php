<?php

if (!defined('ABSPATH')) {
	exit;
}

?>

<div id="<?= WPK_BTT.'_Styling' ?>" class="<?= WPK_PREFIX.'tabs' ?>" data-name="<?= WPK_BTT.'_Styling' ?>">
				
	<div class="<?= WPK_PREFIX.'card-header' ?>">
		<h1><?= __( 'Back to top > Styling', 'wp-keliosis' ); ?></h1>
	</div>
	
	<div class="<?= WPK_PREFIX.'container' ?>">
        
      <!-- Styling -->
      <div class="<?= WPK_PREFIX.'card' ?>">
            <h2><?= __( 'Styling', 'wp-keliosis' ); ?></h2>
            <div class="<?= WPK_PREFIX.'content-card' ?>">
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
</div>