<?php
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
define('DB_NAME', 'db_bs4wp');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '!oe;M]~SYjb_l0#F)2e$JeWZMKET%ywj*%OLXjIQ(A65mf{{|.1*NkCcX@X;Ph/(');
define('SECURE_AUTH_KEY',  'cf@fr3@r]#{m3-^1^?<1qMGTy+1sn7QOBfw*]wBF(U;koy3r6;NxU<gw:[itXG-9');
define('LOGGED_IN_KEY',    'h%O0:L^d4I#eD=#J2H?>^Leixu(xksp#U9>O(]PNFR2GRCHHh6!8KFP@|6i%r6rb');
define('NONCE_KEY',        ']I=Hnt2YZ[QdEK$S)|}O3/Z$uQaYJ^jL(q{DN:[$1I|Ybi5=b-7AaF6/VmVO*!tc');
define('AUTH_SALT',        'e~TVf[IS+y=;:~&WD>DSUOXNT.$[Vqo3<~0T;/g7--PKG?H*A@3fgd~P{]8hOz%6');
define('SECURE_AUTH_SALT', 'x&N4]v?-Uc0+x5=;6|$,/G_^QP>P}&6y&MK*wJ+MB~`bV706R7{}8^8^H`1$kc u');
define('LOGGED_IN_SALT',   '_]zV)S;!T_3RMR5y]58G/@!vh<6z:kqU^zxV.I(OVc(tG[]??o`z27I--|W1*,B/');
define('NONCE_SALT',       '`jXC[#HADR69g!i0&^du}kjN.{MMN0 J_~h2-<I1ux_,byQI<x&dIBJ_(n($;d_{');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
