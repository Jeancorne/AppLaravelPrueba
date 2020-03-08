<?php

return [
	
'driver' => 'smtp',
'host' => env('MAIL_HOST', 'smtp.gmail.com'),
'port' => env('MAIL_PORT', '587'),
'from' => ['address' => 'ctgi0101@gmail.com', 'name' => 'yourname'],
'encryption' => env('MAIL_ENCRYPTION', 'tls'),
'username' => '',
'password' => '',
'sendmail' => '/usr/sbin/sendmail -bs',
'pretend' => false,

];