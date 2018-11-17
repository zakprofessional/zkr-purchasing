<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'TestWordPress_db');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '7@saZN}IVka*!(DtLX~ +0/CR4{LziM-:1tI(h:r}KQZ|:on1][(ZdFI;[yv:RRn');
define('SECURE_AUTH_KEY',  '1Ug!]9-#R`uE>Q}O3bPXNZ|`(<%Ig[@C`C?)d7s-&y@jtAJh0[#E(VaPd6GI~}cH');
define('LOGGED_IN_KEY',    '78V!8l_r-PC<G<>i(79>iRV]<CF~sIF]TX/VWUT?:v)b^WApC~W[~=bCGqy`^ssw');
define('NONCE_KEY',        'mym2EN%*Bib{a?j%C}]N4]@n;=XpWOJBQ@3Vu.:0:7/*/`}cS2GJd2Tf]{=N7!*t');
define('AUTH_SALT',        '>LWy;(?y_3Fj$/V%4##Rw1(]_wO6%j[!bf4r}s3p]z5D6[*sPV6@e_hO hh|d1Cr');
define('SECURE_AUTH_SALT', 'Ko1n$tfbG?yF$t>;[dY|0SfE5_`wh,rvvc(p=hR)@9$A 6~/sSYElMhqzUtpq0D;');
define('LOGGED_IN_SALT',   '*{SjL67b>E:=d6=zY9;WpIW&t?(<nnga-=NVU&Wq`toT(mKp2sg yBsr?:(`O09U');
define('NONCE_SALT',       'pg!9M-YG8:v=n) xkZTtY/f~wI[x+td4k$YNdPbw1eQ{y#iQ(;E|RX/Axi;6zGC=');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');