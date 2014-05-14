<?php 
	switch ( $host ) 
	{
	case 'fijai-shs.local': { 
	$color = "#965292"; 
	}break;
	
	case 'sekco.local': { 
	$color = "#25b8ef"; 
	$background_color = "rgba(61,0,100,0)"; 
	}break;
	
	case 'knust-jhs.local': { 
	$color = "#388f5f"; 
	}break;
	
	}
	$recent_additions_thumbnail_path = "sections/left/secondary/thumbnails";
	$background_image = "url('../img/".$sch_name_short."_bg.jpg')";
	$img_sprite_file  = "url('../img/".$sch_name_short."_sprite.png')";
	$isometric_grid   = "url('../img/".$sch_name_short."_isometric_grid.png')";
	$css_main_file_path = "css/".$sch_name_short."_main.css";
	
	$output = "
	/*
	**************** CSS RESET ***********************************
	*/
	html,body{
		padding:0; margin:0;
		font-family: serif, sans-serif, verdana; font-weight: 400;
		background-color: {$background_color};
	}
	a, a:hover, a:active {
		text-decoration: none;
		outline: 0;
		color: #555; 
	}
	/*
	**************** CSS SPRITE 5PX SPACING TO THE RIGHT**********
	*/
	.sprite { 
		background: {$img_sprite_file}; no-repeat top left;  
	}
	/*
	**************** SPACER, BORDERS, HEIGHT(up to 5em @ 0.2 precision), COLOURED BG ************
	*/
	.spacer { 
		min-width: 179px; width: 179px;
	}
	.sp-d1 {margin-bottom:0.8em;}
	.sp-d2 {min-height: 0.2em; height: 0.2em;}
	.sp-d3 {min-height: 0.3em; height: 0.3em;}
	.sp-d4 {min-height: 0.4em; height: 0.4em;}
	.sp-d5 {min-height: 0.5em; height: 0.5em;}
	.sp-1y {min-height: 1em; height: 1em;}
	.sp-1y2 {min-height: 1.2em; height: 1.2em;}
	.sp-1y4 {min-height: 1.4em; height: 1.4em;}
	.sp-1y6 {min-height: 1.6em; height: 1.6em;}
	.sp-1y8 {min-height: 1.8em; height: 1.8em;}
	.sp-2y {min-height: 2em; height: 2em;}
	.sp-2y2 {min-height: 2.2em; height: 2.2em;}
	.sp-2y4 {min-height: 2.4em; height: 2.4em;}
	.sp-2y6 {min-height: 2.6em; height: 2.6em;}
	.sp-2y8 {min-height: 2.8em; height: 2.8em;}
	.sp-3y {min-height: 3em; height: 3em;}
	.sp-3y2 {min-height: 3.2em; height: 3.2em;}
	.sp-3y4 {min-height: 3.4em; height: 3.4em;}
	.sp-3y6 {min-height: 3.6em; height: 3.6em;}
	.sp-3y8 {min-height: 3.8em; height: 3.8em;}
	.sp-4y {min-height: 4em; height: 4em;}
	.sp-4y2 {min-height: 4.2em; height: 4.2em;}
	.sp-4y4 {min-height: 4.4em; height: 4.4em;}
	.sp-4y6 {min-height: 4.6em; height: 4.6em;}
	.sp-4y8 {min-height: 4.8em; height: 4.8em;}
	.sp-5y {min-height: 5em; height: 5em;}
	
	.red-bordered {border: 1px solid red;}
	.blue-bordered {border: 1px solid blue;}
	.green-bordered {border: 1px solid green;}
	.black-bordered {border: 1px solid black;}
	.white-bordered {border: 1px solid #f4f4f4;}
	.yellow-bordered {border: 1px solid yellow;}
	
	.thick-red-bordered {border: 3px solid red;}
	.thick-blue-bordered {border: 3px solid blue;}
	.thick-green-bordered {border: 3px solid green;}
	.thick-black-bordered {border: 3px solid black;}
	.thick-white-bordered {border: 3px solid #f4f4f4;}
	.thick-yellow-bordered {border: 3px solid yellow;}
	
	.sch-coloured { 
		background: rgb(107,176,235);
		min-width: 179px; width: 179px; 
	}
	
	/*
	**************** BG, FG *****************************
	*/
	.Background { 
		position: fixed; top:0; left:0;
		padding:0; margin-top:0;
		height:100%; width:100%;
		background-image: {$background_image}; 
		background-repeat: repeat;
		z-index: -1; 
	}
	.Forground{
		min-width:780px; width:780px;
		padding:0px; margin-right:auto; margin-left:auto;
	}
	
	/*
	**************** HEADERS ****************************
	*/
	 
	.sprite.country-flag-small { 
		background-position: 0px 0px;
		display: inline-block;
		margin:0; padding:0;
		width: 10px; height: 10px;  
	} 
	/*.flag-overlay {
		float: left;
		position: absolute; left:0; top:0;
		margin:0; padding:0;
		width: 100%; height: 20px;
		background: rgba(0,0,0,0);
		z-index:1000;
	}*/
	#call-us {
		margin-top: 0;
		padding: 0em 10em 0em 0em;
		/*border: 1px solid blue;*/
		min-height: 20px; height: 20px;
		font-family: sans-serif, verdana; font-size: 8px; font-weight: 400;
		font-style: normal;
		color: white;
		text-align: right;
		text-shadow: 1px 1px #777;
	}
	
	#record-service-registration-modal,
	#record-service-login-modal {
	 	background: rgba(72,158,231,0.9); 
	 	border-radius: 0em; border: none; 
	 	color: #eee;
	 	font-family: sans-serif, verdana; 
	 	font-style: normal;
		font-weight: 900; 
	}
	#record-service-registration-modal .button,
	#record-service-login-modal .button { 
	 	border-radius: 0em; border: none; 
	 	 
	}
	
	/*.ui.dimmer {
		position: fixed!important; 
	}*/
	#record-service-login-modal {position: absolute; top:34.1%; min-width: 579px; max-width: 100%;}
	#record-service-login-modal .header {font-family: 'raleway', san-serif, verdana; font-size: 48px; font-weight: 200;}
	#record-service-registration-modal {position: absolute; top:34.1%; min-width: 600px; max-width: 100%;}
	#record-service-registration-modal .header {font-family: 'raleway', san-serif, verdana; font-size: 48px; font-weight: 200;}
	#record-service-registration-modal h1 {color: #444; font-size: 18px; font-weight: 400;padding-left: 1em;}
	#record-service-registration-modal .field .text {color: #444; font-weight: 400;}
	#record-service-registration-modal #wrapper.field {margin-bottom: 0;}
	#record-service-registration-modal .field .dropdown span {display:inline; color: #d1d1d1; font-weight: 400;}
	#record-service-registration-modal .field .checkbox {color: #777; font-weight: 400;}
	#record-service-registration-modal .field .agree {color: #777; font-weight: 400;}
	#record-service-registration-modal .field .agree i {color: red; font-weight: 400; font-style: normal; cursor: pointer;}
	#record-service-registration-modal .field .agree i:hover {text-decoration: underline;}
	
	#header {
		text-align: left;
		min-height:100px; height:100px;
		background-color: none;
		/*border: 1px solid rgba(0,0,0,0.7);*/ 
	}
		.sch-info {
			float: left;
			/*border: 1px solid red;*/
			min-height: 98px;
			min-width: 569px;
			height: 98px;
			width: 569px;
		}
			.sprite.sch-logo { 
				float: left;
				background-position: -10px 0px;
				/*border: 1px solid blue;*/
				z-index:100;
				margin-left: 1em;
				min-height: 95px; height: 95px;
				min-width: 90px; width: 90px;
			}
			.logo-overlay {
				float: left;
				position: absolute;
				z-index:101;
				margin-left: 1em;
				min-height: 95px; height: 95px;
				min-width: 90px; width: 90px;
				background: rgba(0,0,0,0);
			}
			.sch-official {
				margin-top: 22px;
				margin-left: 115px;
				/*border: 1px solid blue;*/
				height: 15px;
				width: 280px;
				font-family: 'Raleway', sans-serif, verdana; font-size: 14px; font-weight: 500;
				/*font-style: oblique;*/
				color: white;
				text-shadow: 1px 1px #777;
			}
			.sch-name {
				margin-top: 5px;
				margin-left: 115px;
				/*border: 1px solid blue;*/
				min-height: 45px;
				min-width: 500px;
				height: 45px;
				width: 500px;
				font-family: 'Raleway', sans-serif, verdana; font-size: 31px; font-weight: 900;
				font-style: normal;
				color: white;
				text-shadow: 1px 1px #777;
			}
			
		.soc-channels {
			float: right;
			margin-top: 10px;
			margin-right: 1em;
			/*border: 1px solid red;*/
			min-height: 88px; height: 88px;
			min-width: 179px; width: 179px;
		}
			.twitter {
				float: left;
				margin-top: 2em;
				margin-left: 22px;
				height: 26px;
				width: 30px;
				border: 1px solid #bbbeb7;
				border-radius: 5px;
				background: url('../img/t.png') no-repeat;
				-webkit-box-shadow: -1px 1px 1px 0px rgba(0,0,0,0);
				-moz-box-shadow: -1px 1px 1px 0px rgba(0,0,0,0);
				box-shadow: -1px 1px 1px 0px rgba(0,0,0,0);
			}
			.twitter .icon {z-index:20000; color:white; background-repeat: no-repeat; }
			.twitter:hover {
				/*background: url('../img/t_hover.png') no-repeat;*/
				-webkit-box-shadow: 0px 0px 0px 2px rgb(0,172,238);
				-moz-box-shadow: 0px 0px 0px 2px rgb(0,172,238);
				box-shadow: 0px 0px 0px 2px rgba(255,255,255,0.25);
			}
			
			.google {
				float: left;
				margin-top: 2em;
				margin-left: 20px;
				height: 26px;
				width: 30px;
				border: 1px solid #bbbeb7;
				border-radius: 5px;
				background: url('../img/g.png') no-repeat;
				-webkit-box-shadow: -1px 1px 1px 0px rgba(0,0,0,0);
				-moz-box-shadow: -1px 1px 1px 0px rgba(0,0,0,0);
				box-shadow: -1px 1px 1px 0px rgba(0,0,0,0);
			}
			.google:hover {
				/*background: url('../img/g_hover.png') no-repeat;*/
				-webkit-box-shadow: 0px 0px 0px 2px rgb(184,51,36);
				-moz-box-shadow: 0px 0px 0px 2px rgb(184,51,36);
				box-shadow: 0px 0px 0px 2px rgba(184,51,36,0.5);
			}
			
			.facebook {
				float: left;
				margin-top: 2em;
				margin-left: 20px;
				height: 26px;
				width: 30px;
				border: 1px solid #bbbeb7;
				border-radius: 5px;
				background: url('../img/f.png') no-repeat;
				-webkit-box-shadow: -1px 1px 1px 0px rgba(0,0,0,0);
				-moz-box-shadow: -1px 1px 1px 0px rgba(0,0,0,0);
				box-shadow: -1px 1px 1px 0px rgba(0,0,0,0);
			}
			.facebook:hover {
				/*background: url('../img/f_hover.png') no-repeat;*/
				-webkit-box-shadow: 0px 0px 0px 2px rgb(59,88,158);
				-moz-box-shadow: 0px 0px 0px 2px rgb(59,88,158);
				box-shadow: 0px 0px 0px 2px rgb(59,88,158);
			}
			
			.tell-friends {
				margin-top: 65px;
				text-align: center;
				font-family: sans-serif, verdana; font-size: 16px; font-weight: 400;
				font-style: normal;
				/*border: 1px solid blue;*/
				color: #dddddd;
				height: 25px;
				width: 179px;
			}
	
	/*
	*******************************************************
	****************                    *******************
	**************** MAIN CONTENT BLOCK *******************
	****************                    *******************
	*******************************************************
	*/		
	#content {
		min-height:1154px; height:1154px;
		background-color: rgb(244,244,244); 
		-moz-border-radius: 1px;     
		-webkit-border-radius: 1px;  
		border-radius: 1px; 
		-moz-background-clip: padding;     
		-webkit-background-clip: padding;  
		background-clip: padding-box;     
		border: 15px solid rgba(0,0,0,0.2);
		border-radius: 0px 0px 15px 15px;
		-moz-border-radius: 0px 0px 25px 25px;
		-webkit-border-radius: 0px 0px 25px 25px;
	}
		/*
		***************************************************
		**************** RIGHT ****************************
		***************************************************
		*/
		#right-segement {
			float: right;
			position: relative; 
			margin: 15px;
			min-height: 1124px; height: 1124px;
			min-width: 180px; width: 180px;
			/*border: 1px solid #ff0000;*/
			z-index: 2;
		}
			
			/*
			**************** SEARCH ************************
			*/
			#search.ui.icon.input input {
				padding-right: 3em !important;
				font-family: sans-serif, verdana; font-size: 13px; font-weight: 400;
			}
			#search.ui.input input {
				width: 158px;
				margin: 2em 0em 1.6em 0em;
				padding: 0.4em 0.8em;
				font-size: 1em;
				background-color: rgba(72,158,231,0);
				border: 1px solid rgba(0,110,205,1);
				outline: medium none;
				color: rgba(0, 0, 0, 0.698);
				border-radius: 1em;
				transition: background-color 0.3s ease-out 0s, box-shadow 0.2s ease 0s, border-color 0.2s ease 0s;
				-moz-box-sizing: border-box;
				text-shadow: 1px 1px 1px #ccc;
			}
			#search.ui.icon.input > .icon {
				cursor: default;
				position: absolute;
				opacity: 0.5;
				top: 0px;
				right: 0px;
				margin: 0em;
				width: 2.6em;
				height: 100%;
				padding-top: 2em; padding-right: 0.6em;
				text-align: center;
				border-radius: 0em 0.3125em 0.3125em 0em;
				-moz-box-sizing: border-box;
				transition: opacity 0.3s ease-out 0s;
			}
			#search.ui.input.focus input, #search.ui.input input:focus {
				border-color: rgba(0,110,205,1);
				color: rgba(0, 0, 0, 0.85);
				background: #92c0e7;
			}
			
			/*
			**************** RIBBON *******************
			*/
			.ui.ribbon:after {
				z-index: -1;
			}
			/*.ui.ribbon.label:after {
				position: absolute;
				content: \"\";
				top: -39%;
				left: 0%;
				border-width: 0em 1em 1em 0em;
				border-style: solid;
				border-top: 1em solid transparent;
				border-bottom: 1em solid transparent;
				border-right-color: rgb(192,131,6);
				border-left: 0em solid transparent;
				width: 0em;
				height: 2.6em;
			}*/
			/*.ui.ribbon.label:after {
				position: absolute;
				content: \"\";
				top: 0%;
				left: 0%;
				border-width: 0em 1em 1em 0em;
				border-style: solid;
				border-top: 0em solid transparent;
				border-bottom: 1em solid transparent;
				border-right-color: rgb(192,131,6);
				border-left: 0em solid transparent;
				width: 0em;
				height: 1.55em;
			}*/
			.ui.ribbon.label:after {
				position: absolute;
				content: \"\";
				top: -58%;
				left: 0%;
				border-width: 0em 1em 1em 0em;
				border-style: solid;
				border-top: 1em solid transparent;
				border-bottom: 1em solid transparent;
				border-right-color: rgba(192,131,6,0.7);
				border-left: 0em solid transparent;
				width: 0em;
				height: 0em;
			}
			.ui.ribbon.label {
				position: relative;
				margin: 0em 0em 1em 0em;
				left: -2.15rem; top: -0.1rem;
				padding: 0.3rem 3rem 0.2rem 1.8rem;
				border-radius: 0px 4px 4px 0px;
				border-color: rgba(0, 0, 0, 0.15);
				background-color: rgb(244,195,4);
				font-family: 'raleway', sans-serif, verdana; font-size: 18px; font-weight: 300;
				font-style: normal;
				color: rgb(59,88,158);
				text-shadow: 1px 1px 1px rgba(255,255,255,1);
				-webkit-box-shadow: 1px 1px 2px 0px rgba(0,0,0,0.7);
				-moz-box-shadow: 1px 1px 2px 0px rgba(0,0,0,0.7);
				box-shadow: 1px 1px 2px 0px rgba(0,0,0,0.7);
			}
			
			/*
			**************** MENU *******************
			*/
			.vertical-menu {
				min-width: 179px; width: 179px;
				text-align: left;
				font-family: sans-serif, verdana; font-size: 13px; font-weight: 400;
				color: #777;
				background: rgba(72,158,231,0.8);
			}	
				.vertical-menu .inet-service,
				.vertical-menu .record-service,
				.vertical-menu a {
					min-height: 1.7em; height: 1.7em;
					min-width: 100%; width: 100%;
					color: #dddddd;
				}
				.vertical-menu .inet-service,
				.vertical-menu .record-service { cursor: pointer;}
				.vertical-menu a:active {
					min-height: 1.7em; height: 1.7em;
					min-width: 100%; width: 100%;
					color: #fff;
				}
				.vertical-menu .inet-service,
				.vertical-menu .record-service,
				.vertical-menu a div {
					min-height: 1.9em; height: 1.9em;
					min-width: 161px; width: 161px;
					padding-top: .4em;
					padding-left: 7.5px;
					margin: 0 0 0 10px;
					/*border-left: 10px solid #489ee7;*/
					background: rgb(0,0,255);
				}
				.vertical-menu .inet-service:hover,
				.vertical-menu .record-service:hover,
				.vertical-menu a:hover div{
					color: #fff;
					background: rgb(0,109,205);
				}
				.first-divider {
					border-bottom: 1px solid rgba(255,255,255,0.8);
					-webkit-box-shadow: -1px -1px 2px 0px rgba(0,0,0,0.5);
					-moz-box-shadow: -1px -1px 2px 0px rgba(0,0,0,0.5);
					box-shadow: -1px -1px 2px 0px rgba(0,0,0,0.5);
				}
				.next-divider {
					border-bottom: 1px solid rgba(255,255,255,0.8);
					-webkit-box-shadow: -1px 0px 2px 0px rgba(0,0,0,0.5);
					-moz-box-shadow: -1px 0px 2px 0px rgba(0,0,0,0.5);
					box-shadow: -1px 0px 2px 0px rgba(0,0,0,0.5);
				}
				.last-divider {
					border-bottom: none;
					-webkit-box-shadow: -1px 0px 2px 0px rgba(0,0,0,0.5);
					-moz-box-shadow: -1px 0px 2px 0px rgba(0,0,0,0.5);
					box-shadow: -1px 0px 2px 0px rgba(0,0,0,0.5);
				}
				
				/*
				**************** RIGHT ATTACHED LABELS ********************************
				*/
				#channel-bg { background: rgb(184,216,244); border-radius:0px;}
				#channel-header-bg { color: rgb(99,108,118); font-weight: bold;}
				
				.youtube-channel {
					min-height: 100px; height: 100px;
					min-width: 176px; width: 176px;
					font-family: sans-serif, verdana; font-size: 11px; font-weight: 400;
					color: rgba(0,0,0,0.7);
					text-rendering: optimizelegibility;
					/*border: 1px solid black;*/
				}
				.academic-calendar {
					min-height: 100px; height: 100px;
					min-width: 176px; width: 176px;
					font-family: sans-serif, verdana; font-size: 11px; font-weight: 400;
					color: rgba(0,0,0,0.7);
					text-rendering: optimizelegibility;
					/*border: 1px solid black;*/
				}
				.document {
					min-height: 100px; height: 100px;
					min-width: 176px; width: 176px;
					font-family: sans-serif, verdana; font-size: 11px; font-weight: 400;
					color: rgba(0,0,0,0.7);
					text-rendering: optimizelegibility;
					/*border: 1px solid black;*/
				}
				.publication {
					min-height: 100px; height: 100px;
					min-width: 176px; width: 176px;
					font-family: sans-serif, verdana; font-size: 11px; font-weight: 400;
					color: rgba(0,0,0,0.7);
					text-rendering: optimizelegibility;
					/*border: 1px solid black;*/
				}
				.comment {
					min-height: 100px; height: 100px;
					min-width: 176px; width: 176px;
					font-family: sans-serif, verdana; font-size: 11px; font-weight: 400;
					color: rgba(0,0,0,0.7);
					text-rendering: optimizelegibility;
					/*border: 1px solid black;*/
				}
					.sch-status i,
					.youtube-channel i,
					.academic-calendar i,
					.document i,
					.publication i,
					.comment i { 
						padding: 0em; margin: 0em;
					}
					.youtube-channel i {color: red;}
					.academic-calendar i {color: purple;}
					.document i {color: orange;}
					.publication i {color: brown;}
					.comment i {color: teal;}
					
					.sch-status ul {padding: 0.2em 1.2em; margin: 0.2em;}
					.youtube-channel ul,
					.academic-calendar ul,
					.document ul,
					.publication ul,
					.comment ul { 
						padding: 0.2em 0.2em; margin: 0.2em;
						/*background: rgba(255,255,255,0.25);
						height: 66px;*/
					}	
					.sch-status ul li,
					.youtube-channel ul li,
					.academic-calendar ul li,
					.document ul li,
					.publication ul li,
					.comment ul li{
						list-style: none outside none;
					}
					.youtube-channel ul li a:hover,
					.academic-calendar ul li a:hover,
					.document ul li a:hover,
					.publication ul li a:hover,
					.comment ul li a:hover{
						text-decoration: underline;
					}
					.youtube-channel ul li a,
					.academic-calendar ul li a,
					.document ul li a,
					.publication ul li a,
					.comment ul li a{
						color: rgba(0,0,0,0.7);
					}
		
		/*
		*****************************************
		**************** LEFT *******************
		*****************************************
		*/			
		#left-segement {
			float: left; 
			position: absolute;
			margin: 15px 0 15px 15px;
			min-height: 1124px; height: 1124px;
			min-width: 552px; width: 552px;
			/*border: 1px solid black;*/
		}
			/*
			**************** PRIMARY CONTENT ****************************************************************************
			*/
			#primary-content {
				background: url('sections/left/primary/background.pn') no-repeat scroll 0% 0% / 100% auto rgb(21,150,159);
				height: 212px;
				width: 540px;
				position: relative;
				border:5px solid black;
				border-radius: 6px;
				-webkit-box-shadow: inset 0px 0px 5px 0px rgba(0,0,0,0.75);
				-moz-box-shadow: inset 0px 0px 5px 0px rgba(0,0,0,0.75);
				box-shadow:  0px 0px 5px 0px rgba(0,0,0,0.75);
			}
				#primary-content a, #primary-content a:link, #primary-content a:visited {
					color: #FFDB66;
					text-decoration: none;
				}
				.primary-content-link {
					position: absolute; left: 10px; bottom: 20px;
					width: 330px;
					text-align: center;
					margin-top: 5px;
					font: 12px/20px Verdana,Arial,Helvetica,sans-serif;
					text-shadow: 1px 1px rgba(0, 0, 0, 0.4);
					color: #FFF;
					/*border:1px solid red;*/
				}
			/*
			**************** SECONDARY CONTENT ************************
			*/
			#secondary-content {
				margin: 16px 0px;
				height: 120px;
				width: 550px;
			}
				.left-floated-column {
					float: left; left: 1px;
					position: relative; 
					text-align:left;
					width: 180px;
					height: 98%;
				}
					.left-floated-column P.title {
						width: 155px;
						display: inline-block;
						padding: 0.2em 0 0em 0; margin: 0em 0.5em;
						font-family: 'raleway', sans-serif, verdana; font-weight: 400;
						font-size: 24px;
						color: #666;
					}
					.left-floated-column span.overview  {
						width: 155px;
						height: auto;
						display: inline-block;
						padding: 0.1em 0em 0em 0em; margin: 0em 0.95em;
						font-family: sans-serif, verdana; font-size: 13px; font-weight: 400;
						/*background: rgba(0,110,205,0.02);*/
					}
					.left-floated-column span.more i  {
						margin-left: 0;
						color: #555;
					}
					.left-floated-column span.more.overview a  {
						color: #555;
					}
					.left-floated-column span.more.overview a:hover  {
						text-decoration: underline;
					}
					.left-floated-column span.overview a  {
						color: #555;
					}
				.vertical-divider {
					float: left;
					position: relative;
					width: 1px;
					height: 99%;
					/*border-right: 1px solid red;
					padding-right: 0.5px;*/
					
					background: rgba(255,255,255,1);
					background: -moz-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(119,119,119,1) 50%, rgba(255,255,255,1) 100%);
					background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(255,255,255,1)), color-stop(50%, rgba(119,119,119,1)), color-stop(100%, rgba(255,255,255,1)));
					background: -webkit-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(119,119,119,1) 50%, rgba(255,255,255,1) 100%);
					background: -o-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(119,119,119,1) 50%, rgba(255,255,255,1) 100%);
					background: -ms-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(119,119,119,1) 50%, rgba(255,255,255,1) 100%);
					background: linear-gradient(to bottom, rgba(255,255,255,1) 0%, rgba(119,119,119,1) 50%, rgba(255,255,255,1) 100%);
					filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ffffff', GradientType=0 );
				}
			/*
			**************** RECENT ADDITIONS *******************
			*/	
			#recent-additions {
				margin: 0 0 16px 0;
				text-align: left;
				height: 96px;
				width: 550px;
			}
			#recent-additions h3{
				height: 16px;
				display: inline-block;
				
				min-height: 1.6em; height: 1.6em;
					padding-top: .2em;
					padding-left: 7.5px; padding-right: 7.5px;
					margin: 0 0 0 0;
					/*border-left: 10px solid #489ee7;*/
					background: rgb(78,110,241);
				font-family: sans-serif, verdana; font-size: 12px; font-weight: 400;
				font-style: normal;
				color: rgba(255,255,255,0.9);
				border-bottom: none;
			}
			#recent-additions a { 
				float: right; padding: 0.2em 0em; margin: 0.14em 0em 0em 0em;
				font-family: sans-serif, verdana; font-size: 12px; font-weight: 400;
				color: rgba(0,0,0,0.7);
			}
			#recent-additions-content {
				height: 65px;
				width: 100%;
				padding: 0; margin: 0 0 0 -1px;
				font-family: sans-serif, verdana; font-size: 12px; font-weight: 400;
				color: rgba(0,0,0,0.7);
				/*background:#EAF4F5;*/
				border-top: 1px solid rgb(211,211,211);
				border-right: none;
				border-bottom: none;
				border-left: 1px solid rgb(211,211,211);
				
			}
				#recent-additions-content div {padding: 0; margin: 0;}
				#recent-additions-content ul li{ 
					display:block;
					padding: 0; margin: 0;
					list-style:none;  
				}
				#recent-additions-content li{ 
					height: 65px;  
				}
				#recent-additions-content .thumbnail { 
					float:left;  
					padding: 0; margin: 0em 2em 0em 0em; 
					height: 65px;
					width: auto;
					text-align: left; 
				}
				#recent-additions-content img { 
					border: none; 
					height: 65px; 
				}
				#recent-additions-content .info { 
					float:left; 
					padding: 0em 0em; margin: 0.29em 0em;
					width:435px;
					height: 55px;
					/*border: 1px solid blue;*/ 
				}
				#recent-additions-content .link a{
					position: relative;
					padding: 0em 0em; margin: 0em 0em 0.4em 0em;
					width:435px;
					height: 32px;
					text-decoration: none; 
					text-align: left;
					color: rgba(5,0,238,1); 
					/*background: rgba(234,244,245,0.2);*/
					font-weight:600;
					/*border: 1px solid green;*/
				}
				#recent-additions-content .link a:hover { text-decoration: underline; color: rgba(5,0,238,1); }
				#recent-additions-content .link-desc .attribute{
					padding: 0em 0em; margin: 0em 0em; 
					font-size:11px; 
					color:#808080; 
					/*border: 1px solid red;*/
				}
				.clear { clear: both; }
			/*
			**************** SCHOOL STATISTICS ****************
			*/	
			#isometric-grid {
				height:660px;
				width: 749px;
				margin: -23px 0 -570px 0;
				border-top: 1px solid rgb(211,211,211);
				background: {$isometric_grid};
			}
			#sch-stats {
				height:65px;
				margin-top: 2.2em;
				font-family: sans-serif, verdana; font-size: 11px; font-weight: 400;
				color: rgba(0,0,0,0.7);
			}
				#sch-stats .stu-pop {
					float: left;
					width: 168px;
					height: 63px;
					border: 1px solid rgb(211,211,211);
				}
					#sch-stats .stu-pop .icon {
						float: left;
						width: 60px;
						height: 53px;
						padding-top: 10px;
						color: white;
						background: rgb(0,110,205);
					}
					#sch-stats .stu-pop .content {
						float: left;
						width: 104px;
						height: 65px;
					}
						#sch-stats .stu-pop .content .num {
							width: 106px;
							height: 32px;
							padding-top: 8px;
							font-family: sans-serif, verdana; font-size: 28px; font-weight: 300;
							color: rgba(0,0,0,0.7);
							background: rgba(247,247,247,0);
							border-left: 1px solid rgb(211,211,211);
						}
						#sch-stats .stu-pop .content .text {
							width: 106px;
							height: 21px;
							padding-top: 2px;
							background: rgba(247,247,247,0);
							border-left: 1px solid rgb(211,211,211);
						}
						
				#sch-stats .staff-pop {
					float: left;
					margin-left: 21px;
					width: 168px;
					height: 63px;
					border: 1px solid rgb(211,211,211);
				}
					#sch-stats .staff-pop .icon {
						float: left;
						width: 60px;
						height: 53px;
						padding-top: 10px;
						color: white;
						background: rgb(0,110,205);
					}
					#sch-stats .staff-pop .content {
						float: left;
						width: 104px;
						height: 65px;
					}
						#sch-stats .staff-pop .content .num {
							width: 106px;
							height: 32px;
							padding-top: 8px;
							font-family: sans-serif, verdana; font-size: 28px; font-weight: 300;
							color: rgba(0,0,0,0.7);
							background: rgba(247,247,247,0);
							border-left: 1px solid rgb(211,211,211);
						}
						#sch-stats .staff-pop .content .text {
							width: 106px;
							height: 21px;
							padding-top: 2px;
							background: rgba(247,247,247,0);
							border-left: 1px solid rgb(211,211,211);
						}
					
				#sch-stats .total-dept {
					float: left;
					margin-left: 21px;
					width: 168px;
					height: 63px;
					border: 1px solid rgb(211,211,211);
				}
					#sch-stats .total-dept .icon {
						float: left;
						width: 60px;
						height: 53px;
						padding-top: 10px;
						color: white;
						background: rgb(0,110,205);
					}
					#sch-stats .total-dept .content {
						float: left;
						width: 104px;
						height: 65px;
					}
						#sch-stats .total-dept .content .num {
							width: 106px;
							height: 32px;
							padding-top: 8px;
							font-family: sans-serif, verdana; font-size: 28px; font-weight: 300;
							color: rgba(0,0,0,0.7);
							background: rgba(247,247,247,0);
							border-left: 1px solid rgb(211,211,211);
						}
						#sch-stats .total-dept .content .text {
							width: 106px;
							height: 21px;
							padding-top: 2px;
							border-left: 1px solid rgb(211,211,211);
							background: rgba(247,247,247,0);
						}
						
				#sch-stats .sch-status {
					float: left;
					margin-left: 1px;
					width: 176px;
					height: 63px;
					border: 1px solid rgb(211,211,211);
				}
					#sch-stats .sch-status .icon {
						float: left;
						width: 60px;
						height: 53px;
						padding-top: 10px;
						color: white;
						background: rgb(0,110,205);
					}
					#sch-stats .sch-status .content {
						float: left;
						width: 104px;
						height: 65px;
					}
						#sch-stats .sch-status .content .status {
							width: 114px;
							height: 18px;
							padding-top: 2px;
							font-family: sans-serif, verdana; font-size: 18px; font-weight: 300;
							color: rgba(0,0,200,1);
							background: rgba(247,247,247,0);
							border-left: 1px solid rgb(211,211,211);
						}
						#sch-stats .sch-status .content .date {
							width: 114px;
							height: 15px;
							padding-top: 5px;
							font-family: sans-serif, verdana; font-size: 11px; font-weight: 300;
							color: rgb(0,0,0);
							background: rgba(247,247,247,0);
							border-left: 1px solid rgb(211,211,211);
						}
						#sch-stats .sch-status .content .text {
							width: 114px;
							height: 21px;
							padding-top: 2px;
							border-left: 1px solid rgb(211,211,211);
							background: rgba(247,247,247,0);
						}		
						
			/*
			**************** FLUID GRID ******************
			*/			
			#fluid-grid {
				width:100%;
				height: 540px;
				margin: 25px 0 0 0;
				padding: 0.5px 0 0 0;
				background: rgba(72,158,231,0.3); 
				border-top: 2px solid rgb(110,207,245);
				border-right: 1px solid rgb(241,241,241);
				border-bottom: 1px solid rgb(241,241,241);
				border-left: 1px solid rgb(241,241,241);
				border-radius: 2px 2px 0px 0px;
				-moz-border-radius: 0px 10px 0px 0px;
				-webkit-border-radius: 0px 10px 0px 0px;
			}
				#fluid-grid-noise {
					width:100%;
					height: 545px;
					margin: 25px 0 0 0;
					background: url('css/whitenoise-361x370.png');
				}
			
					#fluid-grid li {
						float: left;
						height: 156px;
						line-height: 22px;
					}
					#fluid-grid ul li {
						display: block;
						width: 255px;
						float: left;
						margin: 0 0 20px 0;
						padding:0 5px 0 0;
						list-style: none outside none;
					}
					#fluid-grid a {
						color: rgb(0,110,205);
					}
					#fluid-grid i {
						/*color: blue;*/
					}
					#fluid-grid a i {
						height: 62px;
						width: 62px;
						margin: 0 0 0 26px;
						background: rgba(72,158,231,0.3);
						border: 2px solid rgba(25,124,210,0.1);
						float: left;
						opacity: 0.9;
						transition-property: opacity;
						transition-duration: 0.3s;
						border-radius: 31px;
						-moz-border-radius: 10px;
						-webkit-border-radius: 10px;
					}
					#fluid-grid ul li#history a i { padding-top: 13px; }
					#fluid-grid  ul li#counselling a i { padding: 13px 19px; }
					#fluid-grid ul li#academics a i { padding-top: 13px; }
					#fluid-grid ul li#admissions a i { padding-top: 13px; }
					#fluid-grid ul li#sports a i { padding-top: 13px; }
					#fluid-grid ul li#pta a i { padding-top: 13px; }
					
					#fluid-grid ul li#history, 
					#fluid-grid ul li#counselling,
					#fluid-grid ul li#academics,
					#fluid-grid ul li#admissions {
						margin-bottom: 20px;
					}
					
					#fluid-grid ul li#history, 
					#fluid-grid ul li#academics,
					#fluid-grid ul li#sports {
						margin-right: 25px;
						margin-left: -40px;
					}
					
					#fluid-grid a h3 {
						font-size: 18px;
						font-weight: bold;
						color: #F14E32;
						line-height: 33px;
						margin: 0 0 0 96px;
						text-align: left;
						text-rendering: optimizelegibility;
						padding: 0;
						border: 0px none;
					}
					
					#fluid-grid a p {
						font-size: 13px;
						line-height: 17.6px;
						text-align: left;
						margin: 0px 0px 11px 96px;
						padding: 0px;
						border: 0px none;
					}
					
	#footer {
		min-width:808px; width:808px;
		min-height:44px; height:44px;
		margin-right:auto; margin-left:auto;
		padding-top: 30px;
		background-color: none;
		font-size: 14px; color: #222288;
		text-shadow: 1px 1px 1px #ddd;
		/*border: 1px solid rgba(0,0,0,0.7);*/ 
	}
		#footer a { color: #222; text-shadow: none;}
		#footer a:hover { text-decoration: underline;}
		
"; 
	$this_file  = __FILE__;
	$last_css_modify_time = filemtime($this_file);
	
	if ( !isset ($modified_css) )
	{
		ob_start();
		echo $output;	
		$css_content = ob_get_contents();
		ob_end_clean();
		$cwd = getcwd();
		$css_file = $cwd."/". $css_main_file_path;
		//@chmod($css_file,0755);
	   	$writable_file = fopen($css_file, "w");
	   	$data_size = strlen($css_content);
	   	fputs($writable_file,$css_content, $data_size);
	   	fclose($writable_file);
   	} 
   	elseif ( isset ($modified_css) && $modified_css < $last_css_modify_time ) 
   	{
   		unset($_SESSION["modified_css"]);
   	}
?>

