<?php
/**
 * @package Make
 */
global $ttfmake_current_location;
$ttfmake_current_location = 'before-content';
get_template_part( 'partials/entry', 'meta' );
unset( $ttfmake_current_location );