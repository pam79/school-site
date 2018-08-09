<?php
$output = " 
/*
**************** CSS RESET ***********************************
*/
/**
.zoom {
   transform-origin: 0% 0%;
   transform: scale(1.2);
   -moz-transform: scale(1.2, 1.2);
   zoom: 1.2;
   zoom: 120%;
   margin-right:16.61%;
}
**/
html,body{
  padding:0; margin:0;
  font-family: serif, sans-serif, verdana; font-weight: 400;
  background-color: {$config['bg_color']};
}
a, a:hover, a:active {
  text-decoration: none;
  outline: 0;
  color: #555; 
}
/*
**************** CSS SPRITE 5PX SPACING TO THE RIGHT*****************************************
*/
.sprite { 
  background: {$config['img_sprite_file']} no-repeat top left;  
}
/*
**************** SPACER, BORDERS, HEIGHT(up to 5em @ 0.2 precision), COLOURED BG ************
*/
.spacer { 
  min-width: 179px; width: 179px;
}
.sp-d1 {min-height: 0.1em; height: 0.1em;}
.sp-d2 {min-height: 0.2em; height: 0.2em;}
.sp-d3 {min-height: 0.3em; height: 0.3em;}
.sp-d4 {min-height: 0.4em; height: 0.4em;}
.sp-d5 {min-height: 0.5em; height: 0.5em;}
.sp-d6 {min-height: 0.6em; height: 0.6em;}
.sp-d7 {min-height: 0.7em; height: 0.7em;}
.sp-d8 {min-height: 0.8em; height: 0.8em;}
.sp-d9 {min-height: 0.9em; height: 0.9em;}
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
.white-bordered {border: 1px solid #fefefe;}
.yellow-bordered {border: 1px solid yellow;}

.thick-red-bordered {border: 3px solid red;}
.thick-blue-bordered {border: 3px solid blue;}
.thick-green-bordered {border: 3px solid green;}
.thick-black-bordered {border: 3px solid black;}
.thick-white-bordered {border: 3px solid #fefefe;}
.thick-yellow-bordered {border: 3px solid yellow;}
	
/*
**************** BG, FG *****************************
*/
.Background { 
  position: fixed; top:0; left:0;
  padding:0; margin-top:0;
  height:100%; width:100%;
  background-image: {$config['bg_image']}; 
  background-repeat: repeat;
  z-index: -1; 
}
.Forground{
  min-width:780px; width:940px;
  /*padding:0px; margin-right:auto; margin-left:auto;*/
}
	
/*
**************** HEADERS ****************************
*/

.sprite.country-flag-small { 
  background-position: 0 0;
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
  padding: 0 10em 0 0;
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
  border-radius: 0; border: none; 
  color: #eee;
  font-family: sans-serif, verdana; 
  font-style: normal;
  font-weight: 900; 
}
#record-service-registration-modal .button,
#record-service-login-modal .button { 
  border-radius: 0; border: none; 

}
	
/*.ui.dimmer {
  position: fixed!important; 
}*/
#record-service-login-modal {position: absolute; top:34.1%; min-width: 579px; max-width: 100%;}
#record-service-login-modal .header {font-family: 'raleway', san-serif, verdana; font-size: 48px; font-weight: 200;}
#record-service-registration-modal {position: absolute; top:34.1%; min-width: 600px; max-width: 100%;}
#record-service-registration-modal .header {font-family: 'raleway', san-serif, verdana; font-size: 48px; font-weight: 200;}
#record-service-registration-modal h1 {color: #444; font-size: 18px; font-weight: 400;padding-left: 1em;}
#record-service-registration-modal h1 i {color: teal; font-size: 16px; font-style:normal;}
#record-service-registration-modal .field .text {color: #444; font-weight: 400;}
#record-service-registration-modal #wrapper.field {margin-bottom: 0;}
#record-service-registration-modal .field .dropdown span {display:inline; color: #d1d1d1; font-weight: 400;}
#record-service-registration-modal .field .checkbox {color: #777; font-weight: 400;}
#record-service-registration-modal .field .agree {color: #777; font-weight: 400;}
#record-service-registration-modal .field .agree i {color: blue; font-weight: 400; font-style: normal; text-decoration: underline; cursor: pointer;}
#record-service-registration-modal .field .agree i:hover {color: rgba(0,0,255,0.5);}

#header {
  text-align: left;
  min-height:100px; height:100px;
  /*background-color: none;*/
  border: 1px solid rgba(0,0,0,0.7);
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
    background: url('".IMG_PATH.DS."t.png') no-repeat;
    -webkit-box-shadow: -1px 1px 1px 0px rgba(0,0,0,0);
    -moz-box-shadow: -1px 1px 1px 0px rgba(0,0,0,0);
    box-shadow: -1px 1px 1px 0px rgba(0,0,0,0);
  }
  .twitter .icon {z-index:20000; color:white; background-repeat: no-repeat; }
  .twitter:hover {
    /*background: url('".IMG_PATH.DS."t_hover.png') no-repeat;*/
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
    background: url('".IMG_PATH.DS."g.png') no-repeat;
    -webkit-box-shadow: -1px 1px 1px 0px rgba(0,0,0,0);
    -moz-box-shadow: -1px 1px 1px 0px rgba(0,0,0,0);
    box-shadow: -1px 1px 1px 0px rgba(0,0,0,0);
  }
  .google:hover {
    /*background: url('".IMG_PATH.DS."g_hover.png') no-repeat;*/
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
    background: url('".IMG_PATH.DS."f.png') no-repeat;
    -webkit-box-shadow: -1px 1px 1px 0px rgba(0,0,0,0);
    -moz-box-shadow: -1px 1px 1px 0px rgba(0,0,0,0);
    box-shadow: -1px 1px 1px 0px rgba(0,0,0,0);
  }
  .facebook:hover {
    /*background: url('".IMG_PATH.DS."f_hover.png') no-repeat;*/
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
  min-height:1590px; height:1590px;
  background-color: #ffffff; 
  -moz-background-clip: padding;     
  -webkit-background-clip: padding;  
  background-clip: padding-box;     
  border: 25px solid rgba(0,0,0,0.2);
}
/*
***************************************************
**************** RIGHT ****************************
***************************************************
*/
#right-menu-segement {
  float: right; position: relative;
  margin: 15px 15px 0 0;
  min-height: 461px; height: 555px;
  min-width: 180px; width: 220px;
  z-index: 2;
  border: 1px solid white;
}
			
