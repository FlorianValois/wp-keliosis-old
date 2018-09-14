<?php

if (!defined('ABSPATH')) {
	exit;
}

if ( is_admin() ) {
	require_once WPK_PLUGIN_DIR . '/admin/admin.php';
}else{
	require_once WPK_PLUGIN_DIR . '/public/public.php';
}

require_once WPK_PLUGIN_DIR . '/templates/wpk_dashboard.php';