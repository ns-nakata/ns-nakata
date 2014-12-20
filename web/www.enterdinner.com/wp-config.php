<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、ABSPATH の設定を含みます。
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
define('DB_NAME', 'wpdb141220');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'etdadmin');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '9EMwvXo6srwvYc');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost:80');

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
define('AUTH_KEY',         '=),d9!pB?-:IN-o8;PHRvo=+1B+2$?j~-L|,~RI4UD:(<NfHfur;&OA 2~}M8q&K');
define('SECURE_AUTH_KEY',  '1-k ERi$;@pE1|f8u+LS.s~JK%p|on/{om5@U/*P`Hwah-t>_#Q]8j$VlkI2f#~J');
define('LOGGED_IN_KEY',    'c/XUL@#aXPEM#dayS7D5Gbg-BU4C+WgP V`:J_-A1-XT-#rpdf<La7d:blwpq8w<');
define('NONCE_KEY',        'O|^U,4Bv^zg Y|(R$8gqf8/lU<-~Qx!`1^061buB1,ELe|W8dfH~p2P~y!r^25L#');
define('AUTH_SALT',        'BB4$l#K^?||IX%8ciO[RH?h_rF3(s<%sM64izjQ|Vl9~@T`km=J#qI]=^#a3MJP3');
define('SECURE_AUTH_SALT', '-J9I<I06_w|qe:V%.*0l(+.V@),3+.v.-+E9`p~|CHrF=PT3R?`92+m![eII-?sL');
define('LOGGED_IN_SALT',   '+lmK5D_PD=m,12TZlC@,BmQVkhO+NSp,j^&(Z;@}O<.stMGL]Wpr0^Ggm|OgMW5|');
define('NONCE_SALT',       'n}|M2y-9g)+@54)Zuic-NtjFF $4/<#wTh-N)V}xh-{MJM $b{[+7MC~vH4B^+4L');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
