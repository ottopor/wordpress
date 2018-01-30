<?php
/*
Plugin Name: FTP Upload
Plugin URI: https://github.com/
Description: Sample plugin to allow user upload file to a third party FTP server. https://stackoverflow.com/questions/48463827/allow-customers-to-upload-files-directly-to-local-ftp-server-on-wordpress-websit/48464675#48464675
Version: 0.1
Author: Tuhin Sheikh
*/

// hook for adding admin menus
add_action( 'admin_menu', 'ts_add_pages' );

// function for the hook above
function ts_add_pages()
{
  add_submenu_page('tools.php', 'FTP Upload', 'FTP Upload', 'activate_plugins', 'what_is_here','display_ftp_upload_page');
}

function display_ftp_upload_page()
{
  include_once('html/ftp_upload_page.php');
}
