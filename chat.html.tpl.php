<style>
	  <?php/* 
$dir = "./fonts/";
$count =1;
// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
  
    while (($file = readdir($dh)) !== false){
	if($count > 2){
     echo '	 @font-face {
font-family:'.preg_replace('/(?<!\ )[A-Z]/', ' $0',str_replace(".ttf","",$file)).';
src: url(./fonts/'.$file.');
}';

    }
	$count++;
	}
    closedir($dh);
  }
  }*/
?>
  	 @font-face {
font-family:Arial;
src: url(./fonts/Arial.ttf);
}	 @font-face {
font-family:Arial Black;
src: url(./fonts/ArialBlack.ttf);
}	 @font-face {
font-family:Arial Bold;
src: url(./fonts/ArialBold.ttf);
}	 @font-face {
font-family:Arial Bold Italic;
src: url(./fonts/ArialBoldItalic.ttf);
}	 @font-face {
font-family:Arial Italic;
src: url(./fonts/ArialItalic.ttf);
}	 @font-face {
font-family:Arial Narrow;
src: url(./fonts/ArialNarrow.ttf);
}	 @font-face {
font-family:Arial Narrow Bold;
src: url(./fonts/ArialNarrowBold.ttf);
}	 @font-face {
font-family:Arial Narrow Bold Italic;
src: url(./fonts/ArialNarrowBoldItalic.ttf);
}	 @font-face {
font-family:Arial Narrow Italic;
src: url(./fonts/ArialNarrowItalic.ttf);
}	 @font-face {
font-family:Book Antiqua;
src: url(./fonts/BookAntiqua.ttf);
}	 @font-face {
font-family:Book Antiqua Bold;
src: url(./fonts/BookAntiquaBold.ttf);
}	 @font-face {
font-family:Book Antiqua Bold Italic;
src: url(./fonts/BookAntiquaBoldItalic.ttf);
}	 @font-face {
font-family:Book Antiqua Italic;
src: url(./fonts/BookAntiquaItalic.ttf);
}	 @font-face {
font-family:Calibri;
src: url(./fonts/Calibri.ttf);
}	 @font-face {
font-family:Calibri Bold;
src: url(./fonts/CalibriBold.ttf);
}	 @font-face {
font-family:Calibri Bold Italic;
src: url(./fonts/CalibriBoldItalic.ttf);
}	 @font-face {
font-family:Calibri Italic;
src: url(./fonts/CalibriItalic.ttf);
}	 @font-face {
font-family:Calibri Light;
src: url(./fonts/CalibriLight.ttf);
}	 @font-face {
font-family:Calibri Light Italic;
src: url(./fonts/CalibriLightItalic.ttf);
}	 @font-face {
font-family:Cambria;
src: url(./fonts/Cambria.ttf);
}	 @font-face {
font-family:Cambria Bold;
src: url(./fonts/CambriaBold.ttf);
}	 @font-face {
font-family:Cambria Bold Italic;
src: url(./fonts/CambriaBoldItalic.ttf);
}	 @font-face {
font-family:Cambria Italic;
src: url(./fonts/CambriaItalic.ttf);
}	 @font-face {
font-family:Candara;
src: url(./fonts/Candara.ttf);
}	 @font-face {
font-family:Candara Bold;
src: url(./fonts/CandaraBold.ttf);
}	 @font-face {
font-family:Candara Bold Italic;
src: url(./fonts/CandaraBoldItalic.ttf);
}	 @font-face {
font-family:Candara Italic;
src: url(./fonts/CandaraItalic.ttf);
}	 @font-face {
font-family:Century Gothic;
src: url(./fonts/CenturyGothic.ttf);
}	 @font-face {
font-family:Century Gothic Bold;
src: url(./fonts/CenturyGothicBold.ttf);
}	 @font-face {
font-family:Century Gothic Bold Italic;
src: url(./fonts/CenturyGothicBoldItalic.ttf);
}	 @font-face {
font-family:Century Gothic Italic;
src: url(./fonts/CenturyGothicItalic.ttf);
}	 @font-face {
font-family:Comic Sans MS;
src: url(./fonts/ComicSansMS.ttf);
}	 @font-face {
font-family:Comic Sans MS Bold;
src: url(./fonts/ComicSansMSBold.ttf);
}	 @font-face {
font-family:Comic Sans MS Bold Italic;
src: url(./fonts/ComicSansMSBoldItalic.ttf);
}	 @font-face {
font-family:Comic Sans MS Italic;
src: url(./fonts/ComicSansMSItalic.ttf);
}	 @font-face {
font-family:Courier New;
src: url(./fonts/CourierNew.ttf);
}	 @font-face {
font-family:Courier New Bold;
src: url(./fonts/CourierNewBold.ttf);
}	 @font-face {
font-family:Courier New Bold Italic;
src: url(./fonts/CourierNewBoldItalic.ttf);
}	 @font-face {
font-family:Courier New Italic;
src: url(./fonts/CourierNewItalic.ttf);
}	 @font-face {
font-family:Franklin Gothic Medium;
src: url(./fonts/FranklinGothicMedium.ttf);
}	 @font-face {
font-family:Franklin Gothic Medium Italic;
src: url(./fonts/FranklinGothicMediumItalic.ttf);
}	 @font-face {
font-family:Garamond;
src: url(./fonts/Garamond.ttf);
}	 @font-face {
font-family:Garamond Bold;
src: url(./fonts/GaramondBold.ttf);
}	 @font-face {
font-family:Garamond Italic;
src: url(./fonts/GaramondItalic.ttf);
}	 @font-face {
font-family:Georgia;
src: url(./fonts/Georgia.ttf);
}	 @font-face {
font-family:Georgia Bold;
src: url(./fonts/GeorgiaBold.ttf);
}	 @font-face {
font-family:Georgia Bold Italic;
src: url(./fonts/GeorgiaBoldItalic.ttf);
}	 @font-face {
font-family:Georgia Italic;
src: url(./fonts/GeorgiaItalic.ttf);
}	 @font-face {
font-family:Impact;
src: url(./fonts/Impact.ttf);
}	 @font-face {
font-family:Lucida Console;
src: url(./fonts/LucidaConsole.ttf);
}	 @font-face {
font-family:Lucida Sans Unicode;
src: url(./fonts/LucidaSansUnicode.ttf);
}	 @font-face {
font-family:Microsoft Sans Serif;
src: url(./fonts/MicrosoftSansSerif.ttf);
}	 @font-face {
font-family:Palatino Linotype;
src: url(./fonts/PalatinoLinotype.ttf);
}	 @font-face {
font-family:Palatino Linotype Bold;
src: url(./fonts/PalatinoLinotypeBold.ttf);
}	 @font-face {
font-family:Palatino Linotype Bold Italic;
src: url(./fonts/PalatinoLinotypeBoldItalic.ttf);
}	 @font-face {
font-family:Palatino Linotype Italic;
src: url(./fonts/PalatinoLinotypeItalic.ttf);
}	 @font-face {
font-family:Segoe UI;
src: url(./fonts/SegoeUI.ttf);
}	 @font-face {
font-family:Segoe UI Black;
src: url(./fonts/SegoeUIBlack.ttf);
}	 @font-face {
font-family:Segoe UI Black Italic;
src: url(./fonts/SegoeUIBlackItalic.ttf);
}	 @font-face {
font-family:Segoe UI Bold;
src: url(./fonts/SegoeUIBold.ttf);
}	 @font-face {
font-family:Segoe UI Bold Italic;
src: url(./fonts/SegoeUIBoldItalic.ttf);
}	 @font-face {
font-family:Segoe UI Italic;
src: url(./fonts/SegoeUIItalic.ttf);
}	 @font-face {
font-family:Segoe UI Light;
src: url(./fonts/SegoeUILight.ttf);
}	 @font-face {
font-family:Segoe UI Light Italic;
src: url(./fonts/SegoeUILightItalic.ttf);
}	 @font-face {
font-family:Segoe UI Semibold;
src: url(./fonts/SegoeUISemibold.ttf);
}	 @font-face {
font-family:Segoe UI Semibold Italic;
src: url(./fonts/SegoeUISemiboldItalic.ttf);
}	 @font-face {
font-family:Segoe UI Semilight;
src: url(./fonts/SegoeUISemilight.ttf);
}	 @font-face {
font-family:Segoe UI Semilight Italic;
src: url(./fonts/SegoeUISemilightItalic.ttf);
}	 @font-face {
font-family:Tahoma;
src: url(./fonts/Tahoma.ttf);
}	 @font-face {
font-family:Tahoma Bold;
src: url(./fonts/TahomaBold.ttf);
}	 @font-face {
font-family:Times New Roman;
src: url(./fonts/TimesNewRoman.ttf);
}	 @font-face {
font-family:Times New Roman Bold;
src: url(./fonts/TimesNewRomanBold.ttf);
}	 @font-face {
font-family:Times New Roman Bold Italic;
src: url(./fonts/TimesNewRomanBoldItalic.ttf);
}	 @font-face {
font-family:Times New Roman Italic;
src: url(./fonts/TimesNewRomanItalic.ttf);
}	 @font-face {
font-family:Trebuchet MS;
src: url(./fonts/TrebuchetMS.ttf);
}	 @font-face {
font-family:Trebuchet MS Bold;
src: url(./fonts/TrebuchetMSBold.ttf);
}	 @font-face {
font-family:Trebuchet MS Bold Italic;
src: url(./fonts/TrebuchetMSBoldItalic.ttf);
}	 @font-face {
font-family:Trebuchet MS Italic;
src: url(./fonts/TrebuchetMSItalic.ttf);
}	 @font-face {
font-family:Verdana;
src: url(./fonts/Verdana.ttf);
}	 @font-face {
font-family:Verdana Bold;
src: url(./fonts/VerdanaBold.ttf);
}	 @font-face {
font-family:Verdana Bold Italic;
src: url(./fonts/VerdanaBoldItalic.ttf);
}	 @font-face {
font-family:Verdana Italic;
src: url(./fonts/VerdanaItalic.ttf);
}
</style>

  <img id="pfc_minmax" onclick="pfc.swap_minimize_maximize()" src="<?php echo $c->getFileUrlFromTheme('images/'.($start_minimized?'maximize':'minimize').'.gif'); ?>" alt=""/>
  <h2 id="pfc_title"><?php echo preg_replace('/[_]/', '', $title)?></h2>
 
  <div id="pfc_content_expandable">                

  <div id="pfc_channels">
    <ul id="pfc_channels_list"></ul>
    <div id="pfc_channels_content"></div>
  </div>
	
	<div class="contatiner" id="mid">
	<div class="row" id="mid_container">
	
	
	 <div class="col-lg-6 col-md-6 col-xs-push" id="radio_or_error" >
	 <div id="pfc_errors"></div>
	 <div id="pfc_smileys" style="display: none;"></div>
	 </div>
	 
	 
	 <div class="col-lg-6 col-md-6 col-xs-pull" id="mid_con">
	  <div id="pfc_cmd_container">           
 
			<div class="row" id="command_container">
