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
define( 'DB_NAME', 'pwa' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '3TiNlNv-[}i~xrPs&Zs{ x1nMEl RzR!~dHrf0{dLILW{Ux6YXP$Haw?5iLC>[K9' );
define( 'SECURE_AUTH_KEY',  '].EWFJ~eB=~dqqIW0M36[P1L%HAv[N>>-W@G@v=F;j0fo?vT(T}n%}i+;*$_unJ]' );
define( 'LOGGED_IN_KEY',    'C^YaF}v~$xsWuXX/Yz%%_=#*BDy#gg#N41z.h%Za/g`G1SGq(;CR-d3P#L1V<N=;' );
define( 'NONCE_KEY',        'FQWTl&wJkKh?CoW@d5Cq3 QwOtuGfjiUQkyIPPP@kCg|HwaTc^D>U`K*0ME}Wlg+' );
define( 'AUTH_SALT',        '<.M9X-*cVA^I[nAVfRg|lrTY~X<YH}uZGT,fz]( cmK{IiV1IaaSzzbfeDB&^aC ' );
define( 'SECURE_AUTH_SALT', '1b?5fAI=s*yu)QIe9Iqf@eTy:NEU~][AXK1}Bl2*Yn12PwQ|zsYZILgK|!L$)Zo@' );
define( 'LOGGED_IN_SALT',   '%CQD(3j4g3*Z&~wX0t=;D=BC+z^W<<B&J(0/7gnF64o#s6;K1~N0 oWYL,H-#<+T' );
define( 'NONCE_SALT',       'Y8R*/tU(a`ummTG/y8vH2N4o$l<rj-#tljtE;z0aMGW*_TQ$5l:1Y/-+c3q.~GYG' );
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