/*
**************** SEARCH ************************
*/
.search-bg { 
  background: rgb(107,176,235);
  min-width: 163px; width: 210px;
  margin-left: 10px;
}

#search.ui.icon.input input {
  padding-right: 3em !important;
  font-family: sans-serif, verdana; font-size: 13px; font-weight: 400;
}
#search.ui.input input {
  width: 182px;
  margin: 2em 0em 1.6em 0em;
  padding: 0.4em 0.8em;
  font-size: 1em;
  background-color: rgba(72,158,231,0);
  border: 1px solid rgba(0,110,205,1);
  outline: medium none;
  color: rgba(0, 0, 0, 0.698);
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
  padding-top: 2em; padding-right: 1em;
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
input::-webkit-input-placeholder{
    color: rgba(0, 0, 0, 0.5);
    text-shadow: 1px 0px 1px #ccccdd;
}
input:-moz-placeholder {
    color: rgba(0, 0, 0, 0.85);
    text-shadow: 1px 1px 1px #ccc;
}	
input::-moz-placeholder {
    color: rgba(0, 0, 0, 0.85);
    text-shadow: 1px 1px 1px #ccc;
}
input:-ms-input-placeholder {  
    color: rgba(0, 0, 0, 0.85);
    text-shadow: 1px 1px 1px #ccc;  
} 
/*
**************** RIBBON *******************
*/
.ribbon-bg { 
  background: rgb(107,176,235);
  min-width: 163px; width: 210px;
  margin-left: 10px;
}
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
  top: -62%;
  left: 0%;
  border-width: 0em 1em 1em 0em;
  border-style: solid;
  border-top: 1em solid transparent;
  border-bottom: 0em solid transparent;
  border-right-color: rgb(56,184,0);
  border-left: 0em solid transparent;
  width: 0em;
  height: 0em;
}
.ui.ribbon.label {
  position: relative;
  margin: 0em 0em 1em -0.4em;
  left: -2.15rem; top: -0.1rem;
  padding: 0.3rem 3rem 0.2rem 2.4rem;
  border-radius: 2px 5px 5px 0px;
  border-color: rgba(0, 0, 0, 0.15);
  background-color: rgb(56,184,0);
  font-family: 'raleway', sans-serif, verdana; font-size: 22px; font-weight: 500;
  font-style: normal;
  color: rgb(255,255,255);
  -webkit-box-shadow: 1px 1px 2px 0px rgba(0,0,0,0.7);
  -moz-box-shadow: 1px 1px 2px 0px rgba(0,0,0,0.7);
  box-shadow: 1px 1px 2px 0px rgba(0,0,0,0.7);
}
			
