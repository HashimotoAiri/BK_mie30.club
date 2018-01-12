<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'gooooodstory_mie30');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'gooooodstory_mie');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'eNqdHNWyfUhx');

/** MySQL のホスト名 */
define('DB_HOST', 'mysql2003.xserver.jp');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         's6,0*-]{nilf71fA<p?sw9itAw6W^zvu6<.=7Wzn@ueK|zzMLS;*Qc6#jYeBZmZN');
define('SECURE_AUTH_KEY',  'c--ijID$KUcJK8sS2d+QJQ@8z9)AN3k7VjB>G@e5/gras,J7wy-_);C2j31Csfnh');
define('LOGGED_IN_KEY',    'PRV;k[l3B%8EzYR>g-m /V3]XpXr+R>j(o8N`#0EuGrL|sJ%;toq?B_t$Rl=SS3+');
define('NONCE_KEY',        '}IoahBpV[x[vXk0OYuIYrR4avb}AxHeQ-9k6}y_)*I<M^Ip74jP1kpb`B;>)z=S(');
define('AUTH_SALT',        'TC4jihI+*I>9fqShTmA `B].]d^|O0TnOKlEil=L?P3q)Wy;a`c,o+W~uk`.re_o');
define('SECURE_AUTH_SALT', 'G-)gi6q%z@f1k$>{h%eqbBTV;@9qNfSww..QFc}nKo|pMl2G2;0D6q%9SwnG|B(7');
define('LOGGED_IN_SALT',   '<N@~>}M7nvi~x#0Y.g#&-F(<y s,$DW0I<5KIX (M3*Iy(SdyAXC4}r:;TOaiQ}#');
define('NONCE_SALT',       '%W~qES^K4v6STZ[pv3>)(% 9BKo(d*|Za{T#)QgP&}yhQ+l;<^*E.b7>0X:/?iR*');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'mie_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
