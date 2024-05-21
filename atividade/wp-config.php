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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'atividade' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '5?GKeZ;aI>$tjPp?xE`g)Hu)Ey>[)x_sJOi<&*1_~:yDx3vqWl4j |X{gl5h<MmR' );
define( 'SECURE_AUTH_KEY',  'Bzfqa)VCn_1];yc!o%y.~V}iPMfUEA.S_/SZLl6m!?,ylcmvx}Xdon1N)WX5M&R<' );
define( 'LOGGED_IN_KEY',    '$x.,e{UiT$Sp0l<tZ%l0pyhW1!kdu10[d*bC%9TwGLV//]5$El>Rh/77+T 2D[*8' );
define( 'NONCE_KEY',        'lj4MOpt]h&<(LIP&`pf^* TW*J{?Wf:;tha>E18@;s%,?Nn#gpyzxBb4zls(Du8@' );
define( 'AUTH_SALT',        'Iwyz_Z<l_O_L<Rr.5^(*97r/N((b^#W<!7DeuLU r<(q-5q+(p[PtMsGH6KIj^~^' );
define( 'SECURE_AUTH_SALT', 's[N,t;`7OacC#^U4Q+4kfCeCHJv<>+1%&skAb%&K:0m_/ &w>M#sfD4FV<B+Z$U7' );
define( 'LOGGED_IN_SALT',   '.yWPQ]xn;[6?EZ6<-N1FfFGXtr-^D<n?mouZn,u0-y>~mTfj:2^GVc[yNK}Lvh,~' );
define( 'NONCE_SALT',       '{r/=5iSR3@Bfolck.H:OI|AjGR5n%R*b {e&mlSYjN3u&2;qt~d}xEP%l,5?T:Q9' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