/*
**************** MENU *******************
*/
.vertical-menu {
  min-height: 402px; height: 427px;
   min-width: 163px; width: 210px;
  margin-left: 10px;
  padding-top: 4px;
  text-align: left;
  font-family: sans-serif, verdana; font-size: 16px; font-weight: 400;
  color: #777;
  background: rgba(72,158,231,0.8);
}	
  .vertical-menu .record-service,
  .vertical-menu .elearning-service,
  .vertical-menu .inet-service,
  .vertical-menu .management-service,
  .vertical-menu a {min-height: 1.7em; height: 1.7em; min-width: 100%; width: 100%; color: #dddddd;}

  .vertical-menu .record-service,
  .vertical-menu .elearning-service,
  .vertical-menu .inet-service,
  .vertical-menu .management-service { cursor: pointer;}

  .vertical-menu a:active {
    min-height: 1.7em; height: 1.7em;
    min-width: 100%; width: 100%;
    color: #fff;
  }

  .vertical-menu .record-service,
  .vertical-menu .elearning-service,
  .vertical-menu .inet-service,
  .vertical-menu .management-service,
  .vertical-menu a div {
    min-height: 1.885em; height: 1.885em;
    min-width: 139px; width: 179.5px;
    padding-top: .4em;
    padding-left: 15px;
    margin: 0 0 0 16px;
    /*border-left: 10px solid #489ee7;*/
    color: #eee;
    background: rgb(0,109,205);
  }

  .vertical-menu .record-service:hover,
  .vertical-menu .elearning-service:hover,
  .vertical-menu .inet-service:hover,
  .vertical-menu .management-service:hover,
  .vertical-menu a:hover div{
    color: rgb(0,88,166);
    background: rgba(0,0,0,0);
    -webkit-box-shadow: -1px -1px 2px 0px rgba(0,0,0,0);
    -moz-box-shadow: -1px -1px 2px 0px rgba(0,0,0,0);
    box-shadow: -1px -1px 2px 0px rgba(0,0,0,0);
  }

  .vertical-menu .label i { 
    position: absolute; 
    left:150px; 
    padding-top:0.2em;
    color: rgba(255,255,255,0.4);
  }

  .first-divider {
    border-bottom: 1px solid rgba(255,255,255,0.5);
    -webkit-box-shadow: -1px -1px 2px 0px rgba(0,0,0,0.5);
    -moz-box-shadow: -1px -1px 2px 0px rgba(0,0,0,0.5);
    box-shadow: -1px -1px 2px 0px rgba(0,0,0,0.5);
  }
  .next-divider {
    border-bottom: 1px solid rgba(255,255,255,0.5);
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
*****************************************
**************** LEFT *******************
*****************************************
*/			
#left-primary-segement {
  float: left; position: relative;
  margin: 15px 0 0 15px;
  min-height: 461px; height: 556px;
  min-width: 560px; width: 680px;
  border-bottom: none;
}
/*
**************** PRIMARY CONTENT ************************************************************
*/
#primary-content {
  background: url() no-repeat scroll 0% 0% / 100% auto rgb(90,98,98);
  min-height: 212px; height: 250px;
  min-width: 550px; max-width: 670px;
  position: relative;
  border:5px solid rgb(0,0,0);
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
  margin: 20px 0 0 0;
  height: 135px;
  width: 99.8%;
  border: 1px solid rgb(229,229,229);
  border-radius: 5px;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  -o-border-radius: 5px;
  -ms-border-radius: 5px;
}
  .left-floated-column {
    float: left; left: 0;
    position: relative; 
    text-align:left;
    width: 222px;
    height: 98%;
    border: 1px solid none;
  }
    .left-floated-column P.title {
      width: 195px;
      display: inline-block;
      margin: -1px 0em 0em -1px;
      padding: 0.1em 0em 0em 1.5em;
      font-family: sans-serif, verdana; font-size: 22px; font-weight: bold; 
      text-transform: uppercase;
      color: rgb(44,62,80);
      line-height: 33px;
      text-rendering: optimizelegibility;
      border-bottom: 1px solid rgb(229,229,229);
      background: rgb(234,241,241);
    }
    .left-floated-column span.overview  {
      width: 140px;
      height: auto;
      display: inline-block;
      margin: 0em 0em 0em 2px;
      padding: 0.48em 0em 0.2em 2em;
      font-family: sans-serif, verdana; font-size: 15px; font-weight: 400;
    }
    .left-floated-column span.more i  {
      margin-left: 0;
      color: rgb(44,62,80);
    }
    .left-floated-column span.more.overview a  {
      color: rgb(44,62,80);
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
    height: 100%;
    margin: 0em 0em 0em 0em;
    background: rgba(229,229,229,1);
  }
				