<?php if ($display_ping) { ?>
      <span id="pfc_ping" title="<?php echo _pfc("Ping"); ?>"></span>
<?php } ?>

      <div class="pfc_btn" >
        
		<div class="options"  id="pfc_loginlogout" onclick="pfc.connect_disconnect()">
		<i class=" icon-signout"></i>
		</div>
		<!--<img src="<?php echo $c->getFileUrlFromTheme('images/logout.gif'); ?>"
             alt="" title=""
             id="pfc_loginlogout"
             onclick="pfc.connect_disconnect()" />-->
      </div>
	  
	        <?php if ($c->btn_sh_whosonline) { ?>
      <div class="pfc_btn" >
	   <div class="options" id="pfc_showHideWhosOnlineBtn"
             onclick="pfc.showHideWhosOnline()">
		<i class="icon-group"></i>
		</div>
        <!--<img src="<?php echo $c->getFileUrlFromTheme('images/online-on.gif'); ?>"
             alt="" title=""
             id="pfc_showHideWhosOnlineBtn"
             onclick="pfc.showHideWhosOnline()" />-->
      </div>
      <?php } ?>

 
      <div class="pfc_btn">
        <!--<img src="<?php echo $c->getFileUrlFromTheme('images/clock-on.gif'); ?>"
             alt="" title=""
             id="pfc_clock"
             onclick="pfc.clock_swap()" />-->
			  <div class="options"   id="pfc_clock"
             onclick="pfc.clock_swap()" >
		<i class="icon-envelope-alt"></i>
		</div>
      </div>
	  
	       <div class="pfc_btn" 
              >
       <!-- <img src="<?php echo $c->getFileUrlFromTheme('images/color-on.gif'); ?>"
             alt="" title=""
             id="pfc_nickmarker"
             onclick="pfc.nickmarker_swap()" />-->
			  <div class="options"  id="pfc_nickmarker" onclick="pfc.nickmarker_swap()">
		<i class="icon-github-alt"></i>
		</div>
      </div>
	        <?php if ($c->btn_sh_smileys) { ?>
      <div class="pfc_btn" 
        >
	  <div class="options" id="pfc_showHideSmileysbtn" onclick="pfc.showHideSmileys()">
		<i class=" icon-smile"></i>
		</div>
        <!--<img src="<?php echo $c->getFileUrlFromTheme('images/smiley-on.gif'); ?>"
        alt="" title=""
        id="pfc_showHideSmileysbtn"
        onclick="pfc.showHideSmileys()" />-->
      </div>
      <?php } ?>


      <div class="pfc_btn" 
             >
        <!--<img src="<?php echo $c->getFileUrlFromTheme('images/sound-on.gif'); ?>"
             alt="" title=""
             id="pfc_sound"
             onclick="pfc.sound_swap()" />-->
			   <div class="options" id="pfc_sound" onclick="pfc.showHideSettings()">
		<i class="icon-gears"></i>
		</div>
      </div>





      <!--<div class="pfc_btn">
        <img src="<?php echo $c->getFileUrlFromTheme('smileys/emoticon_evilgrin.png'); ?>"
             alt="Disable/enable censorship" title="Disable/enable censorship"
             id="pfc_nocensor"
             onclick="pfc.toggleCensor()" />
      </div>-->

 </div>
	</div>
	</div>
	</div>
	</div>
	 
  
  <div id="pfc_input_container">

	<div class="contatiner" id="chatText">
	<table style="margin:0;padding:0;border-collapse:collapse;">
      <tbody>
      <tr>
      <td class="pfc_td1">
        <p id="pfc_handle"
           <?php error_log($frozen_nick); 
		   if (! $frozen_nick) {
             echo ' title="' . _pfc("Enter your nickname here") . '"' 
               . ' onclick="pfc.askNick(\'\')"'
               . ' style="cursor: pointer"';
           }
           ?>
           ><?php echo phpFreeChat::FilterSpecialChar($u->nick); ?></p>      
      </td>
  
      </tr>
      </tbody>
    </table>
	
	<div class="row" >
	<div class="col-lg-11 col-md-11 col-sm-10 col-xs-10" id='inputWords'>
	<input type="text" maxlength="250" oncopy="return false" ondrag="return false" ondrop="return false" onpaste="return false"
               id="pfc_words"
                title="<?php echo preg_replace('/[_]/', '', _pfc("Type Your Message and Press Enter")); ?>"
			   placeholder="<?php echo preg_replace('/[_]/', '', _pfc("Type Your Message and Press Enter")); ?>"
               />
	</div>
	<div class="col-lg-1 col-md-1 col-sm-2 col-xs-2 buttonArea" id="buttonArea">
	<input  style="float:right;" type="button"
               id="pfc_send"
               value="<?php echo _pfc("Send"); ?>"
               title="<?php echo _pfc("Click here to send your message"); ?>"
               onclick="pfc.doSendMessage()"/>
	</div>
	</div>
	</div>
	
    <!--<table style="margin:0;padding:0;border-collapse:collapse;">
      <tbody>
      <tr>
      <td class="pfc_td1">
        <p id="pfc_handle"
           <?php if (! $frozen_nick) {
             echo ' title="' . _pfc("Enter your nickname here") . '"' 
               . ' onclick="pfc.askNick(\'\')"'
               . ' style="cursor: pointer"';
           }
           ?>
           ><?php echo phpFreeChat::FilterSpecialChar($u->nick); ?></p>      
      </td>
      <td class="pfc_td2">
        <input type="text"
               id="pfc_words"
                title="<?php echo preg_replace('/[_]/', '', _pfc("Type Your Message and Press Enter")); ?>"
			   placeholder="<?php echo preg_replace('/[_]/', '', _pfc("Type Your Message and Press Enter")); ?>"
               maxlength="<?php echo $max_text_len; ?>"/>
      </td>
      <td class="pfc_td3">
        <input type="button"
               id="pfc_send"
               value="<?php echo _pfc("Send"); ?>"
               title="<?php echo _pfc("Click here to send your message"); ?>"
               onclick="pfc.doSendMessage()"/>
      </td>
      </tr>
      </tbody>
    </table>-->


    <div id="pfc_bbcode_container">
      <div id="pfc_bt_strong_btn" class="pfc_btn">
        <img src="<?php echo $c->getFileUrlFromTheme('images/bt_strong.gif'); ?>"
             id="pfc_bt_strong"
             alt="<?php echo _pfc("Bold"); ?>"
             title="<?php echo _pfc("Bold"); ?>"
             class="pfc_bt_strong"
             onclick="pfc.insert_text('[b]','[/b]',true)" />
      </div>
      <div id="pfc_bt_italics_btn" class="pfc_btn">
        <img src="<?php echo $c->getFileUrlFromTheme('images/bt_em.gif'); ?>"
             id="pfc_bt_italics"
             alt="<?php echo _pfc("Italics"); ?>"
             title="<?php echo _pfc("Italics"); ?>"
             class="pfc_bt_italics"
             onclick="pfc.insert_text('[i]','[/i]',true)" />
      </div>
      <div id="pfc_bt_underline_btn" class="pfc_btn">
        <img src="<?php echo $c->getFileUrlFromTheme('images/bt_ins.gif'); ?>"
             id="pfc_bt_underline"
             alt="<?php echo _pfc("Underline"); ?>"
             title="<?php echo _pfc("Underline"); ?>"
             class="pfc_bt_underline"
             onclick="pfc.insert_text('[u]','[/u]',true)" />
      </div>
      <div id="pfc_bt_delete_btn" class="pfc_btn">
        <img src="<?php echo $c->getFileUrlFromTheme('images/bt_del.gif'); ?>"
             id="pfc_bt_delete"
             alt="<?php echo _pfc("Delete"); ?>"
             title="<?php echo _pfc("Delete"); ?>"
             class="pfc_bt_delete"
             onclick="pfc.insert_text('[s]','[/s]',true)" />
      </div>
