<?php
if (!defined('ABSPATH') && !defined('WP_UNINSTALL_PLUGIN')) {exit();}
        delete_option('selectcategory_num');
        delete_option('selectcategory_order');
        delete_option('selectcategory_maxnum');
        delete_option('selectcategory_minnum');
?>
