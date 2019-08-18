<?php
$aktiv = get_sub_field( "aktiv");
if ($aktiv) {
	//Replace <!--title--> with title-field
	$content = str_replace("<!--title-->", get_sub_field("title"), get_sub_field("content"));

	//Replace <!--title--> with title-field
	$code = str_replace("<!--title-->", get_sub_field("title"), get_sub_field("code"));
	//Split $code for content & childs
	$code = preg_split( '/(<!--content-->|<!--childs-->)/', $code);
	//What comes first? Content or Childs?
	preg_match_all( '/(<!--content-->)|(<!--childs-->)/', get_sub_field("code"), $matches, PREG_PATTERN_ORDER);

	//output First part for shure & set close variable for later
	$close[$hierarchie] = '';
	$return .= $code[0];

	//can be removed
	$return .= $loopin;

	//check for output order and set close variables for later
	if( isset($matches[0][0]) && isset($matches[0][1])) {

		if($matches[0][0] == '<!--content-->' && $matches[0][1] == '<!--childs-->') {

			$return .= $content;
			$return .= $code[1];
			$close[$hierarchie] .= $code[2];

		} else if($matches[0][0] == '<!--childs-->' && $matches[0][1] == '<!--content-->') {

			$close[$hierarchie] .= $code[1];
			$close[$hierarchie] .= $content;
			$close[$hierarchie] .= $code[2];

		}
	} else {

		$return .= $content;
		if ( isset($code[1]) )
			$close[$hierarchie] .= $code[1];

	}

	//can be removed
	$close[$hierarchie] .= $loopout;

}
?>
