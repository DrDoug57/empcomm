<!DOCTYPE html>
 <HTML>
 <HEAD>
   <!--[if gte IE 9]>
    <style type="text/css">
    .gradient {
       filter: none;
    }
    </style>
   <![endif]-->
    <TITLE>Empire Comm</TITLE> 
     <STYLE TYPE="text/css">A:link, A:visited, A:active {text-decoration: none; font-weight: bold}</STYLE>
   <?php include('head.php') ?>  
 </HEAD>

 <body>
<div class="bodywrap">
<div class="mainwrap" style="padding-top:10px;">
<div class="header cf">

<!--[if lt IE 7]><html class="<?php echo esc_attr( $responsive ); ?>no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]><html class="<?php echo esc_attr( $responsive ); ?>no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]><html class="<?php echo esc_attr( $responsive ); ?>no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<html class="<?php echo esc_attr( $responsive ); ?><?php if($niceScroll):?>wt-nice-scrolling <?php endif; ?><?php if($smoothScroll):?>wt-smooth-scrolling <?php endif; ?>no-js" <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<?php if (isset($_SERVER['HTTP_USER_AGENT']) &&
    (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
        header('X-UA-Compatible: IE=edge,chrome=1'); ?>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php if(wt_get_option('general','enable_responsive')){ ?>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<?php } ?>
<?php 
if($favicon = wt_get_option('general','favicon')) { ?>
<link rel="shortcut icon" href="<?php echo esc_url($favicon); ?>" />
<?php } 
if($favicon_57 = wt_get_option('general','favicon_57')) { ?>
<link rel="apple-touch-icon" href="<?php echo esc_url($favicon_57); ?>" />
<?php } 
if($favicon_72 = wt_get_option('general','favicon_72')) { ?>
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo esc_url($favicon_72); ?>" />
<?php } 
if($favicon_114 = wt_get_option('general','favicon_114')) { ?>
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo esc_url($favicon_114); ?>" />
<?php } 
if($favicon_144 = wt_get_option('general','favicon_144')) { ?>
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo esc_url($favicon_144); ?>" />
<?php } ?>
<!--[if lt IE 10]>
    <style type="text/css">
    html:not(.is_smallScreen) .wt_animations .wt_animate { visibility:visible;}
    </style>
<![endif]-->
<?php wp_head(); ?>

<?php
if (is_blog()){
global $blog_page_id;
global $post;
$blog_page_id = wt_get_option('blog','blog_page');
$post->ID = get_object_id($blog_page_id,'page');
}

/* Sidebar Alignement  */
require_once (THEME_FILES . '/layout.php');

if(!is_search()) {
$type          = get_post_meta($post->ID, '_intro_type', true);
$bg            = wt_check_input(get_post_meta($post->ID, '_page_bg', true));
$bg_position   = get_post_meta($post->ID, '_page_position_x', true);
$bg_repeat     = get_post_meta($post->ID, '_page_repeat', true);
$color = get_post_meta($post->ID, '_page_bg_color', true);
} else {
$type          = 'default'; 
}
$homeContent   = wt_get_option('general', 'home_page');
$stickyHeader  = wt_get_option('general', 'sticky_header');
$noStickyOnSS  = wt_get_option('general', 'no_sticky_on_ss');
$retinaLogo    = wt_get_option('general', 'logo_retina');
$enable_retina = wt_get_option('general', 'enable_retina');
$animations    = wt_get_option('general','enable_animation');
$pageLoader    = wt_get_option('general','page_loader');
$responsiveNav = wt_get_option('general', 'responsive_nav');
$menu_type     = 'top';

if($stickyHeader) {
	$navbar = ' navbar-fixed-top';
}else{
	$navbar = ' navbar-static-top';
}

if(!empty($color) && $color != "transparent"){
	$color = 'background-color:'.$color.';';
}else{
	$color = '';
}
if(!empty($bg)){
	$bg = 'background-image:url('.$bg.');background-position:top '.$bg_position.';background-repeat:'.$bg_repeat.'';
}else{
	$bg = '';
}
if ($stickyHeader) {
	wp_enqueue_script('jquery-sticky');
}
if($smoothScroll) {
	wp_enqueue_script('smooth-scroll');
}
if ($niceScroll) {
	wp_enqueue_script('nice-scroll');
}
?>
</head>
<BODY BGCOLOR=#FFFFFF LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0>
<TABLE WIDTH=100% BORDER=0 CELLPADDING=0 CELLSPACING=0 align="center" background="images/top_px.gif" style="background-position:top; background-repeat:repeat-x ">
	<TR><td width="50%" background="images/left_px.jpg" style="background-position:top right; background-repeat:repeat-x "><img src="images/spacer.gif"></td>
	  <TD WIDTH=766 HEIGHT=267 ALT="" valign="top">
		<TABLE WIDTH=766 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	     <TR>
		  <TD WIDTH=501 HEIGHT=267 ALT="" valign="top">
		    <TABLE WIDTH=501 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	         <TR>
		      <TD COLSPAN=5>
			   <IMG SRC="images/logo.jpg" WIDTH=501 HEIGHT=108 ALT="">
              </TD>
	         </TR>
	        <TR>
		     <TD><a href="phone.html"><IMG SRC="images/m1.jpg" ALT="" WIDTH=108 HEIGHT=33 border="0"></a></TD>
		     <TD><a href="net.html"><IMG SRC="images/m2.jpg" ALT="" WIDTH=98 HEIGHT=33 border="0"></a></TD>
		     <TD><a href="radio.html"><img src="images/m3.jpg" alt="" width=98 height=33 border="0"></a></TD>
		     <TD><a href="templates.html"><IMG SRC="images/m5.jpg" ALT="" WIDTH=97 HEIGHT=33 border="0"></TD>
		     <TD><img src="images/m7.jpg" alt="" width=100 height=33 border="0"></TD>
	       </TR>
	      <TR>
		   <TD COLSPAN=5>
			<IMG SRC="images/top1.jpg" WIDTH=501 HEIGHT=126 ALT=""></TD>
	      </TR>
         </TABLE>
		</TD>
	   <TD WIDTH=233 HEIGHT=267 ALT="" valign="top">
		<TABLE WIDTH=233 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	     <TR>
		  <TD background="images/top_menu.jpg" WIDTH=250 HEIGHT=118 ALT="" valign="top" style="padding-top:41px ">
		   <div style="margin-left:37px ">
            
            <a href="help.html" class="gray u" id="a">Help</a><img src="images/dot_line.jpg" hspace="13" align="absmiddle">
            <a href="faq.html" class="gray u" id="a">FAQ</a><img src="images/dot_line.jpg" hspace="13" align="absmiddle">
            <a href="support.html" class="gray u" id="a">Support</a>
           </div>
		  </TD>
	    </TR>
	  <TR>
       <TD><IMG SRC="images/top.jpg" WIDTH=233 HEIGHT=138 ALT=""></TD>
      </TR>
	  <TR>
       <TD><IMG SRC="images/head.jpg" WIDTH=233 HEIGHT=11 ALT=""></TD>
      </TR>
     </TABLE>
	</TD>
	 <TD><IMG SRC="images/top_right.jpg" WIDTH=32 HEIGHT=267 ALT=""></TD>
	</TR>
   </TABLE>
  </TD>
   
  </TR>
  <TR>
   <td width="50%"><img src="images/spacer.gif"></td>
	<TD WIDTH=766 HEIGHT=337 ALT="" valign="top">
		<TABLE WIDTH=766 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<TR>
		<TD><IMG SRC="images/spacer.gif" WIDTH=31 HEIGHT=337 ALT=""></TD>
		<TD WIDTH=425 HEIGHT=337 ALT="" valign="top" style="padding-top:29px; padding-bottom:15px "><img src="images/1txt2.jpg"><br>

<img src="images/take.jpg">
	</td>
  </tr>
</table>
</div>

	

<BR>
<div class="footer">
		<?php include('footer.php') ?>
	 </div>	
<script language=javascript>
</script>
</BODY>
</HTML>
