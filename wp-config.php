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
define('DB_NAME', 'plaitil');

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
define('AUTH_KEY',         '?oSV$j0qd}m1Iq>jEFLnD/RA`eR*<_Fd&^Z)lep~Wt$v5#Hk !0k?/{1iuN/U7si');
define('SECURE_AUTH_KEY',  '/ad9jyAWDO:ylBS&^=Oe|3R]aqAQ6;99NCgqlCa`,M(6Y?zO ]e?jgg|z+zKWgh)');
define('LOGGED_IN_KEY',    'xI*Qc(DM=4[38KuE[u|V)dTo]96ZT0-*QXfHB;2qMdx`r>#W8iP97{[*z5ICk<{S');
define('NONCE_KEY',        'T:EO1~2N,;{bmA(`UH0`&uYL2WeV-h>-; /;I|AtDkvVw0Da25is%F7.Ex`p3>Vt');
define('AUTH_SALT',        'a5mv_!Yx{:2}_xN|EOj9Hj$<Mt`u(ni*!dPPYJ#s$_Sc|~ortU(ld1<[eN7unY<?');
define('SECURE_AUTH_SALT', 'xMEN+nH&Ev9zNrtgC7a0trv3Tn]ypkHYSy3TK#;r3#@>$o!E;D$Lwy[O4Yd$l(s{');
define('LOGGED_IN_SALT',   ' k*1cFYwH[/3j 8Z#TYTZ_-]j;?EgC&5;-qZ#ypfeKy>d7I-%MI=Z@ p_aSkF2ns');
define('NONCE_SALT',       '%x.AKO(IDcw.#u9AWhQXbW]bJ0H?&v*Sk8-HE/pi~%_aq~@><RseL`=aJ$Bg1Bx/');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'plait_2016_wp_';

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