/*
**************** RECENT ADDITIONS *******************
*/	

#recent-additions-iframe {
  border: none;
  padding-left: 14px;
}
#recent-additions {
  margin: 16px 0 0 0;
  text-align: left;
  height: 121px;
  border: 1px solid rgba(229,229,229,1);
  border-radius: 5px;
  -mos-border-radius: 5px;
  -webkit-border-radius: 5px;
}
#recent-additions .header { 
  background: rgb(234,241,241);
  min-height: 28px; height: 28px;
}
#recent-additions h3{
  display: inline-block;
  padding-top: .2em;
  padding-left: 15px;
  margin: 0.14em 0em 0em 0em;
  color: rgba(44,62,80,1);
  font-family: sans-serif, verdana; font-size: 15px; font-weight: 400; font-style: normal;
}
#recent-additions a { 
  float: right; 
  padding-top: .2em;
  padding-right: 15px;
  margin: 0.14em 0em 0em 0em;
  color: rgba(44,62,80,1);
  font-family: sans-serif, verdana; font-size: 14px; font-weight: 400; font-style: normal;
}
			
/*
**************** SCHOOL STATISTICS ****************
*/	
#isometric-grid {
  float: left;
  height:156px;
  width: 907px;
  margin: 16px 15px 0 15px;
  /*border-top: 1px solid #ffffff;*/
  background: {$config['isometric_grid']};
  border: 1px solid rgb(229,229,229);
  border-radius: 5px;
  -mos-border-radius: 5px;
  -webkit-border-radius: 5px;
}
#sch-stats {
  height:65px;
  margin-top: 1.5em;
  font-family: sans-serif, verdana; font-size: 11px; font-weight: 400;
  color: rgba(0,0,0,0.7);
}
#sch-stats .stu-pop {
  float: left;
  margin: 0 15px 0 15px;
  padding-top: 18px;
  width: 206px;
  height: 102px;
  border: 1px solid rgb(211,211,211);
  color: rgb(255,255,255);
  background: rgb(213,41,120);
}
    #sch-stats .stu-pop .icon {
      float: left;
      width: 60px;
      height: 53px;
      padding-top: 10px;
    }
    #sch-stats .stu-pop .content {
      float: left;
      width: 104px;
      height: 65px;
      margin-left: 1.5em;
      padding-top: 10px;
    }
    #sch-stats .stu-pop .content .num {
      width: 106px;
      height: 40px;
      padding-top: 0px;
      font-family: sans-serif, verdana; font-size: 38px; font-weight: 400;
      border-left: 1px solid rgba(255,255,255,0.5);
    }
    #sch-stats .stu-pop .content .text {
      width: 106px;
      height: 21px;
      padding-top: 2px;
      border-left: 1px solid rgba(255,255,255,0.5);
      font-size: 13px;
    }

