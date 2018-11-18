<?php

/**
 * Direct URL of the funnel step
 */
$member_access_url    = 'https://consciouslifecoaching.clickfunnels.com/membership-access-page?page_id=17968471&page_key=7xw5hx0d5jirem7n&page_hash=9e103872f99&login_redirect=1';

/**
 * Which product id purchase should grant access?
 * @var array
 */
$accessible_products  = ["1682392"];

/**
 * Email details
 */
$email_from_name     = "Jennifer Gaynor-Yaker";

$email_from_email    = "jen@joytopiacoaching.com";

$email_subject       = "The Ultimate \"Attract Love\" Black Friday Bundle";

$email_smtp_host     = "smtp.email.com";

$email_smtp_port     = 25;

$email_smtp_username = "postmaster@mg.dateforyoursoulmate.com";

$email_smtp_password = "6887d5f978f7cd00b0abea0398b92035";


/**
 * Specify message below you can use below merge fields
 * {name} for name
 * {email} for email
 * {password} for password
 */
$message = <<<EOD
Hello {name},

Please find your login details below

Link - https://consciouslifecoaching.clickfunnels.com/membership-area17968471
Username - {email}
Password - {password}
EOD;

