<?php
defined('BASEPATH') OR exit('No direct script access allowed');
define('ADMIN_EMAIL', 'cstarfood@gmail.com');
//define('ADMIN_EMAIL', 'ateestest@gmail.com');
$config = Array(
    'protocol' => 'smtp',
    'smtp_host' => 'ssl://smtp.googlemail.com',
    'smtp_port' => 465,
    '`smtp_user`' => 'cstarfood@gmail.com',
//    '`smtp_user`' => 'ateestest@gmail.com',
    'smtp_pass' => 'irid@pkd12',
    'smtp_pass' => 'Dp9&g#71*=TdQD',
    'mailtype'  => 'mime',
    'charset'   => 'iso-8859-1',
    'starttls'  => true,
    'newline'   => "\r\n"
);

//
//$config['useragent']           = "CodeIgniter";
//$config['mailpath']            = "/usr/bin/sendmail"; // or "/usr/sbin/sendmail"
//$config['protocol']            = "smtp";
////$config['smtp_host']           = "localhost";
//$config['smtp_host'] = 'ssl://smtp.googlemail.com';
//$config['smtp_port']= "465";
//$config['smtp_user'] = 'cstarfood@gmail.com';
//$config['smtp_pass'] = 'irid@pkd12';
//$config['mailtype'] = 'html';
//$config['charset']  = 'utf-8';
//$config['newline']  = "\r\n";
//$config['wordwrap'] = TRUE;
?>