#sch-stats .staff-pop {
  float: left;
  margin-right: 15px;
  padding-top: 18px;
  width: 206px;
  height: 102px;
  border: 1px solid rgb(211,211,211);
  color: rgb(255,255,255);
  background: rgb(31,125,230);
}
    #sch-stats .staff-pop .icon {
      float: left;
      width: 60px;
      height: 53px;
      padding-top: 10px;
    }
    #sch-stats .staff-pop .content {
      float: left;
      width: 104px;
      height: 65px;
      margin-left: 1em;
      padding-top: 10px;
    }
    #sch-stats .staff-pop .content .num {
      width: 106px;
      height: 40px;
      padding-top: 0px;
      font-family: sans-serif, verdana; font-size: 38px; font-weight: 400;
      border-left: 1px solid rgba(255,255,255,0.5);
    }
    #sch-stats .staff-pop .content .text {
      width: 106px;
      height: 21px;
      padding-top: 2px;
      border-left: 1px solid rgba(255,255,255,0.5);
      font-size: 13px;
    }

#sch-stats .total-dept {
  float: left;
  margin-right: 15px;
  padding-top: 18px;
  width: 206px;
  height: 102px;
  border: 1px solid rgb(211,211,211);
  color: rgb(255,255,255);
  background: rgb(56,184,0);
}
    #sch-stats .total-dept .icon {
      float: left;
      width: 60px;
      height: 53px;
      padding-top: 10px;
    }
    #sch-stats .total-dept .content {
      float: left;
      width: 104px;
      height: 65px;
      margin-left: 1.5em;
      padding-top: 10px;
    }
    #sch-stats .total-dept .content .num {
      width: 106px;
      height: 40px;
      padding-top: 0;
      font-family: sans-serif, verdana; font-size: 38px; font-weight: 400;
      border-left: 1px solid rgba(255,255,255,0.5);
    }
    #sch-stats .total-dept .content .text {
      width: 106px;
      height: 21px;
      padding-top: 2px;
      border-left: 1px solid rgba(255,255,255,0.5);
      font-size: 13px;
    }

#sch-stats .sch-status {
  float: left;
  margin-left: 0;
  padding-top: 18px;
  width: 206px;
  height: 102px;
  border: 1px solid rgb(211,211,211);
  color: rgb(255,255,255);
  background: rgb(154,80,189);
}
    #sch-stats .sch-status .icon {
      float: left;
      width: 60px;
      height: 53px;
      padding-top: 10px;
    }
    #sch-stats .sch-status .content {
      float: left;
      width: 104px;
      height: 65px;
      margin-left: 1.5em;
      padding-top: 10px;
    }
    #sch-stats .sch-status .content .status {
      width: 114px;
      height: 18px;
      padding-top: 2px;
      font-family: sans-serif, verdana; font-size: 22px; font-weight: 400;
      border-left: 1px solid rgba(255,255,255,0.5);
    }
    #sch-stats .sch-status .content .date {
      width: 114px;
      height: 15px;
      padding-top: 5px;
      font-family: sans-serif, verdana; font-size: 13px; font-weight: 300;
      border-left: 1px solid rgba(255,255,255,0.5);
    }
    #sch-stats .sch-status .content .text {
      width: 114px;
      height: 21px;
      padding-top: 2px;
      border-left: 1px solid rgba(255,255,255,0.5);
       font-size: 13px;
    }	