<!--
      <div id="pfc_bt_mail_btn" class="pfc_btn">
        <img src="<?php echo $c->getFileUrlFromTheme('images/bt_mail.gif'); ?>"
             id="pfc_bt_mail"
             alt="<?php echo _pfc("Mail"); ?>"
             title="<?php echo _pfc("Mail"); ?>"
             class="pfc_bt_mail"
             onclick="pfc.insert_text('[email]','[/email]',true)" />
      </div>
-->
      <div id="pfc_bt_color_btn" class="pfc_btn">
        <img src="<?php echo $c->getFileUrlFromTheme('images/bt_color.gif'); ?>"
             alt="<?php echo _pfc("Color"); ?>"
             title="<?php echo _pfc("Color"); ?>"
             id="pfc_bt_color"
             class="pfc_bt_color"
             onclick="pfc.minimize_maximize('pfc_colorlist','inline')" />
      </div>
      <div id="pfc_colorlist"></div>
    </div> <!-- pfc_bbcode_container -->

  </div>

   

  

  </div>

  <div id="pfc_sound_container"></div>
		<script>
		
		if(document.getElementById("pfc_topic")){
		document.getElementById("pfc_topic").innerHTML="<center><?php echo $_REQUEST['topic']; ?></center>";
		document.getElementById("pfc_description").innerHTML="<center><?php echo $_REQUEST['description']; ?></center>";
		}
	
		</script>
  	<script>
	
	window.onload = window.onresize = function () {

	$('pfc_container').style.height=100+"vh";
	var height = window.innerHeight;
	$('pfc_channels_content').style.height=(height - $('pfc_input_container').offsetHeight - 70)+"px";
	 var root = $('pfc_channels_content');
	 var contentHeight=(root.offsetHeight-1)+'px';
    var contentlist = document.getElementsByClassName('pfc_online');
    for(var i = 0; i < contentlist.length; i++){
     var content = contentlist[i];
	  content.style.height = contentHeight;
	}
	var contentlist = document.getElementsByClassName('pfc_chat');
    for(var i = 0; i < contentlist.length; i++){
     var content = contentlist[i];
	  content.style.height = contentHeight;
	}
	var contentlist = document.getElementsByClassName('pfc_setting');
    for(var i = 0; i < contentlist.length; i++){
     var content = contentlist[i];
	  content.style.height = contentHeight;
	}
		var contentlist = document.getElementsByClassName('pfc_smilly');
    for(var i = 0; i < contentlist.length; i++){
     var content = contentlist[i];
	  content.style.height = contentHeight;
	} 
	}
	
	</script>
