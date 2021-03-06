<?php

/*
*	SITE SPECIFIC CONFIGURATIONS
*/

/*
$config['debugging']        = true;
$config['install_lock'] 	= "1";
$config['app_version'] 		= "10";
$config['license_number']   = "";
$config['allow_mod_srs'] 	= "No";
$config['waec_number'] 		= "000000";
$config['sch_gender'] 		= "female";
$config['assoc_plural'] 	= 'Alumnae';
$config['assoc_singular'] 	= 'Alumna';
$config['slogan'] 		    = "oseikrom";
$config['motto'] 			= "desire determination discipline ";
$config['country'] 			= "ghana";
$config['zip_code'] 		= "( +233 )";
$config['sch_status'] 		= "Reopened"; // Vacated
$config['sch_status_date'] 	= "as @ May 5 2014";
$config['logo90'] 			= $host . '_logo90.png';
$config['sch_name_short'] 	= 'knust-jhs';
$config['sch_name_long'] 	= "KNUST junior high school";
$config['color'] 			= "#965292";
$config['sch_mobile'] 	    = "024 . 979 . 3045";
$config['twitter'] 			= "https://twitter.com/knust-jhs";
$config['google'] 			= "https://www.google.com/+knust-jhs";
$config['facebook'] 		= "https://www.facebook.com/knust-jhs";
$config['youtube'] 			= "https://www.youtube.com/knust-jhs";
*/

$config['debugging']        = true;
$config['install_lock'] 	= "1";
$config['app_version'] 		= "10";
$config['license_number'] 	= "";
$config['allow_mod_srs'] 	= "yes";
$config['waec_number'] 		= "000000";
$config['sch_gender'] 		= "mixed";
$config['assoc_plural'] 	= 'Alumni';
$config['assoc_singular'] 	= 'Alumnus';
$config['slogan'] 			= "yensuro";
$config['motto'] 			= "lux et veritas";
$config['country'] 			= "ghana";
$config['zip_code'] 		= "( +233 )";
$config['sch_name_short'] 	= 'sekco';
$config['sch_name_long'] 	= "sekondi college";
$config['color'] 			= "#25b8ef";
$config['bg_color'] 		= "rgba(61,0,100,0)";
$config['sch_mobile'] 		= "020 . 299 . 5877";
$config['sch_status'] 		= "Reopened"; // Vacated
$config['sch_status_date'] 	= "as @ May 5 2014";
$config['twitter'] 			= "https://twitter.com/Sekcoschool";
$config['google'] 			= "https://plus.google.com/114807988094759457766/";
$config['facebook'] 		= "https://www.facebook.com/sekcoschool";
$config['youtube'] 			= "https://www.youtube.com/sekcoschool";

/*
*	GLOBAL CONFIGURATIONS
*/
$config['salt'] 			= "7+XPxLIx/O<k3u)1";
$config['css_static_file']	= $config['sch_name_short']."_main.css";
$config['bg_image'] 		= "url('".IMG_PATH.DS.$config['sch_name_short']."_bg.jpg')";
$config['img_sprite_file']  = "url('".IMG_PATH.DS.$config['sch_name_short']."_sprite.png')";
$config['isometric_grid']   = "url('".IMG_PATH.DS.$config['sch_name_short']."_isometric_grid.png')";
