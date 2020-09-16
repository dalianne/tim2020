<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'tim2020' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'a#iI8@bZL]b*:Hs5QI]GrWI:EJ0smBAVB$wMF1=F.b!~yXGpo@Ic=0W1LP%IHJQa' );
define( 'SECURE_AUTH_KEY',  'w4c1zbFHph3+LocX+>xAfht#2tLd,BMWSsH7tOUe}]M vRf[Y=)98dONooJ|2*]`' );
define( 'LOGGED_IN_KEY',    '_^DnjJArmNPPmFHc+T7!AaWNj8jl< I`lB1Ip+psOhyZZtkpigF$-EI7p%R=`*t:' );
define( 'NONCE_KEY',        '|n}P&$lp(uO^RWANRX<L91+gKHID$;WU 5cIivx0wc7:wzr7BTTtih~.wc1{ qj7' );
define( 'AUTH_SALT',        '&gf*2Dqh5H=2>QycTzK?L`E%j;?6nUr;9|EnI`XZHN-{2gjn1XNM@jw!IAy4(4KQ' );
define( 'SECURE_AUTH_SALT', 'Na`y?4bm9.ydhy;z*m9PQh]VYE|h0@s!-;?m6NYS4Kh7AOy!It/A*bk%Ln+psp0E' );
define( 'LOGGED_IN_SALT',   '}hs,};6aYu{W0)GOyT8ln&-G]#xz:9_P]LBoFzV5N*UmlUEk5i)EQrUZDhu{}2{<' );
define( 'NONCE_SALT',       '73Y*gd(,9o9AnppP87w@>c*aJ$SA0MR+4 Uxgr^[p2LLW8.u%u26x!~RHx7Pmv_]' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
