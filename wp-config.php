<?php
# Database Configuration
define( 'DB_NAME', 'wp_brain' );
define( 'DB_USER', 'brain' );
define( 'DB_PASSWORD', '1HLv5tlpoel8FdMdpI3I' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         '1k++X,!|(~BM!W;E7x@OUKc#lceSV7_UC-X)(qx^/Z$VB.|H,B|u{>k[-!Q>Y(37');
define('SECURE_AUTH_KEY',  'x(8|dGi+s!Zd$d+pN9-SjkFt-PRNzw}w834vhILHR`J0_D{F/&yn/D2n_=--;rv;');
define('LOGGED_IN_KEY',    '.-Kt$V;--fF||g!QL7u4{rSRy,>AS+>UwA91)]ksPT],&AkHUN/vsi;Z-zqWk wN');
define('NONCE_KEY',        ',yqGO<HQd~s[ZJw63,^p(g0Nb8e`@[_C<|S>9X*!=*%MvB >qra$9-{C5!j`_]k)');
define('AUTH_SALT',        '1eGM6I?rQofA[&d0-|^qyqzUi&HX!Pa)0Ilo@ozaVO[w};,l?k-]Zv`~bc<w9Yn<');
define('SECURE_AUTH_SALT', 'ajT9EgpZUY@{*G$1mE7y=mhu^1>-udNdiu@e0_NV=(=XD]|N{FJk:d?b7M^2aV7~');
define('LOGGED_IN_SALT',   ']cT_-/qJ4d](`a+z+.2t/dQqK=Cn,5=-WeVSlLl}c{`3:36?[Gac*ZiZmK(XBMo*');
define('NONCE_SALT',       '{Vpg[$AH} qwp>PbKz>=.[I&JuGAlusiG``89YK8Wc5F~,uj/Ozj?zy:)2k8cD!2');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'brain' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '4c39827c27ae4203c7f7effa9bb2e544a4bbfcd6' );

define( 'WPE_FOOTER_HTML', "" );

define( 'WPE_CLUSTER_ID', '1059' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_CACHE_TYPE', 'generational' );

define( 'WPE_LBMASTER_IP', '173.255.203.168' );

define( 'WPE_CDN_DISABLE_ALLOWED', false );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'brain.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-1059', );

$wpe_special_ips=array ( 0 => '173.255.203.168', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( 0 =>  array ( 'match' => 'brain.wpengine.com', 'zone' => '25ryqu3la7tu1sk7c51c6kadw01', 'secure' => false, ), );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
