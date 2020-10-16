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
define( 'DB_NAME', 'composition' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         '@giv7h00]=,guS>h+)X_5b=Otjd3l8rG*N+r}qfX6QWIl%dRSgqEzif+P]5BWF0F' );
define( 'SECURE_AUTH_KEY',  '*Nkcsc2mXI^O1nZ6,| }pC)Inm*3jT)D&-B#Jb0.fhXeQxPEV7W?yJ,ta(-^-56Y' );
define( 'LOGGED_IN_KEY',    '5Hp&5W0ka9Nw$6a2$T3vk#`~68=oYHIH4;g|4|R<MyN`{$z2@w;,bZIc&zvJL=Ye' );
define( 'NONCE_KEY',        'Q^@hnjf=2:(PLCx{o;z+)1]~4(OOQeji &{,cX?}`iyWoJ7l)6!1i*;?J0dcAm:6' );
define( 'AUTH_SALT',        'o4y`X+?:EICM:&]n1*TulNCB5&v0rG!l:b[*n&*)@s>5*6eEJ!*<m12U*}FG-g/0' );
define( 'SECURE_AUTH_SALT', '2xeFx+*Zb)AeTPV%*rzEl#!pmpuf*JCA6^=d!DljBvf+ILH5>cv$_jtd^UmXm]6S' );
define( 'LOGGED_IN_SALT',   '>hi(~7y`O&2%}0ax}-=&p}9#NSA:>Ywu(9,R:CWoxU].%+dKt,Ku+n#*;o|#N2~c' );
define( 'NONCE_SALT',       'G I=XdsrsD,3*3jkdWz,;=&$l2/% 2Oa@C&1VRUgl7kaV_&Tes}(cS0ddY(b9*|9' );
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
