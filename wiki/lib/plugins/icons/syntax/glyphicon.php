<?php
/**
 * Plugin Icons: Glyphicons helper
 * 
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Giuseppe Di Terlizzi <giuseppe.diterlizzi@gmail.com>
 * @copyright  (C) 2015, Giuseppe Di Terlizzi
 */
 
// must be run within Dokuwiki
if(!defined('DOKU_INC')) die();

require_once(dirname(__FILE__).'/icon.php');

class syntax_plugin_icons_glyphicon extends syntax_plugin_icons_icon {
    protected $pattern = '{{glyphicon>.+?}}';
    const IS_ICON = false;
}
