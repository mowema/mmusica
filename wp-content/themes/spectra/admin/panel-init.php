<?php

/* Iclude Panel Class */
if( ! class_exists( 'R_Panel' ) ) 
	get_template_part( 'admin/classes/class', 'r-panel' );

/* Create Panel */
get_template_part( 'admin/panel', 'main' );

?>