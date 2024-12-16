<?php
require get_theme_file_path('/inc/functions.php');
require get_theme_file_path('/inc/helpers.php');
require get_theme_file_path('/import-assets/reset-css-js.php');
require get_theme_file_path('/import-assets/import-css-js.php');
require get_theme_file_path('/inc/ajax.php');
require get_theme_file_path('/inc/api.php');
require get_theme_file_path('/inc/shortcodes.php');
require get_theme_file_path('/inc/constants.php');


// add_action( 'phpmailer_init', function( $phpmailer ) {
//     if ( !is_object( $phpmailer ) )
//     $phpmailer = (object) $phpmailer;
//     $phpmailer->Mailer     = 'smtp';
//     $phpmailer->Host       = 'smtp.gmail.com';
//     $phpmailer->SMTPAuth   = 1;
//     $phpmailer->Port       = 587;
//     $phpmailer->Username   = 'll0s3s0ll@gmail.com'; //điền tài khoản gmail của bạn
//     $phpmailer->Password   = 'ieiz hqmu qnfv ebfw'; //điền mật khẩu ứng dụng mà bạn đã tạo ở trên
//     $phpmailer->SMTPSecure = 'TLS';
//     $phpmailer->From       = 'll0s3s0ll@gmail.com'; //điền tài khoản gmail của bạn
//     $phpmailer->FromName   = 'Mr.Lee';
// });
