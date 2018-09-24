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
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'troiswa');

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
define('AUTH_KEY',         '%&=)YwchKKp)F[kgI}Tc-fo*Fq(F?}9FWo>JLzM^dq%G,<7#^M)O$.eFfU:^oKX|');
define('SECURE_AUTH_KEY',  'D=P~V)>%?IgG5c{{(P Z^]RG([CsO{6hK8Arggo[mDL|~;g=H0Dq<&hx2M/:>xt.');
define('LOGGED_IN_KEY',    ')bimzw<aLPQQj~P(*x9:.B *2of|e=cdde0F%6A%vDe}q35Nqs@! ^D|BqYQRT/.');
define('NONCE_KEY',        ')6d)Ls78GtIvQ}4I]E7%6O+6Fz:wEH6_e+=~l?dSnU-(:)Hr9RIME~,SPP$/S!1S');
define('AUTH_SALT',        'ave.nqmXQ3>ZvCwTS]}/}&I8mLV}a.>.y`{3]-$o)@zbZ]@*Nh|bBZV!gyH,f=6p');
define('SECURE_AUTH_SALT', 'EeP0|YrvgD,mZ^(h^iS0/h:f)RTmAhH*a:+dNQZWOMz`/~ CLVu~iu*.[rC7C5-A');
define('LOGGED_IN_SALT',   ' ^2G}k90g :T*kj7-?Bc8nSiR~X2*VL7JkqGx$90}H4e*7-Eni)h2Yx>T.sL]X?M');
define('NONCE_SALT',       '0^9uJix^R3xhAO<]Cz/NjY1EC_-2Gm@}$0xD=#0_v1C85Y2I]W~JPOX6HXhI9Wa[');
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