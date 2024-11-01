<?php
/*
Plugin Name: WP Bullerjahn 2011
Plugin URI: http://www.bullerjahn2011.de/downloads/
Description: In der linken Ecke fixierter Link zur Homepage von Jens Bullerjahn, SPD-Spitzenkandidat zur Landtagswahl in Sachsen-Anhalt
Version: 1.0 
Revision Date: 11.02.2011
Author: Yaway Media
Author URI: http://www.yaway.de
License: GNU General Public License 2.0 (GPL) http://www.gnu.org/licenses/gpl.html
*/

add_action('wp_head', 'bullerjahn2011');

function bullerjahn2011() {
    echo "<script type=\"text/javascript\" src=\"http://bullerjahn2011.spdtools.de/bullerjahn2011.js\"></script>\n";
}
?>