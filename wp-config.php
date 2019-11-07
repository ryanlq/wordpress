<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为wp-config.php，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define( 'DB_NAME', 'wordpress' );

/** MySQL数据库用户名 */
define( 'DB_USER', 'xdaoo' );

/** MySQL数据库密码 */
define( 'DB_PASSWORD', 'liqiang99' );

/** MySQL主机 */
define( 'DB_HOST', 'localhost' );

/** 创建数据表时默认的文字编码 */
define( 'DB_CHARSET', 'utf8mb4' );

/** 数据库整理类型。如不确定请勿更改 */
define( 'DB_COLLATE', '' );

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Tdswgk]=C5nb,Kohvpi52[YJg:=N&TYrHzBLSUH)-?Km)cNV9#J+Zyn=My$fU`+!' );
define( 'SECURE_AUTH_KEY',  'l`D>C~(n2BvD.oJKAD3rjK7o?XQ?RHaj+Dtf/$cE8kcBCWrT4S6+[Kh$ odz$|0G' );
define( 'LOGGED_IN_KEY',    'R+bSuD:<^ +__MQU!caWH&g)UK&Yl2fkf2Ef80GFYd9Frb&Mq+HMd=D(@:M(e`U9' );
define( 'NONCE_KEY',        '>^$HtNllS#{L,+-|OIy3f_]nfK?dKSyOo+Z?47($ `e4i0tcD q/ss$f$D6jNrc#' );
define( 'AUTH_SALT',        ',sm%f)pRQ>fh@2lrlKIb30v0#+6k+`{6L*=b:v@nT5cSMSm>T&z1XFc~f4=HQ$Hi' );
define( 'SECURE_AUTH_SALT', 'XQ;rRwyjJ7r0q`$l%M+{IhCE`F_O8aC#gOxke=5cHHCD.7Kv#A6eI3,B<VQpz`AA' );
define( 'LOGGED_IN_SALT',   'nag~%U^V@gVzMZr>} loR3j%2oLPK/O49H$<.Vy7bP+fBl5mOY]2[C9F5;Vf3k@p' );
define( 'NONCE_SALT',       'FK/yx4O/M2N$7hlE;4PABZ#Xm.-Z,9.2a}mO?rs(drV[QK>Rhz-}Kb nCtjq:(GD' );

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** 设置WordPress变量和包含文件。 */
require_once( ABSPATH . 'wp-settings.php' );

