<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Email
| -------------------------------------------------------------------------
| This file lets you define parameters for sending emails.
| Please see the user guide for info:
|
| http://ellislab.com/codeigniter/user-guide/libraries/email.html
|
*/
$config['protocol'] ='smtp';
$config['smtp_host'] = 'ssl://smtp.gmail.com.'; //(SMTP server)
$config['smtp_port'] = '465'; //(SMTP port)
$config['smtp_timeout'] = '30';
$config['smtp_user'] = 'nghiasendmail@gmail.com'; //(user@gmail.com)
$config['smtp_pass'] = ''; // (gmail password)
$config['mailtype'] = 'html';
$config['charset'] = 'utf-8';
$config['newline'] = "\r\n";


/* End of file email.php */
/* Location: ./application/config/email.php */