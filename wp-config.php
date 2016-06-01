<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'montre');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'F:@6!jQd]K9Bo6.~X@EGe@F5[uGY(C9r4@`}YK7s GB~QY;B;Ji#w>L%^l7Ukmh`');
define('SECURE_AUTH_KEY',  '}Zt5nn4 |g[ahi|.pq9!OzJgCYL$c8zV=3aTZa(bI~eWT~rY_G2%n}%>eP[30_Kq');
define('LOGGED_IN_KEY',    'FScNO)Q|_0NdcL$cmO-^&_*1`|V!4%AuWB}g: O@6<,7czmRN/&kJ{=],)7=u[Mo');
define('NONCE_KEY',        'l!i[WU0C*D/ih7^bBK3Wm#| OmUR=%Zu]]4tMW,Dl2=|T&P//#h/l2}^}9,pH.9C');
define('AUTH_SALT',        'RgiO]WmkrFOPwEozNzZn0h/dk+Y/{jAU&hfcidWhy;bXn4)ts`j<2/5kVBUJ}BaH');
define('SECURE_AUTH_SALT', 'D1#r(@%<%7I5FFu%ruKqR/eQ[Tr8m/4|hN&s&.Jzs;>9$1{meM*t|*xxSovqM7|?');
define('LOGGED_IN_SALT',   '(`Z-@.o^`(/}x[=-hcapWoCSor5+MH:2%D2I?6?ti%A&J<O42w#td#GnfFKf)ZF7');
define('NONCE_SALT',       'xtC(t#o@i+ryW(uZD5&{ejai/W9q*.$`vKTHa%32=`Mg2FOn%gVySVwj@0dOSZk0');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'clagan_wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');