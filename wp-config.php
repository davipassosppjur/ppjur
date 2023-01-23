<?php
define( 'WP_CACHE', true /* Modified by NitroPack */ );
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wissen_website2022' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'wissen_website2022' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '7ZloAzhr5R4x' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         's>SIu5ov-H%1$uLz_Zsc/SafX^tT_rh_DbIg^u;z~l~*6&HI^Y@>Jn :Bv?7)5_p' );
define( 'SECURE_AUTH_KEY',  'k*B^he5{<VdfCF={q(JQ:wm5A>JiW^< lBw.4WKQq6@Toa20=BUEKDspFX&H@Q~1' );
define( 'LOGGED_IN_KEY',    'G.kw|tmb_|o[cIQ&]yyO:q@gRjPLY>&y=ss)C^13w}^YlF~YP2&bqH#+q20lM]7n' );
define( 'NONCE_KEY',        '3.ZGg{h2D^15rb^;@Hs9,#Ek%Uh}s/Sxo`N^.6%6I#50;V&~,!dnNewb:*/4jtj|' );
define( 'AUTH_SALT',        'Gdfgw[VG0D$6R~pBJ;?v8Ls@p1y6}3N_Cz@}BJ 1ULj[m3_`o|U{anJ^ob_25U{a' );
define( 'SECURE_AUTH_SALT', 'f&Ob4$s,g6N.8C=qqF7>h|j0//([P{%2_W/uOf3=~y,o!WD2Zd([0-aW@{M=T.|5' );
define( 'LOGGED_IN_SALT',   '`f5?h/4KssjvJIl;)h4 )jPR31e&Pvw#=dk@>aPEF^QqZD2y}!Y$i^~!L5rt7DhD' );
define( 'NONCE_SALT',       'fQdWTC.CNag{xW(,W_,~5>S,dY&;Uq//7P0 x9*i<ia;R{=Qwo;^kGAEV6$eV;Z!' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
