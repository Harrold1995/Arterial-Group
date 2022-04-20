<?php

/**
 * DATABASE
 */
define("CONF_DB_HOST", "localhost");
define("CONF_DB_USER", "root");
define("CONF_DB_PASS", "");
define("CONF_DB_NAME", "arterial");

/**
 * PROJECT URLs
 */
define("CONF_URL_BASE", "https://arterialgroup.com.test/");
define("CONF_URL_TEST", "https://arterialgroup.com.test/");
define("CONF_URL_ADMIN", "admin");



/**
 * SITE
 */
define("CONF_SITE_NAME", "Arterial Group");
define("CONF_SITE_TITLE", "Arterial Group | Pharmaceutical &amp; Healthcare Marketing Agency | Sydney");
define("CONF_SITE_DESC",
    "Sydney-based Arterial Group is a pharmaceutical &amp; healthcare marketing agency building successful multi-channel campaigns for the world&#039;s largest brands.");
define("CONF_SITE_LANG", "en");
define("CONF_SITE_DOMAIN", "arterialgroup.com");
define("CONF_SITE_ADDR_STREET", "Lime street");
define("CONF_SITE_ADDR_NUMBER", "21/26A");
define("CONF_SITE_ADDR_COMPLEMENT", "");
define("CONF_SITE_ADDR_CITY", "Sydney");
define("CONF_SITE_ADDR_STATE", "NSW");
define("CONF_SITE_ADDR_ZIPCODE", "2000");


/**
 * DATES
 */
define("CONF_DATE_BR", "d/m/Y H:i:s");
define("CONF_DATE_APP", "Y-m-d H:i:s");

/**
 * PASSWORD
 */
define("CONF_PASSWD_MIN_LEN", 6);
define("CONF_PASSWD_MAX_LEN", 40);
define("CONF_PASSWD_ALGO", PASSWORD_DEFAULT);
define("CONF_PASSWD_OPTION", ["cost" => 10]);


/**
 * SOCIAL
 */
define("CONF_SOCIAL_TWITTER_CREATOR", "@arterialgroup");
define("CONF_SOCIAL_TWITTER_PUBLISHER", "@arterialgroup");
define("CONF_SOCIAL_FACEBOOK_APP", "");
define("CONF_SOCIAL_FACEBOOK_PAGE", "arterialmarketing");
define("CONF_SOCIAL_FACEBOOK_AUTHOR", "arterialmarketing");
define("CONF_SOCIAL_GOOGLE_PAGE", "");
define("CONF_SOCIAL_GOOGLE_AUTHOR", "");
define("CONF_SOCIAL_INSTAGRAM_PAGE", "");
define("CONF_SOCIAL_YOUTUBE_PAGE", "");

/**
 * VIEW
 */
define("CONF_VIEW_PATH", __DIR__ . "/../../shared/views");
define("CONF_VIEW_EXT", "php");
define("CONF_VIEW_THEME", "website");


/**
 * UPLOAD
 */
define("CONF_UPLOAD_DIR", "storage");
define("CONF_UPLOAD_IMAGE_DIR", "images");
define("CONF_UPLOAD_FILE_DIR", "files");
define("CONF_UPLOAD_MEDIA_DIR", "medias");


/**
 * IMAGES
 */
define("CONF_IMAGE_CACHE", CONF_UPLOAD_DIR . "/" . CONF_UPLOAD_IMAGE_DIR . "/cache");
define("CONF_IMAGE_SIZE", 2000);
define("CONF_IMAGE_QUALITY", ["jpg" => 75, "png" => 5]);

/**
 * MAIL
 */
define("CONF_MAIL_HOST", "mail.arterialeducation.com.au");
define("CONF_MAIL_PORT", "465");
define("CONF_MAIL_IMAP_PORT", "993");
define("CONF_MAIL_USER", "education@arterialeducation.com.au");
define("CONF_MAIL_PASS", "T*mZZks)z6Oz,nZQ");
define("CONF_MAIL_SENDER", ["name" => "Arterial group", "address" => "education@arterialeducation.com.au"]);
define("CONF_MAIL_SUPPORT", "education@arterialeducation.com.au");
define("CONF_MAIL_OPTION_LANG", "en");
define("CONF_MAIL_OPTION_HTML", true);
define("CONF_MAIL_OPTION_AUTH", true);
define("CONF_MAIL_OPTION_SECURE", "ssl");
define("CONF_MAIL_OPTION_CHARSET", "utf-8");



// ERROR HANDLING #####################
// CSS constants :: Error message
define('WS_ACCEPT', 'success');
define('WS_INFOR', 'info');
define('WS_ALERT', 'warning');
define('WS_ERROR', 'error');



// Encrypt and Decrypt #####################
define("CONF_ENCRYPT_CIPHERING","chacha20");
define("CONF_ENCRYPT_OPTIONS","0");
define("CONF_ENCRYPT_INIT_VECTOR","9418387104182631");
define("CONF_ENCRYPT_KEY","ArterialGroup");


// Google Captcha
define("CONF_GOOGLE_SITE_KEY", "6LfaRJUcAAAAAI2jy0Jjhlgtw5ZeIZQK7ZsJtCL6");
define("CONF_GOOGLE_SECRET_KEY", "6LfaRJUcAAAAADqV_U60tZygYQag4wQs-z6W4vIB");
