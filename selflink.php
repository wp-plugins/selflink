<?php

/*
Plugin Name: SelfLink
Plugin URI: http://rainy-bow.com/selflink.html
Description: Add a hyperlink to selected text that links to the post itself.
Author: Awaken Razor
Version: 0.0.2
Author URI: http://rainy-bow.com
*/

/*  Copyright 2008  Awaken Razor (email : awakenrz@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/


/*
**********************************************
stop editing here unless you know what you do!
**********************************************
*/

	/**
	 * Auto add a link to the post itself.
	 * Use [sl][/sl] to surround the text you want to add a link to the post itself.
	 * @param string $content
	 * @return string
	 */
function selfLink($content = ''){
	$patterns[0] = '[/sl]';
	$replacements[0] = "</a>";
	$patterns[1] = '[sl]';
	$replacements[1] = "<a href=\"".get_permalink()."\">";
	$content=str_replace($patterns,$replacements,$content);
	return $content;
}
/*
 * last update:2008.10.1
 */
add_filter('the_content','selfLink');

?>