#sch-stats .sch-status .icon i,
#sch-stats .stu-pop .icon i,
#sch-stats .staff-pop .icon i,
#sch-stats .total-dept .icon i { 
  padding: 0 0.2em 0 0.2em; margin: 0.5em;
  font-size:3em;
}
#sch-stats .sch-status ul {padding: 0.2em 1.2em; margin: 0.2em;}
#sch-stats .sch-status ul li {
  list-style: none outside none;
}
						
/*
**************** FLUID GRID ******************
*/			
#fluid-grid {
  float: left;  
  width: 907px;
  height: 728px;
  margin: 16px 15px 0 15px; 
  border: 1px solid rgb(229,229,229);
  background: rgb(234,241,241);
  border-radius: 5px;
  box-sizing: border-box;
}
    #fluid-grid ul li {
      float: left; 
      display: block; 
      /*width: 200px; 
      height: 219px;*/ 
      width: 242px; 
      height: 300px;
      line-height: 22px;
      list-style: none outside none;
      padding: 1.15em;
      border: 1px solid rgb(255,255,255);
      background: rgb(255,255,255);
    }
    #fluid-grid ul li:hover{ 
      border: 1px dashed rgb(213,41,120);
    }
    
    #fluid-grid ul li#history, 
    #fluid-grid ul li#counselling,
    #fluid-grid ul li#academics,
    #fluid-grid ul li#admissions { 
      margin: 0 2.5em 1em -1.5em;
    }
    #fluid-grid ul li#sports,
    #fluid-grid ul li#pta { 
      margin: 0 0 1em -1.5em;
    }

    #fluid-grid ul li#history i {height: 60px; width: 78px;}
    #fluid-grid ul li#history a i { padding-top: 18px; font-size: 2.5em;}
    #fluid-grid  ul li#counselling a i { padding: 18px 26px; font-size: 2.5em;}
    #fluid-grid ul li#academics a i { padding-top: 18px; font-size: 2.5em;}
    #fluid-grid ul li#admissions a i { padding-top: 18px; font-size: 2.5em;}
    #fluid-grid ul li#sports a i { padding-top: 18px; font-size: 2.5em;}
    #fluid-grid ul li#pta a i { padding-top: 18px; font-size: 2.5em;}

    #fluid-grid a {
      color: rgb(31,125,230);
    }
    
    #fluid-grid i {
      /*color: blue;*/
    }
    
    #fluid-grid a i {
      height: 82px;
      width: 82px;
      background: rgba(255,255,255,0.2);
      border: 2px solid rgb(31,125,230);
      opacity: 0.9;
      transition-property: opacity;
      transition-duration: 0.3s;
      border-radius: 41px;
      -moz-border-radius: 41px;
      -webkit-border-radius: 41px;
    }
    
    #fluid-grid a h2 {
      font-size: 30px;
      font-weight: bold;
      color: rgb(213,41,120);
      line-height: 46px;
      text-align: middle;
      text-rendering: optimizelegibility;
      margin: 0;
      padding: 0;      
    }
    
    #fluid-grid a p {
      font-family: sans-serif, verdana; font-size: 20px; 
      font-weight: 400;
      line-height: 21px;
      text-align: center;
      margin: 0;
      padding: 0;
      height: 172px;
      
    }
    
   /* #fluid-grid .square  {
      width: 30px; height: 30px;
      border: 1px solid rgb(236,240,241);
      background: rgb(236,240,241) !important;
      border-radius: 15px;
    }
    
    #fluid-grid .right  {
      position: relative; top: 240px; right: -100px;
    }
    
    #fluid-grid .left  {
      position: relative; top: 210px; left: -138px;
    }*/
    
