<?php

namespace allcom;

set_include_path( "." );
include "al_containers/AL_Head_Tag.php";
include "al_containers/AL_Body_Tag.php";
include "al_containers/AL_Header_Tag.php";
include "al_containers/AL_Aside_Tag.php";
include "al_containers/AL_main_Tag.php";
include "al_containers/AL_footer_Tag.php";

$the_html_code = $the_head_opener;
$the_html_code .= $the_head_content;
$the_html_code .= $the_head_closer;
$the_html_code .= $the_body_opener;
$the_html_code .= $the_header_opener;
$the_html_code .= $the_header_content;
$the_html_code .= $the_header_closer;
$the_html_code .= $the_left_sidebar_opener;
$the_html_code .= $the_left_sidebar_content;
$the_html_code .= $the_left_sidebar_closer;
$the_html_code .= $the_main_opener;
$the_html_code .= $the_main_content;
$the_html_code .= $the_main_closer;
//$the_html_code .= $the_footer_opener;
//$the_html_code .= $the_footer_closer;
$the_html_code .= $the_body_closer;

echo $the_html_code;