<?php
/*
Plugin Name: Mailer plugin for Mailgun
Plugin URI: https://wpflames.com
Description: Simple PHPMailer plugin for WordPress
Version: 1.0
Author: Gabor Flamich
Author URI: https://gaborflamich.com
License: GPL2
*/

function mailgun($phpmailer) {
    $phpmailer -> isSMTP();
    $phpmailer -> Host = 'SMTPHOST';
    $phpmailer -> SMTPAuth = true;
    $phpmailer -> Port = PORT;
    $phpmailer -> Username = 'USERNAME';
    $phpmailer -> Password = 'PASSWORD';
}
add_action('phpmailer_init', 'mailgun');