/*
**************** BOTTOM ATTACHED LABELS ********************************
*/
#line-devider.h-devider  {
      min-width: 745px; width: 907px; height: 1px;
      background: rgba(0,0,0,0.1);
      margin: 30px 17px 16px 17px;
      float: left;
    }
    
    #line-devider .cleared {
      width: 45px; height: 45px;
      border: 3px solid white;
      border-radius: 25px;
      background: white;
      position: relative; top: -26px;
      
    }
    #line-devider .rounded {
      width: 35px; height: 35px;
      border: 1px solid rgba(0,0,0,0.1);
      border-radius: 19px;
      position: relative; top: 4px;
      
    }
    #line-devider i {margin: 6px 0 0 0; color: rgb(213,41,120); font-size: 1.5em;}

#bottom-grid { 
  float: left;  
  margin: 8px 15px 15px 15px;
  min-width: 749px; width: 907px;
  border: 1px solid rgba(0,0,0,1);
}
#left-floated-bottom-grid { 
  float: left;
  padding-right:0;
  padding-left:0;
  margin:0;
  min-height: 100%; height: 100%;
  min-width: 167px; width: 167px;
  font-family: sans-serif, verdana; font-size: 11px; font-weight: 400;
  color: rgba(0,0,0,1);
  text-rendering: optimizelegibility;
  /*border: 1px solid black;*/
}
#channel-header-bg { color: rgb(99,108,118); font-weight: bold;}

#left-floated-bottom-grid.youtube-channel,
#left-floated-bottom-grid.academic-calendar,
#left-floated-bottom-grid.document,
#left-floated-bottom-grid.publication{ 
  margin-right: 1.63em;
}
 
#left-floated-bottom-grid.comment {
  
}
  .youtube-channel i {color: red;}
  .academic-calendar i {color: purple;}
  .document i {color: orange;}
  .publication i {color: brown;}
  .comment i {color: teal;}

  
  .youtube-channel ul,
  .academic-calendar ul,
  .document ul,
  .publication ul,
  .comment ul { 
    padding: 0em; margin: 0em;
    /*background: rgba(255,255,255,0.25);
    height: 66px;*/
  }	
  
  .youtube-channel ul li,
  .academic-calendar ul li,
  .document ul li,
  .publication ul li,
  .comment ul li{
    list-style: none outside none;
    border-top: 1px solid rgba(0,0,0,0.1);
    padding:1em 0 1em 0;
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
    color: rgb(44,62,80);
  }
	#left-floated-bottom-grid.youtube-channel .title,
  #left-floated-bottom-grid.academic-calendar .title,
  #left-floated-bottom-grid.document .title,
  #left-floated-bottom-grid.publication .title,
  #left-floated-bottom-grid.comment .title{
    color: rgb(44,62,80);
    font-weight: bold;
    background: rgb(234,241,241);
    margin-top:-1em;
    padding: 1em 0 1em 0;
    border-radius: 5px 5px 0 0;
  }
					
#footer {
  width:auto;
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

	if (!isset ($modified_css))
	{
		ob_start();
		echo $output;
		$css_content = ob_get_contents();
		ob_end_clean();
		//@chmod(CSS_PATH.DS.$config['css_file'],0755);
   	$writable_file = fopen(CSS_PATH.DS.$config['css_static_file'], "w");
   	$data_size = strlen($css_content);
   	fputs($writable_file,$css_content, $data_size);
   	fclose($writable_file);
 	}
 	elseif (isset ($modified_css) && $modified_css < $last_css_modify_time)
 	{
 		unset ($_SESSION["modified_css"]);
 	}
