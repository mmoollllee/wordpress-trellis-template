<?php
	$aktiv = get_sub_field( "aktiv");
	if ($aktiv) {
		$code = explode("<!--content-->", get_sub_field("code"));
		$return .= $code[0];
		$elemente = get_sub_field( "elements" );
	
		if ( !empty($elemente) ) :
		
			foreach ($elemente as $id):
				$return .= load_template_part( "element", $id );
			endforeach;
		endif;
		if (isset($code[1]))
			$close[$hierarchie] = $code[1];
		set_query_var( 'loop_arg', false );
	}
?>