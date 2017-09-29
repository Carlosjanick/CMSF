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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'cmsf');

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
define('AUTH_KEY',         'ke/W&&kYsE;whf&w0^uO~!?KSax((;|^e;=:d`(6l)#:w;..r2{B(SF[.{-.kJ|n');
define('SECURE_AUTH_KEY',  '!9B~wEo!abh26A>jw6R;JICF@O4UdoRa8s:AkHOIK) ]U{tG#Q2tC8yLYE<>/C1n');
define('LOGGED_IN_KEY',    'r:<T%5w!Tvy)Bk<p|IL%_E:gTLMtD#M/-lVc<=QwOXiX9B%rq#TF$.g-C8E%1E_I');
define('NONCE_KEY',        '.T@+Nft1sTZXNV#9iHFqkx}6!$OZK${*8Tz.n?n?PHxV:C8)9$j#L/Yla&d7,fxt');
define('AUTH_SALT',        'kH7r8#b[H-+nLoTAs{jqqm-Vi>*A9PNzV}0*h;-L>&=$Vt8#b%7^8e1H=3m6Kp^d');
define('SECURE_AUTH_SALT', '1j8|[gF6S0I9q_|Y-5lI!o#4W<E*9Wp?yyE 7M8!s,vRg~L2LGUDOTD>tZ?(K,|W');
define('LOGGED_IN_SALT',   ')>?MHM6TtBtjlDkX5l Id-.PTL/qWL>deG F*8L>w2^ap}zrr+aGImMvKc6u680N');
define('NONCE_SALT',       '2g7rJ7.)A(&E:m c8 !V)f,3O,gt0te`8(^UR[%{|kTqSt))x<5b28*&$t_1cb6h');

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
