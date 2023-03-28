#-- hide email address --#
function vendor_setup_wizard_styles(){
  ?>
  <style>
  	
	.wc-setup .wc-setup-content table tr:last-child{
	display:none!important;
	}
  	 
  </style>
  <?php
};

add_action( 'dokan_setup_wizard_styles', 'vendor_setup_wizard_styles', 30 );
