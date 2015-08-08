<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'koe11');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'koe11blog');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'all41');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Rk#B($2t&i ]a9]=)OnRU<Q)a!X!?DVKz!60WS9Bp9b;bMxP3@_@9|i2aR7uxuhK');
define('SECURE_AUTH_KEY',  't}<~NDqc#0{wnY]&3B).bz*5REO{^+_ %4P3VqW;lkU}NbtmM33Xh=SuT3|l|@cB');
define('LOGGED_IN_KEY',    ',|/d(i Gaau(A|~Re[5S-R2(Ni]lRscWCIKR|v%[?6c>MNI;@IPb0H6rLO],]CHv');
define('NONCE_KEY',        '<5PfP|;-n3H.qKCD6qv-vUNPuwxbPS/ggj)FMZxt.S+ZI~?v[(DO{T}D^[=#N2wx');
define('AUTH_SALT',        'fY1A;%wjDhpcu+b3pn>msrGskN`bKkCp50*+ TY6*UivWC8pW|QxHg~]#v`{Qxv2');
define('SECURE_AUTH_SALT', 'E#B-${1z_whoJY>>Ny{25HVc91eKPi/jp9#3hi-ixZ%0{@HvgLn%8gL$GxW9x(37');
define('LOGGED_IN_SALT',   'rhH/&]s,,g>K;NTx-!#>=rZvr#H,N9%4+t_x_O1lY/Ph6Pq{kWT1e4}f!8&TYjX6');
define('NONCE_SALT',       'FlwlZ*2p==e- +Hj,P|i>a;i=ESj> %,BL*E.p*1$>o`:D(TO+I|@h>lzr3x9Zw4');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'koe11_';

/**
 * ローカル言語 - このパッケージでは初期値として 'ja' (日本語 UTF-8) が設定されています。
 *
 * WordPress のローカル言語を設定します。設定した言語に対応する MO ファイルが
 * wp-content/languages にインストールされている必要があります。たとえば de_DE.mo を
 * wp-content/languages にインストールし WPLANG を 'de_DE' に設定すると、ドイツ語がサポートされます。
 */
define('WPLANG', 'ja');

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
// thanks for http://qiita.com/mzdakr/items/35959317f90d249694de
ini_set('display_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', '/var/www/html/koe11/blog/php_error.log');
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
