<?php
global $config;

$config = array(
    'link' => 'http://localhost/mvcPhp/',
    /*
    ------------------------------------
            CONFIG DATABASE
    ------------------------------------
    */
    'dbconfig' => array(
      'dbtype' => 'mysql',
      'dbhost' => 'localhost',
      'dbname' => 'dbteste',
      'dbuser' => 'root',
      'dbpassword' => 'password'
    ),

    /*
    ------------------------------------
                TIME/ZONE
    ------------------------------------
    */
    'timezone' => 'America/Belem',

    'language' => 'pt-br',

    /*
    ------------------------------------
            CONFIG SEND PHPMailer
    ------------------------------------
    */
    'phpmailer' => array(
      'host' => 'smtp.gmail.com',
      'smtpauth' => 'true',
      'username' => 'email@gmail.com',
      'password' => 'secret',
      'smtpsecure' => 'tls',
      'port' => '587',
      'emailsend' => 'devdanieljunior@gmail.com',
      'usersend' => 'Daniel Souza'
    ),
);
