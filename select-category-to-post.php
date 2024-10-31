<?php
/*
   Plugin Name: Select Category to Post
   Plugin URI: http://ounziw.com/2010/11/08/selectcategory-to-post/
   Description: Select Category to Post
   Author: Fumito MIZUNO
   Version: 2.3
   Author URI: http://ounziw.com/
 */

load_plugin_textdomain( 'select-category-to-post', false, dirname( plugin_basename( __FILE__ ) ) .'/languages/' );
require_once("class.php");
$selectcategory = new selectcategory;
$selectcategoryjs = new selectcategoryjs;
