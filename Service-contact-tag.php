<?php
/*
Plugin Name: Service-contact-widget
Plugin URI: http://techhub.com
description: widget with contact information of the web developer.
Version: 1.2
Author: Ivan
Author URI: http://techhub.com
text-domain: ivano-servicewidget
*/
 /**
 * Add a widget to the dashboard.
 *
 * This function is hooked into the 'wp_dashboard_setup' action below.
 */
function wporg_add_dashboard_widgets() {
    // Add function here
    wp_add_dashboard_widget( 'ivano-service-widget','service-contact-widget'  , 'service_content');
}
add_action( 'wp_dashboard_setup', 'wporg_add_dashboard_widgets' );
 function service_content(){
?>
<div sytle="display:flex;justify-content: center; ">
<div>
<h3> Ivan Turyomunsi</h3>
<h4>Your website developer at your service.</h4>
<ul>
<li><strong>Phone:</strong> <a href="tel:+256 (780) 334-757">+256 (703275523)</a></li>
<li><strong>Email:</strong> <a href="mailto:ituryomunsi@gmail.com">ituryomunsi@gmail.com</a></li>
</ul>

</div>


</div>
<?php
 }
   
  