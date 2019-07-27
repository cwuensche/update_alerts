<?php
/**
 * Plugin Name: WordPress Update Alerts
 * Version: 0.1
 * Author: Carl Wuensche
 * Description: This is a free plugin that will send you an email when you have updates pending in your WordPress installation.
 * Author Uri: http://carlwuensche.com
*/

namespace Update_alerts;
require_once( plugin_dir_path( __FILE__ ) . 'vendor/autoload.php' );

class Update_Alerts {
	public function loader() {
		$starter = new Classes\Starter;
	}
}
$update_alerts = new Update_Alerts();
add_action( 'plugins_loaded', array($update_alerts, 'loader' ) );